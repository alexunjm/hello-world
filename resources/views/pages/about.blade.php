@extends('layout')

@section('content')

<div class="container">
    <div class="content">

    @if(empty($people))
        There are no people
    @else
        @foreach ($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    @endif

    </div>
</div>

@stop


@section('footer')

<div class="footer">
    <div class="content">

    the footer

    </div>
</div>

@stop