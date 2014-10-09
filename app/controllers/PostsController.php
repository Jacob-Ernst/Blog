<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::orderBy('created_at', 'DESC')->paginate(3);
		
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{	
		// $post = new Post ();
		// return $this->savePost($post);
		
		$validator = Validator::make( Input::all() , Post::$rules);
		
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Oops someone was dumb');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else {
			$post = new Post();
		
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			
			$post->save();
			
			$post_id = $post->id;
			
			Session::flash('successMessage', 'Thar ye goes!');
			
			return Redirect::action('PostsController@show', $post_id);
		}
		
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		
		if(!$post)
		{
			App::abort(404);
		}
		
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		
		if(!$post)
		{
			App::abort(404);
		}
		
		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make( Input::all() , Post::$rules);
		
		if ($validator->fails()) {
			Session::flash('errorMessage', 'Oops someone was dumb');
			return Redirect::back()->withInput()->withErrors($validator);
		}
		else {
			$post = Post::find($id);
		
			$post->title = Input::get('title');
			$post->content = Input::get('content');
			
			$post->save();
			
			$post_id = $post->id;
			
			Session::flash('successMessage', 'Thar ye goes!');
			
			return Redirect::action('PostsController@show', $post_id);
		}
	}

	protected function savePost(Post $post){
		
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return "Delete Delete Delete $id";
	}


}
