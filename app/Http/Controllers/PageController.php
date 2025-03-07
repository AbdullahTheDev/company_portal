<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        return view('admin.pages.index', compact('pages'));
    }

    public function create()
    {
        return view('admin.pages.create');
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
}
