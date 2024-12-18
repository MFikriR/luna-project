@extends('layouts.materilayout')
@section('title', 'Bab 1: Offers & Suggestions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <div id="suggestions">
            <h2>B: Building-Blocks</h2>
            <h3>Suggestions</h3>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Penjelasan Umum -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: pink;">
                                Suggest to give a suggestion that is to introduce or propose an idea or a plan for someone’s consideration.
                            </div>
                        </div>

                        <!-- Penjelasan Bentuk Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: yellow;">
                                Suggestions are abstract and can be in form of solutions, advice, plan, and idea. It can be accepted or refused.
                            </div>
                        </div>

                        <!-- Fungsi Sosial -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: aqua;">
                                Social function: to facilitate interpersonal communication between different people.
                            </div>
                        </div>

                        <!-- Contoh Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: orange;">
                                For example:
                                <ul>
                                    <li>Let's finish our homework first.</li>
                                    <li>Let's go home.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2>C: Expressions / Gambits</h2>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Daftar Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color:moccasin;">
                                <ul>
                                    <strong>When making suggestions, we often use the following expressions.</strong>
                                    <li>Let's …</li>
                                    <li>Why don't we …?</li>
                                    <li>We could …</li>
                                    <li>What about …?</li>
                                    <li>How about …?</li>
                                    <li>I suggest that …</li>
                                    <li>You might want to change …</li>
                                    <li>I think …</li>
                                    <li>I don't think …</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contoh Kalimat Lainnya -->
            <h2>D : Example Suggestions</h2>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Daftar Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: lightsalmon;">
                                <ul>
                                    <li>Let's go to the library.</li>
                                    <li>Let's go to movies.</li>
                                    <li>Why don't you do your homework before going out?</li>
                                    <li>We could eat at home today.</li>
                                    <li>What about eating at the new place?</li>
                                    <li>How about going to Sam's place first?</li>
                                    <li>I suggest that we call it a day.</li>
                                    <li>You need to change your sleeping habits.</li>
                                    <li>I think you should go and meet her.</li>
                                    <li>I think we should do it this way.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="example-box">
                <h3>Let's take a look at the sentence structure to suggest something.</h3>
                <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead style="background-color: #d8e8f5;">
                        <tr>
                            <th>Subject</th>
                            <th>Verb</th>
                            <th>That</th>
                            <th>Object</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #f4f8fc;">
                        <tr>
                            <td>I</td>
                            <td>suggest</td>
                            <td>that</td>
                            <td>he clean his room.</td>
                        </tr>
                        <tr>
                            <td>We</td>
                            <td>recommend</td>
                            <td>that</td>
                            <td>she read “The Hunger Games”.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>propose</td>
                            <td>that</td>
                            <td>a report should be sent in.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>put forward</td>
                            <td>that</td>
                            <td>we work together on this.</td>
                        </tr>
                        <tr>
                            <td>We</td>
                            <td>advise</td>
                            <td>that</td>
                            <td>he work hard.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>advocate</td>
                            <td>that</td>
                            <td>we support them in every way possible.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="example-box">
                <h3>Responding to Suggestions</h3>
                <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead style="background-color: #f7931e; color: white;">
                        <tr>
                            <th>Making Suggestions</th>
                            <th>Accepting Suggestions</th>
                            <th>Declining Suggestions</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #d8e8f5;">
                        <tr>
                            <td>Let's go to movies.</td>
                            <td>Yes, let's go.</td>
                            <td>No, thank you. I do not feel like going.</td>
                        </tr>
                        <tr>
                            <td>Why don't you do your homework before going out?</td>
                            <td>Ok, I will.</td>
                            <td>Sorry, I think I will go out first and then do my homework.</td>
                        </tr>
                        <tr>
                            <td>How about going to Sam's place first and then to the supermarket?</td>
                            <td>Yes, let's go. It is a good idea.</td>
                            <td>No, let's just go to the supermarket.</td>
                        </tr>
                        <tr>
                            <td>I think you should go and meet her.</td>
                            <td>Ok, if you say so.</td>
                            <td>Sorry, I can't. I have previous engagement.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Bagian Suggestions -->
        <div id="offers">
            <h2>E: Building-Blocks</h2>
            <h3>Offers</h3>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Penjelasan Umum -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: pink;">
                                Offer means to give something physical or abstract to someone, which can be taken as a gift or a trade.
                            </div>
                        </div>

                        <!-- Penjelasan Bentuk Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: yellow;">
                                Offer can be given in terms of food, money, solutions, friendship or a bargain. It can be taken or refused.
                            </div>
                        </div>

                        <!-- Fungsi Sosial -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: aqua;">
                                Social function: to facilitate interpersonal communication between different people.
                            </div>
                        </div>

                        <!-- Contoh Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: orange;">
                                For example:
                                <ul>
                                    <li>Shall I take you home?</li>
                                    <li>Do you want help with your homework?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h2>F : Expressions / Gambits</h2>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Daftar Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color:moccasin;">
                                <ul>
                                    <strong>When making offers, we often use the following expressions.</strong>
                                    <li>May I …?</li>
                                    <li>Can I …?</li>
                                    <li>Shall I …?</li>
                                    <li>Would you …?</li>
                                    <li>How about I …?</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contoh Kalimat Lainnya -->
            <h2>G : Example of Offers</h2>
            <div class="example-box">
                <div class="chat-wrapper">
                    <div class="chat-container">
                        <!-- Daftar Kalimat Saran -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="background-color: lightsalmon;">
                                <ul>
                                    <li>May I give you a hand?</li>
                                    <li>Can I help you?</li>
                                    <li>Shall I bring you some tea?</li>
                                    <li>Would you like another piece of cake?</li>
                                    <li>How about I help you with this?</li>
                                    <li>Can I clean the car for you?</li>
                                    <li>Shall I help you with your homework?</li>
                                    <li>I will do the washing, if you like.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="example-box">
                <h3>Responding to Offers</h3>
                <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead style="background-color: #f7931e; color: white;">
                        <tr>
                            <th>Making Offers</th>
                            <th>Accepting Offers</th>
                            <th>Declining Offers</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #d8e8f5;">
                        <tr>
                            <td>Can I help you?</td>
                            <td>Yes, please. I really appreciate it.</td>
                            <td>It's okay, I can do it myself.</td>
                        </tr>
                        <tr>
                            <td>Shall I bring you some tea?</td>
                            <td>Thank you, it is very kind of you.</td>
                            <td>No, thank you.</td>
                        </tr>
                        <tr>
                            <td>Would you like another helping of cake?</td>
                            <td>Yes, please. That would be lovely.</td>
                            <td>No, thanks. I don't want another helping.</td>
                        </tr>
                        <tr>
                            <td>How about I help you with this?</td>
                            <td>Yes, please, that would be very kind of you.</td>
                            <td>Don't worry, I will do it myself.</td>
                        </tr>
                        <tr>
                            <td>Can I take you home?</td>
                            <td>Thank you, I appreciate your help.</td>
                            <td>That’s alright, I will manage on my own.</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="example-box">
                <h3>Let's take a look at the sentence structure to offer something.</h3>
                <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead style="background-color: #d8e8f5;">
                        <tr>
                            <th>Modal Verb</th>
                            <th>Subject</th>
                            <th>Object</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #f4f8fc;">
                        <tr>
                            <td>would</td>
                            <td>you</td>
                            <td>care for another cup of tea?</td>
                        </tr>
                        <tr>
                            <td>Shall</td>
                            <td>we</td>
                            <td>take you there?</td>
                        </tr>
                        <tr>
                            <td>Could</td>
                            <td>i</td>
                            <td>offer you something?</td>
                        </tr>
                        <tr>
                            <td>Will</td>
                            <td>you</td>
                            <td>have tea with that?</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            
        </div>

        <!-- Latihan Soal -->
    </div>
</div>

<div class="pagination">
    <a href="{{ route('bab1.page', ['page' => 1]) }}" class="btn btn-back">Back</a>
    <a href="{{ route('bab1.page', ['page' => 1]) }}" class="btn">1</a>
    <a href="{{ route('bab1.page', ['page' => 2]) }}" class="btn active">2</a>
    <a href="{{ route('bab1.page', ['page' => 3]) }}" class="btn">3</a>
    <a href="{{ route('bab1.page', ['page' => 3]) }}" class="btn btn-back">Next</a>
</div>

@endsection