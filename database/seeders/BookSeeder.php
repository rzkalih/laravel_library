<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'judul' => 'Bumi',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2013,
            'stok' => 10,
        ]);

        Book::create([
            'judul' => 'Hujan',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2015,
            'stok' => 5,
        ]);

        Book::create([
            'judul' => 'Rembulan Tenggelam di Wajahmu',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2016,
            'stok' => 8,
        ]);

        Book::create([
            'judul' => 'Pulang',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2017,
            'stok' => 12,
        ]);

        Book::create([
            'judul' => 'Bulan',
            'penulis' => 'Tere Liye',
            'tahun_terbit' => 2018,
            'stok' => 7,
        ]);
    }
}
