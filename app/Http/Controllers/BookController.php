<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Book as Book;

class BookController extends Controller
{

    public function __construct() {

    }

    public function getBooks() {
        $vars = [
            'books' => Book::all(),
        ];
        return view('books.list', $vars);
    }

    public function getNewBook() {

        $vars = [
            'pageTitle' => 'Add Book',
        ];

        return view('books.add', $vars);
    }

    public function postNewBook() {
        $vars = [
            'pageTitle' => 'Add Book',
        ];
        $data = [
            'title' => $this->request->input('ab-title'),
            'author' => $this->request->input('ab-author'),
            'publishing_year' => $this->request->input('ab-publishing_year'),
        ];
        DB::table('books')->insert($data);
        return redirect(route('books.list'))->withSuccess('Nadungag na choi!');
    }

}
