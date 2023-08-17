<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        $tags = Tag::all();
        return response()->json($tags);
    }

    public function show(Tag $tag)
    {
        return response()->json($tag);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:tags|max:255',
        ]);

        $tag = new Tag();
        $tag->name = $validatedData['name'];
        $tag->save();

        return response()->json($tag, 201);
    }

}

