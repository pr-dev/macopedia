<?php

namespace App\Http\Controllers;

use Input;
use App\Book;
use Response;
use App\Http\Requests;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    /**
     * Display a listing of the books resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id', 'desc')->paginate(10);
        $books->setPath(action('BooksController@index'));
        if (!empty(Input::get('page')) && (Input::get('page') > $books->lastPage())) {
            return redirect()->action('BooksController@index',  ['page'=> $books->lastPage()]);
        }
        $title = 'Lista książek';

        return view('books.index', compact('books', 'title'));
    }

    /**
     * Show the form for creating a new book resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Dodaj nową książkę';

        return view('books.create', compact('title'));
    }

    /**
     * Store a newly created book resource in storage.
     *
     * @param BookRequest $request App\Http\Requests\BookRequest request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(BookRequest $request)
    {
        $book = Book::create($request->only(['title', 'description']));

        return redirect()->action('BooksController@index')->withSuccess("Książka \"{$book->title}\" została dodana");
    }

    /**
     * Display the specified book resource.
     *
     * @param Book $book App\Book model
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        $title = "Szczegóły: " . $book->title;

        return view('books.show', compact('book', 'title'));
    }

    /**
     * Show the form for editing the specified book resource.
     *
     * @param Book $book App\Book model
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        $title = "Edycja: " . $book->title;

        return view('books.edit', compact('book', 'title'));
    }

    /**
     * Update the specified book resource in storage.
     *
     * @param BookRequest $request App\Http\Requests\BookRequest request
     * @param Book $book           App\Book model
     *
     * @return \Illuminate\Http\Response
     */
    public function update(BookRequest $request, Book $book)
    {
        $book->update($request->only(['title', 'description']));

        return redirect()->action('BooksController@index')->withSuccess("Książka \"{$book->title}\" została zaktualizowana");
    }

    /**
     * Remove the specified book resource from storage.
     *
     * @param Book $book App\Book model
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->action('BooksController@index')->withSuccess("Książka \"{$book->title}\"  została usunięta");
    }

    /**
     * Display an api of the books.
     *
     * @return json
     */
    public function api()
    {
        return Response::json(Book::all());
    }
}
