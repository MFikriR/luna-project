@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Forum</h1>
    <div class="topics">
        @foreach ($topics as $topic)
            <div class="topic">
                <h2><a href="{{ route('forum.show', $topic->id) }}">{{ $topic->title }}</a></h2>
                <p>{{ $topic->description }}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection
