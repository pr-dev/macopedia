@extends('layout')

@section('content')
    <div class="panel panel-default margin-10">
        <div class="panel-heading">
            <h1 class="panel-title">edycja</h1>
        </div>
        <div class="panel-body">
            <form action="{{ action('BooksController@update', $book) }}" method="post">
                <input type="hidden" name="_method" value="PUT">
                @include('books._form')
            </form>
        </div>
    </div>
@stop