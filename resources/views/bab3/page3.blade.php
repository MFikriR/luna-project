@extends('layouts.materilayout')
@section('title', 'Bab 3: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        
    </div>
</div>

<div class="pagination">
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab1.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab1.page', ['page' => 3]) }}" class="btn active">3</a></div>

@endsection