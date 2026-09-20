<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = [
            [
                'nama' => 'Fiksi',
                'deskripsi' => 'Buku yang berisi cerita rekaan atau imajinasi.'
            ],
            [
                'nama' => 'Pendidikan',
                'deskripsi' => 'Buku yang berkaitan dengan pembelajaran dan pendidikan.'
            ],
            [
                'nama' => 'Teknologi',
                'deskripsi' => 'Buku yang membahas teknologi dan perkembangan digital.'
            ],
            [
                'nama' => 'Sejarah',
                'deskripsi' => 'Buku yang membahas peristiwa dan sejarah masa lalu.'
            ],
            [
                'nama' => 'Novel',
                'deskripsi' => 'Buku cerita dengan bentuk karya sastra prosa.'
            ]
        ];

        return view('category.index', compact('categories'));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
