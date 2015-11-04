@extends('layout')

@section('content')
    <div class="panel panel-default margin-10">
        <div class="panel-heading">'
            <a href="{{ action('BooksController@create') }}" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> dodaj książkę</a>
            <a href="{{action('BooksController@api')}}" class="btn btn-default"><strong>{ }</strong> api</a>
        </div>
        <table class="table table-bordered table-hover" id="books">
            <tr>
                <th>
                    #
                </th>
                <th>
                    Tytuł
                </th>
                <th>
                    Część opisu
                </th>
                <th>
                    Data stworzenia
                </th>
                <th>
                    Data aktualizacji
                </th>
                <th></th>
            </tr>
            @foreach($books as $key=>$book)
                <tr>
                    <td>
                        {{ $key + 1 }}
                    </td>
                    <td>
                        {{ $book->title }}
                    </td>
                    <td>
                        {{ \Illuminate\Support\Str::limit($book->description, 50) }}
                    </td>
                    <td>
                        {{ $book->created_at }}
                    </td>
                    <td>
                        {{ $book->updated_at }}
                    </td>
                    <td>
                        <form action="{{ action('BooksController@destroy', $book) }}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-danger" data-toggle="tooltip" data-placement="left" title="usuń"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></button>
                        </form>
                        <a href="{{ action('BooksController@edit', $book) }}" class="btn btn-info" data-toggle="tooltip" data-placement="left" title="edytuj"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a href="{{ action('BooksController@show', $book) }}" class="btn btn-default" data-toggle="tooltip" data-placement="left" title="pokaż"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
    {!! $books->render() !!}
@stop