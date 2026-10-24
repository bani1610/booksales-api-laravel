<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public static function getData()
    {
        return [
            [
                'id' => 1,
                'name' => 'Fiksi',
                'description' => 'Buku cerita berdasarkan imajinasi.'
            ],
            [
                'id' => 2,
                'name' => 'Non-Fiksi',
                'description' => 'Buku berdasarkan fakta dan kejadian nyata.'
            ],
            [
                'id' => 3,
                'name' => 'Teknologi',
                'description' => 'Buku tentang komputer dan teknologi.'
            ],
            [
                'id' => 4,
                'name' => 'Sejarah',
                'description' => 'Buku tentang peristiwa masa lalu.'
            ],
            [
                'id' => 5,
                'name' => 'Pendidikan',
                'description' => 'Buku untuk pembelajaran dan pendidikan.'
            ]
        ];
    }
}
