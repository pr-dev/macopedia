@extends('layout')

@section('content')
    <div class="panel panel-default margin-10">
        <div class="panel-heading">
            <h3 class="panel-title">
                <a href="{{ action('BooksController@edit', $book) }}" class="btn btn-info btn-sm white" data-toggle="tooltip" data-placement="left" title="edytuj"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                {{ $book->title }}
            </h3>

        </div>
        <div class="panel-body">
            {!!  nl2br($book->description)  !!}
        </div>
    </div>
@stop