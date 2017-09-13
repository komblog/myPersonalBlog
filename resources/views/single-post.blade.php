@extends('layouts.master')
@section('header-home')
  @include('layouts.header-single')
@section('content')
  <!-- Post Content -->
  <article>   
    {!! $post->content !!}      
  </article>
  </br>
  @if(count($post->tags))
    Tags : 
    @foreach($post->tags as $tag)
      <span class="badge badge-pill badge-warning"><a href="/post/tag/{{ $tag->name }}"> {{ $tag->name }} </a></span>
    @endforeach
  @endif
  <hr>  
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <h3 class="comment-title"> <i class="fa fa-comments" aria-hidden="true"></i> {{$post->comments()->count() }} Comments</h3>
      @foreach($post->comments as $comment)
        <div class="comment">
          <div class="author-info">
            <img src=" {{ "https://www.gravatar.com/avatar/" . md5(strtolower(trim($comment->email))) . "?s=50&d=monsterid" }} " class="author-image">
            <div class="author-name">
              <h4> {{$comment->name}} </h4>
              <p class="author-time"> {{$post->created_at->diffForHumans()}} </p>
            </div>            
          </div>
          <div class="comment-content">
            {!! $comment->comment !!}
          </div>
        </div>
      @endforeach 
    </div>
  </div> 
  <hr>        
  <form method="POST" action="/post/{{$post->id}}/comment">
      {{csrf_field()}}
    @if(Auth::guest())
      <div class="form-inline form-group">
        <div class="form-group">
          <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
        </div>
        <div class="form-group" style="margin-left: 10px;">
          <input type="email" class="form-control" name="email" placeholder="Enter your e-mail" required>
        </div>
      </div>
    @endif
    @if(Auth::check())
      <input type="hidden" class="form-control" name="name" value="{{Auth::user()->name}}" required>
      <input type="hidden" class="form-control" name="email" value="{{Auth::user()->email}}" required>
    @endif
    <div class="form-group">          
      <textarea class="form-control" name="comment" placeholder="Your comment here."></textarea>
    </div>
    <div class="form-group">          
      <button type="submit" class="btn btn-primary">Post</button>
    </div>          
  </form>      
   
@endsection
