<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Validator;

class PostController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();

        return view('site.posts', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('site.post_add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'slug' => 'required|max:20|alpha|unique:posts,slug',
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        if (Post::create($request->all())) {
            return redirect()->route('allPosts')->with('status', 'Информация успешно добавлена.');
        }

        return back()->with('status', 'Ошибка!');
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $post = Post::all()->where('slug', $slug)->first();

        return view('site.post', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('site.post_edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'slug' => 'required|max:20|alpha|unique:posts,slug,' . $id,
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $input = $request->except(['_token']);

        if (Post::find($id)->fill($input)->update()) {
            return redirect()->route('allPosts')->with('status', 'Информация успешно обновлена.');
        }

        return back()->with('status', 'Ошибка!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->isMethod('post')) {
            if (Post::destroy($id)) {
                return redirect()->route('allPosts')->with('status', 'Пункт успешно удален.');
            }

            return back()->with('status', 'Ошибка!');
        }

        return view('site.post_delete', compact('id'));
    }
}
