<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*store all books in $books and return the index view. Order returned books and paginate (6 per page)*/

        $books = Book::orderby('title','asc') -> paginate(8);
        return view('books.index', ['books' => $books]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return the create view (form)
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //all() refers to the form data which is saved in $request. Inputs are validated and passed to the mysql create syntax then returns all books. Bail will cause validation to stop running if any field does not pass.

         $this->validate($request,[
        'title' => 'bail|required|unique:books',
        'author' => 'bail|required',
        'cover_url' => 'bail|required',
      ]);

        Book::create($request->all());
        return redirect('books');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //returns the show view passes $book
        return view('books.show',[ 'book' => $book ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        // get the book
        $book = Book::find($book->id);

        // show the edit form and pass the book
        return view('books.edit')
            ->with('book', $book);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    { 
        // validate request
         $this->validate($request,[
        'title' => 'bail|required',
        'author' => 'bail|required',
        'cover_url' => 'bail|required',
      ]);

        // ***************** Alt approach
         // Find book -> look up "findorfail" method
         // Book::find($request->id);
         // Save input data to variable
         // $input= $request->all();
         // Fill in new data and save
         // $book->fill($input)->save();
         // End alt approach ********************

            $book = Book::find($book->id);
            $book->title = $request->title;
            $book->author= $request->author;
            $book->cover_url = $request->cover_url;
            $book->pub_date = $request->pub_date;
            $book->save();

            // Redirect to books. Note:Add UI success message bounce to a refreshed "show" with new info.
            return redirect('books');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        // Receives $book, runs delete method, and returns fresh index view

        $book->delete();

        return redirect('/books');

    }
}
