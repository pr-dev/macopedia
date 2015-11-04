<?php

get('/', 'HomePageController@index');
get('books/api', 'BooksController@api');
resource('books', 'BooksController');