@extends('layouts.materilayout')
@section('title', 'Bab 3: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <h1 id="intro">Bab 3: Party Time</h1>
        <p>Menerapkan fungsi sosial, struktur teks, dan unsur kebahasaan teks interaksi dalam bahasa Inggris.</p>

        <h2>A: Pre-Activity</h2>
        <h3>Read an excerpt of the play given below.</h3>

        <div class="example-box">
            <div class="play-dialogue">
                <p><strong>MONSIEUR LOISEL:</strong> Sweetheart, I have a surprise for you.</p>
                <p><strong>MADAME LOISEL:</strong> Really, what is the surprise?</p>
                <p><strong>MONSIEUR LOISEL:</strong> See for yourself.</p>
                <p><em>(He places the invitation on the table.)</em></p>
                <p><em>Swiftly, she tears open the envelope and draws out a printed card and reads out</em></p>
                <blockquote>
                    "The Minister and Madame Ramponneau request the pleasure of the company of<br>
                    Monsieur and Madame Loisel at the Ministry on the evening of Monday, January the eighteenth."
                </blockquote>
                <p><strong>MONSIEUR LOISEL:</strong> Isn't it wonderful?</p>
                <p><strong>MADAME LOISEL:</strong> What do you mean? What can I do with it?</p>
                <p><em>(She tosses the invitation on the table.)</em></p>
            </div>
        </div>

                <h2>B: Building-Blocks</h2>
                <div class="example-box">
                    <div class="building-blocks">
                        <div class="types-of-invitations">
                            <h3>Types of Invitations</h3>
                            <span class="badge">Informal</span>
                            <span class="badge">Formal</span>
                        </div>
                        
                        <div class="formal-invitation">
                            <h4>Formal Invitation</h4>
                            <p>
                                A formal invitation is an invitation which follows a dignified form, tone, or style in agreement with the
                                established norms, customs, or values (Websters, 2012).
                            </p>
                            <p>For example:</p>
                            <ul>
                                <li>An invitation to the opening of a school</li>
                                <li>An invitation to a graduation ceremony</li>
                                <li>An invitation to a wedding, etc.</li>
                            </ul>
                        </div>
                        
                        <div class="common-format">
                            <h4>Common Format of a Formal Invitation</h4>
                            <ul>
                                <li>The first line is the name(s) of the person(s) who invite(s).</li>
                                <li>The second line is the request for participation.</li>
                                <li>The third line is the names of the person(s) invited.</li>
                                <li>The fourth line is the occasion for invitation.</li>
                                <li>The fifth line is the time and date of the occasion.</li>
                                <li>The sixth line is the place of the occasion.</li>
                                <li>The last line is the request for reply.</li>
                            </ul>
                        </div>

                        <div class="common-format">
                            <h4>Social Function :</h4>
                            <ul>
                                <li>Inviting people to formal and social events</li>
                            </ul>
                        </div>

                        <div class="common-format">
                            <h4>Linguistic Chatacteristics :</h4>
                            <ul>
                                <p>Simple, precise, and concise words</p>
                                <p>Detailed information</p>
                                <li>The tone should be friendly and sincere.</li>
                                <li>Words should be chosen carefully. The style of wring should be formal.</li>
                            </ul>
                        </div>

                        <div class="common-format">
                            <h4>Format of Layout :</h4>
                            <ul>
                                <p>Addresses of the addresser and the addressee</p>
                                <p>Salutation</p>
                                <p>Body</p>
                                <li>- State for whom the invitation is and by who it is given.</li>
                                <li>- Reasons of invitation</li>
                                <li>- Date</li>
                                <li>- Time</li>
                                <li>- Place</li>
                                <li>- R.S.V.P (it is a French word -"repondez s'il vous plait" which means "please reply")</li>
                                <p>Signature</p>
                                <p>The format of the envelope for the invitation is addressed the same way as the envelope of a letter (i.e. with the recipient's address in the middle of the envelope and addresser's address on the left hand corner of the envelope).</p>
                            </ul>
                        </div>

                        <div class="common-format">
                            <h4>Ways of Organizing Information :</h4>
                            <ul>
                                <li>Reasons for inviting others</li>
                                <li>Detailed information about the party or event</li>
                                <li>Ask friends to come by using a sincere tone</li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>



<div class="pagination">
    <a href="{{ route('bab3.page', ['page' => 1]) }}" class="btn active">1</a>
    <a href="{{ route('bab3.page', ['page' => 2]) }}" class="btn">2</a>
    <a href="{{ route('bab3.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab3.page', ['page' => 2]) }}" class="btn btn-back">Next</a>
</div>

@endsection