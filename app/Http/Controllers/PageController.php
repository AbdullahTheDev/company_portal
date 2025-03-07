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
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:pages',
        ]);

        Page::create($request->all());
        return redirect()->route('pages.index');
    }

    public function edit(Page $page)
    {
        return view('pages.edit', compact('page'));
    }

    public function update(Request $request, Page $page)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'slug' => 'required|unique:pages,slug,' . $page->id,
        ]);

        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('pages.index');
    }
}
