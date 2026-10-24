<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
     public static function getData()
    {
        return [
            [
                'id' => 1,
                 'name' => 'J.K. Rowling',
                 'photo' => 'jk_rowling.jpg',
                 'bio' => 'British author, best known for the Harry Potter series.'
             ],
             [
                 'id' => 2,
                 'name' => 'George R.R. Martin',
                 'photo' => 'george_rr_martin.jpg',
                 'bio' => 'American novelist and short story writer, known for A Song of Ice and Fire.'
             ],
             [
                 'id' => 3,
                 'name' => 'Isaac Asimov',
                 'photo' => 'isaac_asimov.jpg',
                 'bio' => 'American author and professor of biochemistry, known for his works in science fiction.'
             ],
             [
                 'id' => 4,
                 'name' => 'Pramoedya Ananta Toer',
                 'photo' => 'pramoedya_portrait.jpg',
                 'bio' => 'Prominent Indonesian author of the Buru Quartet.'
             ],
             [
                 'id' => 5,
                 'name' => 'Tere Liye',
                 'photo' => 'tere_liye.jpg',
                 'bio' => 'Prolific Indonesian author across diverse genres.'
             ],
             [
                 'id' => 6,
                 'name' => 'Agatha Christie',
                 'photo' => 'agatha.jpg',
                 'bio' => 'English writer known as the Queen of Crime.'
             ],
             [
                 'id' => 7,
                 'name' => 'Haruki Murakami',
                 'photo' => 'murakami.jpg',
                 'bio' => 'Contemporary Japanese writer famous for surrealism.'
             ]
         ];
     }
}
