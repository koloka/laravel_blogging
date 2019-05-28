@extends('layouts.app');
@section('content')
    <a href="/posts" class="btn btn-default go-back">Go Back</a>
    <h1>{{$post->title}}</h1>
    <span class="btn btn-primary" id="inc-font">+</span>
    <span class="btn btn-primary" id="dec-font">-</span>
    <script>
        var fontsize = 20;
        $('.content-body p').css('font-size', fontsize);
        
        $( function() {
          $('#inc-font').on('click', function(){
            fontsize +=2;
            $('.content-body p').css('font-size', fontsize);
          });

          $('#dec-font').on('click', function(){
            fontsize -=2;
            $('.content-body p').css('font-size', fontsize);
            
          });

        });


      // $('#inc-font').hide();

    </script>

    <img style="width: 100%;" src="/storage/cover_image/{{$post->cover_image}}" alt="">
    <br><br>
    <div class="content-body">
      {!!$post->body!!}
    </div>
    <hr>
    <small >Written On: {{$post->created_at}} By {{$post->user->name}}</small>
    <hr>
    @if(!Auth::guest())
      @if(Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
        {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
          {{Form::hidden('_method', 'DELETE')}}
          {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!!Form::close()!!}
      @endif
    @endif


@endsection