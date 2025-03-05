{{-- ini fitur php untuk check seperti console
@dd($posts) --}}


@extends('layouts.main')

@section('container')

{{-- ini contoh untuk looping di laravel --}}
@foreach ($posts as $post)
<article>
<h2>
    <a href="/posts/{{ $post['slug'] }}">
        {{ $post["title"] }}
    </a>
</h2>
  <h5>By : {{ $post["author"] }}</h5>
  <p>{{ $post["body"] }}</p>
</article>
 
@endforeach
@endsection