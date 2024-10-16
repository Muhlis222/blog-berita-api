<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\Log;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        try {
            $data = Post::create($request->all());
            return response()->json([
                "success" => true,
                "massage" => "Post Berhasil Di tambahkan",
                "data" => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "massage" => $e->getMessage(),
                "data" => $request->all()
            ]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {

        try {
            $data = Post::find($id);
            if (!$data) {
                return response()->json([
                    "success" => false,
                    "massage" => "id " . $id . " Tidak Ditemukan",
                ]);
            }
            return response()->json([
                "success" => true,
                "massage" => "Post Berhasil Di tampilkan",
                "data" => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "massage" => "Post Tidak Ditemukan" . $e->getMessage(),
                "data" => $id
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
