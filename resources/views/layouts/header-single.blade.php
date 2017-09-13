<!-- Page Header -->
<header class="masthead" style="background-image: url({{ asset('img/post-bg.jpg') }})">

  <div class="container">

    <div class="row">

      <div class="col-lg-8 col-md-10 mx-auto">

        <div class="post-heading">

          <h1>{{$post->title}}</h1>

          <span class="meta">Posted by

            <a href="#">{{$post->user->name}}</a> on {{$post->created_at->toFormattedDateString()}} </span>

        </div>

      </div>

    </div>

  </div>
  
</header>