<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Book;

class BooksController extends Controller
{
  
    public function __construct()
    {
        
    }

    public function create(Request $request)
    {
        $book = Book::create([
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'author' => $request->input('author'),
            'city' => $request->input('city'),
            'publisher' => $request->input('publisher'),
        ]);

        $response=[
            'status'=>'success',
            'message'=>'book created',
        ];

        return response()->json($response, 200);
    }

    public function index()
    {
        $books = Book::all();

        $response=[
            'status'=>'success',
            'message'=>'books list',
            'data' => $books,
        ];

        return response()->json($response, 200);
    }

    public function show($id)
    {
        $book = Book::findOrFail($id);
        $response=[
            'status'=>'success',
            'data' => $book,
        ];
        return response()->json($response, 200);
    }

    public function delete($id)
    {
        $book = Book::findOrFail($id);
        if($book){
            $book->delete();
            $response=[
                'status'=>'success',
                'message' => 'deleted',
             ];
        return response()->json($response, 200);
        }
    }

    public function update(Request $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->update($request->all());
         $response=[
            'status'=>'success',
            'message' => 'updated',
            'data' =>$book,
        ];
        return response()->json($response, 200);

    }
}
