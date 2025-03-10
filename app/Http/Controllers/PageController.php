<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\UserSubmission;
use Barryvdh\DomPDF\Facade\Pdf;
use Exception;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create(Page $oldPage)
    {
        $page = new Page();
        $page->content_1 = $oldPage->content_1;
        $page->content_2 = $oldPage->content_2;
        $page->content_3 = $oldPage->content_3;
        $page->name = $oldPage->name;
        $page->slug = $oldPage->name . time();
        $page->save();

        return view('admin.pages.edit', compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'content_1' => 'required',
            'content_2' => 'required',
            'content_3' => 'required',
        ]);

        $slug = \Str::slug($request->name) . '-' . time();
        Page::create([
            'name' => $request->name,
            'content_1' => $request->content_1,
            'content_2' => $request->content_2,
            'content_3' => $request->content_3,
            'slug' => $slug,
        ]);

        return redirect()->route('admin.pages.index');
    }

    public function edit(Page $page)
    {
        return view('admin.pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'name' => 'required',
            // 'content_1' => 'required',
            'content_2' => 'required',
            // 'content_3' => 'required',
        ]);

        $page->update($request->all());
        return redirect()->route('admin.pages.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('admin.pages.index');
    }

    public function viewPage($slug){
        $page = Page::where('slug', $slug)->first();
        return view('pages.view', compact('page'));
    }


    public function submit(Request $request){
            $request->validate([
                'signature' => 'required',
                'name' => 'required'
            ]);
        try{
            $submission = UserSubmission::create([
                'page_id' => $request->page_id,
                'name' => $request->name,
                'signature' => $request->signature
            ]);
            Page::findOrFail($request->page_id)->submission_id = $submission->id;
            Page::findOrFail($request->page_id)->save();

            return redirect()->route('thanks', ['id' => $submission->id])->with('success', 'Signature submitted successfully');
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function thanks(Request $request, $id){
        try{
            $submission = UserSubmission::findOrFail($id);
            $page = Page::findOrFail($submission->page_id);

            return view('thanks', compact('submission'));
        }catch(Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function generatePdf($id)
    {
        // Fetch data from the database
        $submission = UserSubmission::findOrFail($id);
        $page = Page::findOrFail($submission->page_id);

        $pdf = Pdf::loadView('pdf.pdf', compact('submission', 'page'));

        // $pdf = Pdf::loadHTML($data); // Assuming 'html_content' stores the formatted HTML

        // Download the PDF
        return $pdf->download('document.pdf');
    }
}
