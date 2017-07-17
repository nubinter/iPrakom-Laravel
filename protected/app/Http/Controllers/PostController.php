<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
		$posts = Post::all();
		return view('home', ['title' => 'Selamat Datang iPrakom', 'posts' => $posts]);
	}
	
	public function add() {
		return view('addpost', ['title' => 'Membuat Post Baru']);
	}
	
	public function save(Request $request) {
		$post = new Post;
		$post->title = $request->title;
		$post->content = $request->content;
		$post->save();
		return redirect('/');
	}
	
	public function edit($id) {
		$post = Post::find($id);
		return view('editpost', ['title' => 'Edit Post', 'post' => $post]);
	}
	
	public function saveedit(Request $request) {
		$post = Post::find($request->id);
		$post->title = $request->title;
		$post->content = $request->content;
		$post->update();
		return redirect('/');
	}
	
	public function delete($id) {
		$post = Post::find($id);
		$post->delete();
		return redirect('/');
	}
}