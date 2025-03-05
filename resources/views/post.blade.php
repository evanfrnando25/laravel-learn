@extends('layouts.main')

@section('container')

<article>
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->excerpt }}</p>
</article>


<a href="/posts">Back To posts</a>

@endsection