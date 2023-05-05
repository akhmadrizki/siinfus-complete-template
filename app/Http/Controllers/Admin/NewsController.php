<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(10);
        return view('pages.admin.news.index', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.news.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'   => 'required|min:5|max:255',
            'content' => 'required|min:5',
            'image'   => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // get image file and hash it
            $image = $request->file('image')->hashName();
            $request->file('image')->storeAs('images/news', $image, 'public');
        }

        News::create([
            'user_id'     => auth()->user()->id,
            'title'       => $request->title,
            'content'     => $request->content,
            'image'       => $image ?? null,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil ditambahkan',
            'type'    => 'success',
        ]);
    }

    public function edit(News $news)
    {
        $categories = Category::all();

        return view('pages.admin.news.edit', compact('news', 'categories'));
    }

    public function update(Request $request, News $news)
    {
        $news->update([
            'title'       => $request->title,
            'content'     => $request->content,
            'category_id' => $request->category_id,
        ]);

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil diperbarui',
            'type'    => 'success',
        ]);
    }

    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with([
            'message' => 'Berita berhasil dihapus',
            'type'    => 'success',
        ]);
    }
}
