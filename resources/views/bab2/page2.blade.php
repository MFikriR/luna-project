@extends('layouts.materilayout')
@section('title', 'Bab 2: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <!-- Contoh Kalimat Lainnya -->
            <h2>Expressions</h2>
            <p>Opinions can be expressed in the ways given below.</p>
            <h3>Personal Point of View</h3>
            <p>These expressions are used to show personal points of view.</p>
            <div class="example-box">
                <div class="opinion-container" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; align-items: center; background-color: #eeeafc; padding: 20px;">
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">What I mean is ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">In my opinion ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">In my humble opinion ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I would like to point out that ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">To my mind ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">By this I mean ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I am compelled to say ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I reckon ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">As I see it ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I think ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Personally, I think ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">In my experience ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I strongly believe that ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">As far as I am concerned ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">From my point of view ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">As I understand ...</div>
                    <div class="character" style="flex-basis: 100%; text-align: center; margin-top: 20px;">
                        <img src="{{ asset('img/boy2.png') }}" alt="Character Image" style="max-width: 150px;">
                    </div>
                </div>                
            </div>

            <h3>General Point of View</h3>
            <p>These expressions are used to show a general point of view. A general point of view creates a balance in wring and helps avoid absolute statements.</p>

            <div class="example-box">
                <div class="opinion-container" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; align-items: center; background-color: #eeeafc; padding: 20px;">
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Most people do not agree ....</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Generally it is accepted ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Almost everyone ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">The majority disagree with ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Some people say that ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">The majority agree with ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Some people believe ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">It is sometimes argued  ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Of course, many argue ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">It is considered ...</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">While some people believe  ...</div>
                    <div class="character" style="flex-basis: 100%; text-align: center; margin-top: 20px;">
                        <img src="{{ asset('img/boy3.png') }}" alt="Character Image" style="max-width: 150px;">
                    </div>
                </div>                
            </div>
            
            <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                <thead style="background-color: #f7931e; color: white;">
                    <tr>
                        <th>Agreeing with an Opinion</th>
                    </tr>
                </thead>
            </table>

            <h3>These are some of the expressions used to express agreement with an opinion.</h3>

            <div class="example-box">
                <div class="opinion-container" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center; align-items: center; background-color: #eeeafc; padding: 20px;">
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I agree with what you are saying but have you ever.......</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I couldn't agree more.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I agree with this opinion.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">This is absolutely right.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Of course.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I agree, I never thought of that</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">Neither do I.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">That's a good point.</div>
                    <div class="opinion-bubble" style="border: 2px solid #716eb4; padding: 10px 20px; border-radius: 15px; background-color: white;">I think so too.</div>
                    <div class="character" style="flex-basis: 100%; text-align: center; margin-top: 20px;">
                        <img src="{{ asset('img/girl6.png') }}" alt="Character Image" style="max-width: 150px;">
                    </div>
                </div>                
            </div>    
            
            <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                <thead style="background-color: #f7931e; color: white;">
                    <tr>
                        <th>Disagreeing with an Opinion</th>
                    </tr>
                </thead>
            </table>

            <h3>These are the expressions used to express disagreement with an opinion.</h3>

            <div class="example-box">
                <div class="chat-wrapper">
                    <!-- Gambar Orang Kiri (A) -->
                    <img src="{{ asset('img/boy5.png') }}" alt="Person A" class="person-left" style="width: 200px;">
                
                    <div class="chat-container">
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                I am sorry, I don't agree with you.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                I disagree with you.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                I am not sure I agree with you.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                I think you are wrong.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                I don't agree with you.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                That's not the same thing at all.

                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                I am afraid I have to disagree with you.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                It is not justified to say so.
                            </div>
                        </div>

                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                I do not believe that.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                I am not convinced that ....

                            </div>
                        </div>

                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(233, 163, 12); background-color:white;">
                                By this I mean........
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid red; background-color:white;">
                                I can't say I agree with this, and here's why...
                            </div>
                        </div>
                    </div>            
                    <!-- Gambar Orang Kanan (B) -->
                    <img src="{{ asset('img/girl8.png') }}" alt="Person B" class="person-right" style="width: 200px;">
                </div>
            </div>

            <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                <thead style="background-color: #f7931e; color: white;">
                    <tr>
                        <th>Examples of Opinions :</th>
                    </tr>
                </thead>
            </table>

            <div class="discussion-questions mt-4" style="background-color:white;">
                <ol>
                    <ul>- I reckon he might have been bullied in school.</ul>
                    <ul>- To be honest, I never thought that bullying was so prevalent in most schools.</ul>
                    <ul>- I believe bullying is totally an unacceptable practice in our school.</ul>
                    <ul>- I am not convinced that the majority of the people are not aware of this issue.</ul>
                </ol>
            </div>

            <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                <thead style="background-color: #f7931e; color: white;">
                    <tr>
                        <th>Examples of how to agree and disagree with an opinion :</th>
                    </tr>
                </thead>
            </table>

            <p></p>

            <table>
                <tr style="background-color: #716eb4">
                    <th>Statement</th>
                    <th>Agree</th>
                    <th>Disagree</th>
                </tr>
                <tr>
                    <td>Smoking should be banned in public places.</td>
                    <td>I totally agree that smoking should be banned in public places.</td>
                    <td>I am sorry but I tend to disagree with you on this.</td>
                </tr>
                <tr>
                    <td>Bullying is so prevalent in most schools.</td>
                    <td>I couldn't agree more with you.</td>
                    <td>I think it would be wrong to generalize.</td>
                </tr>
                <tr>
                    <td>Women should not work.</td>
                    <td>I think so too. Women should stay at home and take care of their children.</td>
                    <td>I am afraid I have to disagree with you on this.</td>
                </tr>
                <tr>
                    <td>Harry Potter series is much better than Twilight series.</td>
                    <td>Yes, I agree. Harry Potter series has a much better and well-developed storyline.</td>
                    <td>It’s not justified to say because both have different plots.</td>
                </tr>
                <tr>
                    <td>Online gaming should be banned.</td>
                    <td>Absolutely right. It should be as it distracts students from studying.</td>
                    <td>I don't agree with you. It is a venue for students to develop their skills.</td>
                </tr>
            </table>
        </div>
            <!-- Latihan Soal -->
    </div>

    <iframe src="https://scratch.mit.edu/projects/1089955768/embed" allowtransparency="true" width="485" height="402" frameborder="0" scrolling="no" allowfullscreen></iframe>
</div>

<div class="pagination">
    <a href="{{ route('bab2.page', ['page' => 1]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab2.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab2.page', ['page' => 2]) }}" class="btn active">2</a>
    <a href="{{ route('bab2.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab2.page', ['page' => 3]) }}" class="btn btn-back">Next</a>
</div>

@endsection