@extends('layouts.app')

@section('content')
<div class="container">
        <p>Dashboard</p>


            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <a class="btn btn-primary" href="/posts/create">Create Post</a>
            <h3>Your Blog Posts</h3>
            @if(count($posts) > 0)
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <th>{{$post->title}}</th>
                            <th><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a></th>
                            <th>
                                {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right' ])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </th>
                        </tr>
                    @endforeach
                </table>
            @else
                <p>you have no posts</p>
            @endif
</div>
@endsection
