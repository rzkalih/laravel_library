<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = [
            [
                'nama' => 'agus',
                'email' => 'agus@gmail.com',
                'alamat' => 'Karawang'
            ],
            [
                'nama' => 'agis',
                'email' => 'agis@gmail.com',
                'alamat' => 'Bekasi'
            ],
            [
                'nama' => 'agos',
                'email' => 'agos @gmail.com',
                'alamat' => 'Karawang'
            ],
            [
                'nama' => 'agas',
                'email' => 'agas@gmail.com',
                'alamat' => 'Jakarta'
            ],
            [
                'nama' => 'dinda',
                'email' => 'dinda@gmail.com',
                'alamat' => 'Purwakarta'
            ]
        ];

        return view('member.index', compact('members'));
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
        //
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
