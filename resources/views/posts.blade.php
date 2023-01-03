@extends('layouts.main')
@section('container')
    <h1>Tes Git</h1>
    @foreach ($posts as $post)
        {{-- <h1>this is post{{ $post->title }}</h1> --}}
        <article class="mb-5">
            <h2><a href="/posts/{{ $post['slug'] }}">{{ $post['title'] }}</a></h2>
            <h5>By: {{ $post['penulis'] }}</h5>
            <p>{{ $post['body'] }}</p>
        </article>
    @endforeach
@endsection
