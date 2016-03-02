<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;

use App\Book as Book;
use App\Author as Author;

class BookController extends Controller
{

    public function __construct() {
        $this->Middleware('auth');
    }

    public function getBooks() {
        $vars = [
            'pageTitle' => 'Books',
            'books' => Book::all(),
        ];
        return view('books.list', $vars);
    }

    public function getNewBook() {

        $vars = [
            'pageTitle' => 'Add Book',
            'authors' => Author::all(),
        ];

        return view('books.add', $vars);
    }

    public function postNewBook(Request $request) {

        $this->validate($request, [
            'ab-title' => 'required',
            'ab-author' => 'required',
            'ab-publishing_year' => 'required|integer',
        ]);

        $vars = [
            'pageTitle' => 'Add Book',
        ];

        $data = [
            'title' => $request->input('ab-title'),
            'author' => $request->input('ab-author'),
            'publishing_year' => $request->input('ab-publishing_year'),
        ];
        DB::table('books')->insert($data);

        return redirect(route('books.list'))->withSuccess('Nadungag na choi!');
    }

    public function getBookDetails($bookID) {

        $book = Book::find($bookID);

        $vars = [
            'pageTitle' => $book->title,
            'book' => $book,
        ];

        return view('books.details', $vars);
    }

}
