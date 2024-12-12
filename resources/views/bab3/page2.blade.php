@extends('layouts.materilayout')
@section('title', 'Bab 3: Party Time')
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

        <div class="example-box" style="border-left: 5px solid #007bff" style="background-color: green">
            <div class="formal-invitation">
                <h4>Responding to formal invitations</h4>

                <p>Formal invitations should be responded to within 3 days.</p>
                <p>Replies are written in third person.</p>
                <p>Replies have to be handwritten.</p>
                <p>Reason should be briefly stated for declining the invitation.</p>
            </div>

            <h4>Example :</h4>
            1. Acceptance
            <ul>
                <li>Mr. and Mrs. Eri Utomo accept with pleasure the kind invitation of Mr. 
                    and Mrs. Pujiyanto to the wedding ceremony of their daughter on 
                    Friday, the twelfth of December at seven o' clock</li>
                <li>Mr. and Mrs. Wibowo accept the invitation with pleasure.</li>
            </ul>

            2. Declining/Regretting
            <ul>
                <li>Mr. and Mrs. Situmorang regret that they are unable to accept the kind 
                    invitaƟon of Mr. and Mrs. Pujiyanto for Friday, the twelfth of December 
                    at seven o' clock due to prior engagement.</li>
                <li>Mr. And Mrs. Wibowo regret to decline the invitation due to health 
                    reasons.</li>
            </ul>

            3. Responding card
            <ul>
                <li>The responding card comes with the invitaƟon card. This card should 
                    preferably be handwritten.</li>
            </ul>

            <div style="text-align:center">
                <img src="{{ asset('img/und2.png') }}" alt="Deskripsi gambar" class="rounded-img">
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