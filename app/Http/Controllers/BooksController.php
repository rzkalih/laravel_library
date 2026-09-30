<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;


class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();

        return view('books.index', compact('books'));
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
        $books = [
            [
                'id' => 1,
                'judul' => 'Laskar Pelangi',
                'penulis' => 'Andrea Hirata',
                'tahun_terbit' => 2005
            ],
            [
                'id' => 2,
                'judul' => 'Bumi',
                'penulis' => 'Tere Liye',
                'tahun_terbit' => 2014
            ],
            [
                'id' => 3,
                'judul' => 'Negeri 5 Menara',
                'penulis' => 'Ahmad Fuadi',
                'tahun_terbit' => 2009
            ],
            [
                'id' => 4,
                'judul' => 'Dilan 1990',
                'penulis' => 'Pidi Baiq',
                'tahun_terbit' => 2014
            ],
            [
                'id' => 5,
                'judul' => 'Perahu Kertas',
                'penulis' => 'Dee Lestari',
                'tahun_terbit' => 2009
            ]
        ];

        $book = collect($books)->firstWhere('id', $id);

        return view('books.show', compact('book'));
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
