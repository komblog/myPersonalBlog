@extends('layouts.master')
@section('header-home')
  @include('layouts.header-home')
@endsection
@section('content')
<!-- Main Content -->  
  @foreach($posts as $post)
    <div class="post-preview">
      <a href="{{ route('show', $post->id) }}">
        <h2>{{$post->title}}</h2>
      </a>
      <p class="post-meta">Posted by <a href="#">{{$post->user->name}}</a> 
        on {{$post->created_at->toFormattedDateString()}}
      </p>
      @if(count($post->tags))
        Tags : 
        @foreach($post->tags as $tag)
          <span class="badge badge-pill badge-warning"><a href="/post/tag/{{ $tag->name }}"> {{ $tag->name }} </a></span>
        @endforeach
      @endif
    </div>
    <hr>
  @endforeach
@endsection