<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Book;
use Illuminate\Routing\Controller;

class BookController extends Controller
{
    public function index()
    {
        return Book::all();
    }

    public function store(BookRequest $request)
    {
        $book = Book::create($request->validated());
        return response()->json($book, 201);
    }

    public function show(Book $book)
    {
        return $book;
    }

    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->validated());
        return response()->json($book, 200);
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return response()->json(null, 204);
    }
}
