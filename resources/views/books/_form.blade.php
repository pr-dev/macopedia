<input type="hidden" name="_token" value="{{ csrf_token() }}">
<div class="form-group @if($errors->has('description'))has-error @endif">
    <label for="title">Tytuł</label>
    <input type="title" maxlength="100" class="form-control @if($errors->has('title'))has-error @endif" name="title" placeholder="Tytuł" value="{{old('title', isset($book) ? $book->title : '')}}">
    @foreach($errors->get('title') as $msg)
        <span class="error-message">{{ $msg }}</span>
    @endforeach
</div>
<div class="form-group @if($errors->has('description'))has-error @endif">
    <label for="description">Opis</label>
    <textarea class="form-control" rows="5" name="description" placeholder="Opis">{{old('description', isset($book) ? $book->description : '')}}</textarea>
    @foreach($errors->get('description') as $msg)
        <span class="error-message">{{ $msg }}</span>
    @endforeach
</div>
<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> zapisz</button>