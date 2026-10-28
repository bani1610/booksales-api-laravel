<?php

namespace App\Http\Controllers;

use App\Models\Book;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['genre', 'author'])->get();

        return response()->json([
            'success' => true,
            'message' => 'List Data Books',
            'data' => $books
        ], 200);
    }
}
