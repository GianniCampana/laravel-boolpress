@extends('layouts.app')

@section('content')
<div class="container">
<h1>Modifica: 
    <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a></h1>
<div>
    <form action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf 
        @method('PATCH')

        <div class="mb-3">
            <label class="label-control" for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control">
        </div>

        <div class="mb-3">
            <label class="label-control" for="title">Content</label>
           <textarea type="text" name="content" id="content" class="form-control" rows="5">{{$post->content}}</textarea>
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Invio</button>
        </div>
    </form>
</div>




</div>
@endsection