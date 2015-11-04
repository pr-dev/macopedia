<?php

namespace App\Http\Controllers;

use App\Http\Requests;

class HomePageController extends Controller
{
    public function index()
    {
        return redirect()->action('BooksController@index');
    }

}
