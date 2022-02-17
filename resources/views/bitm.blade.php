@extends('master')
@section('title')
    BITM Page
@endsection

@section('body')
    <h1>{{$a}}</h1>
    <h4>{{$b}}</h4>


{{--       @foreach($c as $key => $value)--}}
{{--          @if( $key >= 3 && $key <=5)--}}
{{--              <span>Index No :{{$key}}</span>&nbsp;<span>And value is:{{$value}}</span><br/>--}}
{{--          @else--}}
{{--              <h1>Out of range....</h1>--}}
{{--          @endif--}}
{{--       @endforeach--}}

    @foreach($c as $key =>$value)
        @foreach($value as $item)
            <span>{{$item}}</span>
            <br/>
        @endforeach
        <br/>
    @endforeach


@endsection

{{--<h1>Hello Bitm</h1>--}}

{{--<a href="{{ url('/') }}">Home</a>--}}
{{--<a href="{{ url('/bitm') }}">BITM</a>--}}
{{--<a href="{{ url('/about') }}">About</a>--}}
{{--<a href="{{ url('/contact') }}">Contact</a>--}}


{{--<a href="{{ route('home') }}">Home</a>--}}
{{--<a href="{{ route('bitm') }}">BITM</a>--}}
{{--<a href="{{ route('about') }}">About</a>--}}
{{--<a href="{{ route('contact') }}">Contact</a>--}}
