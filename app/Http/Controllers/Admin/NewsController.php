<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'asc')->paginate(10);
        return view('pages.admin.news.index', compact('news'));
    }

    public function create()
    {
        return view('pages.admin.news.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5|max:255',
            'content' => 'required|min:5',
        ]);

        News::create([
            'user_id' => auth()->user()->id,
            'title'   => $request->title,
            'content' => $request->content,
            'category_id' => 1,
        ]);

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil ditambahkan',
            'type'    => 'success',
        ]);
    }

    public function edit()
    {
        return view('pages.admin.news.edit');
    }
}
