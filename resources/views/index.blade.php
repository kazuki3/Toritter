@extends('layouts.app')

@section('content')
    <div class="main-content">
        @foreach ($posts as $post)
            <div class="post-main__message">
                <div class="post-main__message--name">{{ $post->user->name }}</div>
                <div class="post-main__message--date">{{ $post->created_at->format('Y.m.d') }}</div>
                <div class="post-main__message--body">
                    {{  $post->comment}}
                </div>
            </div>
        @endforeach

    </div>
    <footer>
        <small>©️KazukiOkayama</small>
    </footer>
@endsection