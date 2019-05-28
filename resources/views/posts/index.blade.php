@extends('layouts.app');
@section('content')

  <div class="row" style="padding-top: 20px;">
    <div class="col-md-4">
      <div style=" padding: 0 20px; box-shadow: 5px 5px 10px #aaaaaa;">
        <p>side bar</p>
        <img style="width: 100%; display: block;" src="https://mobirise.com/bootstrap-carousel/assets2/images/thomas-smith-399133-1707x2560.jpg" alt="">
        <img style="width: 100%; display: block;" src="https://mobirise.com/bootstrap-carousel/assets2/images/thomas-smith-399133-1707x2560.jpg" alt="">
      </div>
    </div>
    <div class="col-md-8">
      <div style=" padding: 0 20px; box-shadow: 5px 5px 10px #aaaaaa;">

      
        <h1>Posts</h1>
        {{$posts->links()}}
        @if(count($posts)>0)
          @foreach($posts as $post)
            <div class="well">
              <div class="row">
                <div class="col-md-4 col-sm-4">
                  <img style="width: 100%;" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                </div>
                <div class="col-md-8 col-sm-8">
                  <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                  <p class="demo-para">
                    
                    <?php
                    echo '&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;';
                    if( strlen(strip_tags($post->body)) > 100){
                      $sub = substr((strip_tags($post->body)), 0,99);
                      echo $sub."...";
                    }else{
                      echo (strip_tags($post->body));
                    }
                    ?>
                  </p>
                  <small class="written-by">Written on {{$post->created_at}} By {{$post->user->name}}</small>
                </div>
              </div>
            </div>
          @endforeach
          {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
      </div>
    </div>
  </div>

        

@endsection