@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $post->title }}</h1>
                <h2>{{ $post->category->title }}</h2>
                <ul>
                    @foreach ($post->tags as $tag)
                        <li>{{ $tag->title }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

@endsection
