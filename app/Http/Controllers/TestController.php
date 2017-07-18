<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testPage(){
        return view('test-view');
    }

    public function add_post(){

        $posts = Post::get();
        $posts_all = Post::all();
        return view('add_post')->with('posts_all', $posts_all);;
    }

    public function  parent_add_post ()
    {
        return view('parent_add_post');
    }

    public function create_post_in_db (Request $request) {
        $post = new Post();
        $title = $request->input('title');
        $text = $request->input('text');

        $post->title = $title;
        $post->text = $text;
        $post->save();

        return redirect('/add_post');

    }

    public function comments () {
        $post = Post::get();
        $post_all = Post::all();
        $comments = Comment::get();

        $comments_all = Comment::all();
        return view('comments')->with('comments_all', $comments_all);
    }

    public function create_comments (Request $srequest) {
        $comments = new Comment;
        $comment = $srequest->input('comment');
        $post_id = $srequest->get('post_id');
        $comments->text = $comment;
        $comments->name = 'йоу собаки я наруто узумаки';

        $comments->post_id = (int) $post_id;
        $comments->save();
        return redirect('/comments');
    }
    public function post_comment (Request $request)
    {
        $post_id = $request->get('post_id');
        $comments = Comment::all();
        $posts = Post::where('id', $post_id);
        return view('post_comment')->with('post_id', $post_id)->with('comments', $comments)->with('posts', $posts);
    }


}
