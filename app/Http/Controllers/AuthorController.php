<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Author as Author;
use DB;
use Carbon\Carbon;

class AuthorController extends Controller
{
    public function __construct() {
        $this->Middleware('auth');
    }

    public function getAuthors() {
        $vars = [
            'pageTitle' => 'Authors',
            'authorsCount' => Author::count(),
            'authors' => Author::all(),
        ];
        return view('authors.list', $vars);
    }

    public function getNewAuthor() {

        $vars = [
            'pageTitle' => 'Add Author',
        ];

        return view('authors.add', $vars);
    }

    public function postNewAuthor(Request $request) {

        $this->validate($request, [
            'aa-first_name' => 'required',
            'aa-last_name' => 'required',
            'aa-birthdate' => 'date'
        ]);

        $data = [
            'first_name' => $request->input('aa-first_name'),
            'last_name' => $request->input('aa-last_name'),
            'birthdate' => $request->input('aa-birthdate'),
            'location' => $request->input('aa-location'),
            'description' => $request->input('aa-description'),
        ];
        DB::table('authors')->insert($data);

        return redirect(route('authors.list'))->withSuccess('Nadungag na choi!');
    }

}
