<?php

namespace App\Http\Controllers;

//use宣⾔は外部にあるクラスをPostController内にインポートできる。
//この場合、App\Models内のPostクラスをインポートしている。
use App\Models\Post;
use Illuminate\Http\Request;


class PostController extends Controller
{
    public function home(Post $post)
    {
        return view('posts/home')->with(['posts' => $post->get()]);
        //home内で使う変数'posts'と設定。'posts'の中⾝にgetを使い、インスタンス化した$postを代⼊。
    }
}
?>