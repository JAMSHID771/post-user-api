<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->get();

        return response()->json([
            'status' => 200,
            'message' => 'Barcha postlar',
            'data' => $posts
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePostRequest $request)
    {
        // $validated = $request->validate([
        //     'title' => 'required|string',
        //     'body' => 'required|string',
        //     'user_id' => 'required|exists:users,id',
        // ]);
        $validated = $request->validated();

        $post = Post::create($validated);

        return response()->json([
            'status' => 201,
            'message' => 'Post yaratildi',
            'data' => $post
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with('user')->find($id);

        if (!$post) {
            return response()->json([
                'status' => 404,
                'message' => 'Post topilmadi'
            ], 404);
        }

        return response()->json([
            'status' => 200,
            'message' => 'Post topildi',
            'data' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => 404,
                'message' => 'Post topilmadi'
            ], 404);
        }

        // $validated = $request->validate([
        //     'title' => 'required|string',
        //     'body' => 'required|string',
        //     'user_id' => 'required|exists:users,id',
        // ]);

        $validated = $request->validated();
        $post->update($validated);

        return response()->json([
            'status' => 200,
            'message' => 'Post yangilandi',
            'data' => $post
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);

        if (!$post) {
            return response()->json([
                'status' => 404,
                'message' => 'Post topilmadi'
            ], 404);
        }

        $post->delete();

        return response()->json([
            'status' => 204,
            'message' => 'Post ochirildi'
        ]);
    }
}
