<?php

namespace App\Http\Controllers;

use Mail;
use App\Post;
use App\Comment;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testPage(){
        return view('test-view');
    }

    public function add_post(){

        $posts_all = Post::all();

        return view('posts.add_post.add_post')->with('posts_all', $posts_all);;
    }

    public function  parent_add_post (){
        return view('posts.add_post.parent_add_post');
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
        $comments_all = Comment::all();
        return view('posts.comments to the posts.comments')->with('comments_all', $comments_all);
    }

    public function create_comments (Request $srequest) {
        $comments = new Comment;

        $comment = $srequest->input('comment');
        $post_id = $srequest->get('post_id');

        $comments->text = $comment;
        $comments->name = 'йоу собаки я наруто узумаки';
        $comments->post_id = (int) $post_id;
        $comments->save();

        $this->sendmail($srequest);
        //return view('posts.Dispatch_mail.send')-with($this->sendmail($srequest));
        return $this->sendmail($srequest);
        //return redirect('/comments');
    }
    public function post_comment (Request $request){
        $post_id = $request->get('post_id');
        $comments = Comment::where('post_id', $post_id)->get();
        $posts = Post::where('id', $post_id)->first();
        return view('posts.comments to the posts.post_comment')->with('post_id', $post_id)->with('comments', $comments)->with('posts', $posts);
    }

    public function sendmail (Request $request) {
        $comment = $request->get('comment');
        Mail::send('posts.Dispatch_mail.send', ['comment' => $comment], function ($m) use ($comment) {
            //$m->from('form-request@desire-s.ru', $comment );

            $m->to('bogdan@desire-s.ru')->subject($comment);
        });
        return redirect('/post_comment');
    }
    }

