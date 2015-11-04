@extends('layout')

@section('content')
    <div class="panel panel-default margin-10">
        <div class="panel-heading">
            <h1 class="panel-title">Dodaj książkę</h1>
        </div>
        <div class="panel-body">
            <form action="{{ action('BooksController@store') }}" method="post">
                @include('books._form')
            </form>
        </div>
    </div>
@stop