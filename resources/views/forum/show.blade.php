@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $topic->title }}</h1>
    <p>{{ $topic->description }}</p>

    <h3>Posts</h3>
    <div class="posts">
        @foreach ($posts as $post)
            <div class="post">
                <p><strong>{{ $post->user->name }}</strong>: {{ $post->content }}</p>
            </div>
        @endforeach
    </div>

    <!-- Form untuk menambahkan posting baru -->
    @auth
    <form action="{{ route('forum.store', $topic->id) }}" method="POST">
        @csrf
        <div>
            <textarea name="content" rows="4" placeholder="Write your reply..."></textarea>
        </div>
        <button type="submit">Post Reply</button>
    </form>
    @else
        <p>Please <a href="{{ route('login') }}">login</a> to post a reply.</p>
    @endauth
</div>
@endsection
