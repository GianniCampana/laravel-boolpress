@extends('layouts.app')

@section('content')
<div class="container">
<h1>
    Modifica: 
    <a href="{{route('admin.posts.show', $post)}}">{{$post->title}}</a>
</h1>
@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach
        </ul>
    </div>

@endif
<div>
    <form action="{{route('admin.posts.update', $post)}}" method="POST">
        @csrf 
        @method('PATCH')

        <div class="mb-3">
            <label class="label-control" for="title">Titolo</label>
            <input type="text" name="title" id="title" value="{{$post->title}}" class="form-control  @error('title') is-invalid @enderror" value=""{{old('title',$post->title)}}>
            @error('title')
            <p class="text-danger">
                    {{$message}}
            </p>
            @enderror
        </div>

        <div class="mb-3">
            <label class="label-control" for="title">Content</label>
           <textarea type="text" name="content" id="content" class="form-control  @error('content') is-invalid @enderror" rows="5">{{old('content', $post->content)}}</textarea>
           @error('content')
            <p class="text-danger">
                    {{$message}}
            </p>
            @enderror
        </div>
        <div>
            <button class="btn btn-primary" type="submit">Invio</button>
        </div>
    </form>
</div>




</div>
@endsection