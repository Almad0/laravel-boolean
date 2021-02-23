@extends('layout.app')

@section('headTitle')
  Blog
@endsection

@section('main')
  <h1>BLOG</h1>
  <p>Non so contento de fa sta sfilata</p>
  @foreach ($posts as $value)
    <h2>{{$value->title}}</h2>
    <p>{{$value->body}}</p>
  @endforeach
@endsection

<style media="screen">
  *{
    background-color: blue;
  }
</style>
