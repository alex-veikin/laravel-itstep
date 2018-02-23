<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Post;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();
        $posts = Post::all();

        $data = [
            'pages' => $pages,
            'posts' => $posts
        ];

        return view('site.index', ['data' => $data]);
    }


    public function addPage(Request $request)
    {
        if($request->isMethod('post')) {

        }


        $data = [];

        return view('site.page_add', $data);
    }


    public function page($slug)
    {
        $page = Page::all()->where('slug', $slug)->first();

        $data = [
            'page' => $page,
        ];

        return view('site.page', $data);
    }


    public function pagesAll()
    {
        $pages = Page::all();

        $data = [
            'pages' => $pages,
        ];

        return view('site.pages', $data);
    }
}
