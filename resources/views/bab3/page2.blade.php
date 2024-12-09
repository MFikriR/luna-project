@extends('layouts.materilayout')
@section('title', 'Bab 3: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h2 style="background-color: #f7931e">Example of a Formal Invitation</h2>
        <div class="example-box">
            <div style="text-align:center">
                <img src="{{ asset('img/undangan.png') }}" alt="Deskripsi gambar" class="rounded-img">
            </div>

            <div style="text-align:center">
                <img src="{{ asset('img/did.png') }}" alt="Deskripsi gambar" class="rounded-img">
            </div>
        </div>
        
        <h2 style="background-color: #f7931e">Invitation to a wedding</h2>
        <div class="example-box">
            <div style="text-align:center">
                <img src="{{ asset('img/undangan2.png') }}" alt="Deskripsi gambar" class="rounded-img">
            </div>
        </div>

    </div>
</div>

<div class="pagination">
    <a href="{{ route('bab3.page', ['page' => 1]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab3.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab3.page', ['page' => 2]) }}" class="btn active">2</a>
    <a href="{{ route('bab3.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab3.page', ['page' => 3]) }}" class="btn btn-back">Next</a>
</div>

@endsection