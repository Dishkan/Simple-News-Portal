<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function show() {

        $articles = Article::all();
        $menu = Article::all();
        $id = 0;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function business() {

        $articles = Article::where('category_id', '=', 1)->get();
        $menu = Article::all();
        $id = 1;

        return view('index',['articles' => $articles , "id" => $id, "menu" => $menu]);
    }

    public function sport() {

        $articles = Article::where('category_id', '=', 2)->get();
        $menu = Article::all();
        $id = 2;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function music() {

        $articles = Article::where('category_id', '=', 3)->get();
        $menu = Article::all();
        $id = 3;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function finance() {
        $articles = Article::where('id', '=', 1)->get();
        $menu = Article::all();
        $id = 1;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function economics() {
        $articles = Article::where('id', '=', 5)->get();
        $menu = Article::all();
        $id = 1;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function entrepreneurship() {
        $articles = Article::where('id', '=', 4)->get();
        $menu = Article::all();
        $id = 1;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function football() {
        $articles = Article::where('id', '=', 2)->get();
        $menu = Article::all();
        $id = 2;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function workout() {
        $articles = Article::where('id', '=', 6)->get();
        $menu = Article::all();
        $id = 2;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function swimming() {
        $articles = Article::where('id', '=', 7)->get();
        $menu = Article::all();
        $id = 2;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function rapping() {
        $articles = Article::where('id', '=', 3)->get();
        $menu = Article::all();
        $id = 3;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function classical() {
        $articles = Article::where('id', '=', 9)->get();
        $menu = Article::all();
        $id = 3;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function vocal() {
        $articles = Article::where('id', '=', 8)->get();
        $menu = Article::all();
        $id = 3;

        return view('index',['articles' => $articles, "id" => $id, "menu" => $menu]);
    }

    public function allcat() {

        $menu = Article::all();

        return view('allcat',["menu" => $menu]);
    }
}
