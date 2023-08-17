<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('tags')->get();
        return response()->json($posts);
    }

    public function show(Post $post)
    {
        return response()->json($post);
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        $post = new Post();
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->user_id = $user->id;
        $post->save();

        return response()->json($post, 201);
    }

    public function update(Request $request, Post $post)
    {
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->save();

        return response()->json($post);
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->json(null, 204);
    }

    public function addTags(Request $request, Post $post)
    {
        $tagIds = $request->input('tags');
        $post->tags()->attach($tagIds);

        return response()->json($post->load('tags'));
    }

    public function removeTag(Post $post, $tagId)
    {
        $post->tags()->detach($tagId);

        return response()->json($post->load('tags'));
    }
}
