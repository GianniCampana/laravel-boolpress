@extends('layouts.app')

@section('content')
<div class="container">
<h1>{{$post->title}}</h1>
<h3>
    @if($post->category)
    Categoria:
    {{$post->category->name}}
    @else
    Nessuna categoria!
    @endif
</h3>
<div>
   @forelse($post->tags as $tag)
        <span class="badge badge-primary">{{ $tag->name }}</span>
   @empty
    -
   @endforelse
</div>
<p>{{$post->content}}</p>
<div>
    <a class="btn btn-info" href="{{route('admin.posts.edit', $post)}}">EDIT</a>
</div>



</div>
@endsection
