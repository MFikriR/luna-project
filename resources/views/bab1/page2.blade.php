@extends('layouts.materilayout')
@section('title', 'Bab 2: Opinions')
@section('content')

<div class="container">
    <div id="scroll-box" class="scroll-box">
        <!-- Bab 2: Self-Description -->
        <h2 style="color: #000">Bab 2: Opinions & Thoughts</h2>
        <p>memberi dan meminta informasi terkait pendapat dan pikiran, sesuai dengan konteks penggunaannya.</p>
        
        <h2>A: Pre-Activity</h2>
        <h3>Conversation 1</h3>
        <p>Dengan pasangan, baca percakapan yang diberikan di bawah ini.</p>

        <div class="example-box">
            <div class="chat-wrapper">
                <!-- Gambar Orang Kiri (A) -->
                <img src="{{ asset('img/girl5.png') }}" alt="Person A" class="person-left">
            
                <div class="chat-container">
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Why are you looking so sad?
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            I was reading an opinion article on bullying. It made me extremely sad.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Ah! People like to exaggerate things, bullying as such is no big deal.
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            No, I don't think so. Bullying is prevalent in our society. It is important that everyone should be made aware of this social evil.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            I don't agree with you. Little bit teasing here and there is acceptable.
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            I am of the opinion that no one has any right to harass or make people feel inferior. No one should have that kind of power.
                        </div>
                    </div>
                
                    <!-- Percakapan Kiri -->
                    <div class="chat-row">
                        <div class="chat-bubble left left-bubble" style="border: 2px solid rgb(21, 53, 100); background-color:white;">
                            Hey! Stop! You are getting too serious!
                        </div>
                    </div>
                
                    <!-- Percakapan Kanan -->
                    <div class="chat-row">
                        <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(241, 133, 133); background-color:white;">
                            Yes! You should be serious about it as well. I would like to point out that bullying is everyone's problem and responsibility. If you condone bullying in any way, shape or form it means you are taking part in it whether it is directly or indirectly by being silent.
                        </div>
                    </div>

                    <div class="discussion-questions mt-4" style="background-color:white;">
                        <h3>Discuss these questions with your partner:</h3>
                        <ol>
                            <li>What is happening between Siti and Jane?</li>
                            <li>What kind of conversation are they having?</li>
                            <li>Whom do you agree with, Jane or Siti? Why?</li>
                            <li>Have you witnessed bullying? Describe how you felt.</li>
                        </ol>
                    </div>
                </div>            
                <!-- Gambar Orang Kanan (B) -->
                <img src="{{ asset('img/girl4.png') }}" alt="Person B" class="person-right" style="width: 200px;">
            </div>
        </div>

        <!-- Bagian Suggestions -->
        <div id="opinions">
            <h2>B: Building-Blocks</h2>
            <h3>Opinions / Pendapat</h3>
            <p>Opini adalah cara Anda merasa atau berpikir tentang sesuatu. Pendapat kita tentang sesuatu atau seseorang didasarkan pada perspektif kita. Setiap kali kita memberi atau mengungkapkan pendapat kita, penting untuk memberikan alasan atau contoh untuk mendukung pendapat kita.</p>
            <h3>Some Opinions :</h3>
            <div class="example-box">
                <div class="chat-wrapper">
                    <!-- Gambar Orang Kiri (A) -->
                    <img src="{{ asset('img/boy4.png') }}" alt="Person A" class="person-left">
                
                    <div class="chat-container">
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I like Harry Potter movies because the magic seems so real.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                I don't agree with you. Harry Potter movies are just overrated.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I like playing tag because it is so much fun.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                I don't like playing tag because people end up fighting.
                            </div>
                        </div>

                        <!-- Percakapan Kanan -->
                        <div class="chat-row">
                            <div class="chat-bubble right right-bubble" style="border: 2px solid rgb(250, 185, 46); background-color:white;">
                                In my opinion, the government should provide means of sustenance for under privileged people instead of building tall towers.
                            </div>
                        </div>
                    
                        <!-- Percakapan Kiri -->
                        <div class="chat-row">
                            <div class="chat-bubble left left-bubble" style="border: 2px solid cyan; background-color:white;">
                                I agree with what you are saying but have you ever thought that building tall towers provides work for unemployed people?
                            </div>
                        </div>
                    </div>            
                    <!-- Gambar Orang Kanan (B) -->
                    <img src="{{ asset('img/girl7.png') }}" alt="Person B" class="person-right" style="width: 200px;">
                </div>
            </div>

            <div class="example-box">
                <h3>Let's take a look at the sentence structure to express opinions.</h3>
                <table border="1" cellspacing="0" cellpadding="8" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead style="background-color: #4c3d84; color: white;">
                        <tr>
                            <th>Subject</th>
                            <th>Verb</th>
                            <th>Object</th>
                        </tr>
                    </thead>
                    <tbody style="background-color: #b2a2df;">
                        <tr>
                            <td>I</td>
                            <td>agree</td>
                            <td>with what you are saying.</td>
                        </tr>
                        <tr>
                            <td>We</td>
                            <td>believe</td>
                            <td>this is not the right way to handle things.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>reckon</td>
                            <td>this could be right considering the reasons you have provided.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>agree</td>
                            <td>that I didn't look at it from this perspective.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>doubt</td>
                            <td>that this is possible.</td>
                        </tr>
                        <tr>
                            <td>We</td>
                            <td>assume</td>
                            <td>you are biased on this issue.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>don't agree</td>
                            <td>with you.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>think</td>
                            <td>you are mistaken.</td>
                        </tr>
                        <tr>
                            <td>I</td>
                            <td>think</td>
                            <td>so too.</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            

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
            <h2>H: Latihan Soal</h2>
            <div class="example-box">
                <h3>Latihan 1: Pilihan Ganda</h3>
                <p>Pilihlah jawaban yang benar untuk melengkapi kalimat di bawah ini.</p>
                <ol>
                    <li>
                        Jane: "In my opinion, social media has a negative impact on teenagers." <br>
                        Siti: "________ I understand why you feel that way, but I think it also has positive effects."
                        <ul>
                            <li><input type="radio" name="question1" value="a"> a. Since</li>
                            <li><input type="radio" name="question1" value="b"> b. Although</li>
                            <li><input type="radio" name="question1" value="c"> c. Even if</li>
                            <li><input type="radio" name="question1" value="d"> d. Because</li>
                        </ul>
                    </li>
                    <li>
                        John: "I believe exams are not the best way to evaluate students." <br>
                        Jane: "________ I think exams can be useful, they should not be the only assessment method."
                        <ul>
                            <li><input type="radio" name="question2" value="a"> a. Although</li>
                            <li><input type="radio" name="question2" value="b"> b. In contrast</li>
                            <li><input type="radio" name="question2" value="c"> c. As for</li>
                            <li><input type="radio" name="question2" value="d"> d. For</li>
                        </ul>
                    </li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 2: Isian Singkat</h3>
                <p>Lengkapilah kalimat berikut ini dengan kata yang tepat:</p>
                <ol>
                    <li>John: "________ I understand it, exams can be stressful but also helpful."</li>
                    <li>Jane: "As far as I am __________, technology has both benefits and drawbacks."</li>
                    <li>Siti: "I __________ believe that everyone has the right to express their opinion."</li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 3: Buat Kalimat</h3>
                <p>Buatlah kalimat opini atau pendapat berdasarkan situasi yang diberikan:</p>
                <ol>
                    <li>Seseorang bertanya tentang pendapat Anda mengenai penggunaan internet di sekolah. <input type="text" id="question6" placeholder="Tuliskan opini Anda"></li>
                    <li>Teman Anda merasa bahwa membaca buku adalah cara terbaik untuk belajar. Bagaimana pendapat Anda? <input type="text" id="question7" placeholder="Tuliskan opini Anda"></li>
                </ol>
            </div>

            <div class="example-box">
                <h3>Latihan 4: Pilih Kalimat yang Mengungkapkan Pendapat</h3>
                <p>Pilih kalimat yang merupakan contoh ungkapan pendapat atau pemikiran:</p>
                <ul>
                    <li><input type="checkbox" name="question8" value="a"> a. I believe that exercise is essential for health.</li>
                    <li><input type="checkbox" name="question8" value="b"> b. I suggest we go to the gym together.</li>
                    <li><input type="checkbox" name="question8" value="c"> c. In my opinion, watching documentaries is informative.</li>
                    <li><input type="checkbox" name="question8" value="d"> d. Could you help me with this assignment?</li>
                </ul>
            </div>

            <button onclick="checkAnswers()">Periksa Jawaban</button>

            <p id="result"></p>

            <script>
                function checkAnswers() {
                    // Jawaban benar
                    let correctAnswers = {
                        question1: "b",
                        question2: "a",
                        question3: "As",
                        question4: "concerned",
                        question5: "strongly",
                        question8: ["a", "c"]
                    };
                    
                    // Pemeriksaan Pilihan Ganda
                    let score = 0;
                    let totalQuestions = 5;
                    
                    let q1 = document.querySelector('input[name="question1"]:checked');
                    let q2 = document.querySelector('input[name="question2"]:checked');
                    
                    if (q1 && q1.value === correctAnswers.question1) score++;
                    if (q2 && q2.value === correctAnswers.question2) score++;
                    
                    // Pemeriksaan Isian Singkat
                    if (document.getElementById("question3").value.trim() === correctAnswers.question3) score++;
                    if (document.getElementById("question4").value.trim() === correctAnswers.question4) score++;
                    if (document.getElementById("question5").value.trim() === correctAnswers.question5) score++;

                    // Pemeriksaan Checkbox
                    let selectedCheckboxes = Array.from(document.querySelectorAll('input[name="question8"]:checked')).map(cb => cb.value);
                    if (JSON.stringify(selectedCheckboxes.sort()) === JSON.stringify(correctAnswers.question8.sort())) score++;

                    // Tampilkan hasil
                    document.getElementById("result").innerText = Skor Anda: ${score} dari ${totalQuestions};
                }
            </script>



            <!-- Navigation buttons (Back & Next) -->
            <div class="d-flex justify-content-between mt-4">
                <a href="{{ route('bab1') }}" class="btn btn-secondary">Kembali ke Bab Sebelumnya</a>
                <a href="{{ route('bab3') }}" class="btn-next">Next: Bab 3 - Daily Activities</a>
            </div>
        </div>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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