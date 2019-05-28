@extends('layouts.app')
@section('content')
    <h1>{{$title}}</h1>
    <p>This is service page</p>
    <p>{{$des}}</p>

    @if(count($services))
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection