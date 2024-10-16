<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return response()->json($categories);
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
            $data = Category::create($data = $request->all());
            return response()->json([
                "success" => true,
                "massage" => "Category Berhasil Di tambahkan",
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
            $data = Category::find($id);
            if (!$data) {
                return response()->json([
                    "success" => false,
                    "massage" => "id " . $id . " Tidak Ditemukan",
                ]);
            }
            return response()->json([
                "success" => true,
                "massage" => "Category Bereah Di tampilkan",
                "data" => $data
            ]);
        } catch (\Exception $e) {
            return response()->json([
                "success" => false,
                "massage" => "Category Tidak Ditemukan" . $e->getMessage(),
                "data" => $id
            ]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        //
    }
}
