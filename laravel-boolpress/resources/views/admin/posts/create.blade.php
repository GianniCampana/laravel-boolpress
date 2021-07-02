@extends('layouts.app')

@section('content')
<div class="container">
<h1>Nuovo post</h1>
<div>
    <form action="{{route('admin.posts.store')}}" method="POST">
        @csrf 
        @method('POST')

        <div class="mb-3">
            <label class="label-control" for="title">Titolo</label>
            <input type="text" name="title" id="title" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label-control" for="title">Content</label>
           <textarea type="text" name="content" id="content" class="form-control" rows="5"></textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Invio</button>
            <button class="btn btn-secondary" type="reset">Reset</button>
        </div>
    </form>
</div>




</div>
@endsection