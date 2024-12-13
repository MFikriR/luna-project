<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    public function run()
    {
        DB::table('questions')->insert([
            [
                'question' => 'What does "suggest" mean in this context?',
                'option_1' => 'To give something as a gift.',
                'option_2' => 'To propose an idea or plan for someone\'s consideration.',
                'option_3' => 'To refuse an offer.',
                'option_4' => 'To facilitate a trade.',
                'correct_answer' => 'B',
                
            ],
            [
                'question' => 'Which of the following expressions is commonly used to make a suggestion?',
                'option_1' => 'May I give you a hand?',
                'option_2' => 'I think you should go and meet her.',
                'option_3' => 'Would you like some tea?',
                'option_4' => 'Shall I clean the car for you?',
                'correct_answer' => 'B',
                
            ],
            [
                'question' => 'Which sentence represents a suggestion?',
                'option_1' => 'Let’s go to the library.',
                'option_2' => 'Would you like another piece of cake?',
                'option_3' => 'Can I help you with your homework?',
                'option_4' => 'Shall I bring you some coffee?',
                'correct_answer' => 'A',
                
            ],
            [
                'question' => 'What is the appropriate response to the suggestion: "How about going to the park?"',
                'option_1' => 'Yes, let’s go.',
                'option_2' => 'Thank you, it’s very kind of you.',
                'option_3' => 'No, I don’t want another helping.',
                'option_4' => 'I really appreciate it.',
                'correct_answer' => 'A',
                
            ],
            [
                'question' => 'What does "offer" mean in the context of this lesson?',
                'option_1' => 'To propose an abstract plan.',
                'option_2' => 'To suggest an idea.',
                'option_3' => 'To give something physical or abstract to someone.',
                'option_4' => 'To refuse help or advice.',
                'correct_answer' => 'C',
                
            ],
            [
                'question' => 'Which of the following is an example of making an offer?',
                'option_1' => 'Why don’t we finish the project together?',
                'option_2' => 'Can I take you home?',
                'option_3' => 'Let’s work on this assignment.',
                'option_4' => 'What about going to the movies?',
                'correct_answer' => 'B',
                
            ],
            [
                'question' => 'Choose the correct response to the offer: "Shall I bring you some tea?"',
                'option_1' => 'Yes, that’s a great idea.',
                'option_2' => 'No, thank you.',
                'option_3' => 'Let’s go to the library.',
                'option_4' => 'How about some coffee instead?',
                'correct_answer' => 'B',
                
            ],
            [
                'question' => 'Which of the following is NOT a way to make a suggestion?',
                'option_1' => 'Let’s try this method.',
                'option_2' => 'How about going to the new restaurant?',
                'option_3' => 'Would you like another piece of cake?',
                'option_4' => 'Why don’t we review the material together?',
                'correct_answer' => 'C',
                
            ],
            [
                'question' => 'What is the correct response to: "Can I help you with your homework?"',
                'option_1' => 'Thank you, that would be lovely.',
                'option_2' => 'No, let’s go to the park.',
                'option_3' => 'How about working together?',
                'option_4' => 'I think we should finish it later.',
                'correct_answer' => 'A',
                
            ],
            [
                'question' => 'Which of the following is a response to decline an offer politely?',
                'option_1' => 'No, thank you, I can manage on my own.',
                'option_2' => 'Yes, let’s go.',
                'option_3' => 'I suggest that we do it now.',
                'option_4' => 'Why don’t we try a different approach?',
                'correct_answer' => 'A',
                
            ],
            [
                'question' => 'What is an opinion?',
                'option_1' => 'A fact that is proven to be true.',
                'option_2' => 'A way you feel or think about something.',
                'option_3' => 'A general statement about society.',
                'option_4' => 'A conclusion based on evidence.',
                'answer' => 'B'
            ],
            [
                'question' => 'Which sentence shows an agreement with an opinion?',
                'option_1' => '"I think you are wrong."',
                'option_2' => '"I couldn\'t agree more."',
                'option_3' => '"I disagree with you."',
                'option_4' => '"That\'s not the same thing at all."',
                'answer' => 'B'
            ],
            [
                'question' => 'What expression is used to show a general point of view?',
                'option_1' => '"I am afraid I have to disagree with you."',
                'option_2' => '"It is sometimes argued..."',
                'option_3' => '"I believe this is the right way."',
                'option_4' => '"I reckon that\'s a good idea."',
                'answer' => 'B'
            ],
            [
                'question' => 'Which of the following expresses disagreement?',
                'option_1' => '"Of course, I agree."',
                'option_2' => '"I am sorry, I don\'t agree with you."',
                'option_3' => '"That\'s a good point."',
                'option_4' => '"I think so too."',
                'answer' => 'B'
            ],
            [
                'question' => 'Which statement shows reasoning behind an opinion?',
                'option_1' => '"I agree with what you are saying."',
                'option_2' => '"To be honest, I never thought that bullying was so prevalent in schools."',
                'option_3' => '"I reckon he might have been bullied in school."',
                'option_4' => '"I believe bullying is totally an unacceptable practice in our school."',
                'answer' => 'B'
            ],
            [
                'question' => 'What is the correct response to: "Bullying is a serious issue in schools"?',
                'option_1' => '"I am not convinced that this is true."',
                'option_2' => '"I couldn\'t agree more with you."',
                'option_3' => '"That\'s not the same thing at all."',
                'option_4' => '"It is considered unimportant by many people."',
                'answer' => 'B'
            ],
            [
                'question' => 'Which of these is NOT a way to express disagreement?',
                'option_1' => '"I think you are wrong."',
                'option_2' => '"I disagree with you."',
                'option_3' => '"I couldn\'t agree more."',
                'option_4' => '"I don\'t agree with you."',
                'answer' => 'C'
            ],
            [
                'question' => 'Which phrase best shows agreement with an opinion?',
                'option_1' => '"I do not believe that."',
                'option_2' => '"I agree, I never thought of that."',
                'option_3' => '"I am afraid I have to disagree."',
                'option_4' => '"I think you are mistaken."',
                'answer' => 'B'
            ],
            [
                'question' => 'How can we express a general point of view?',
                'option_1' => '"I totally agree with your statement."',
                'option_2' => '"It is considered an important issue by many people."',
                'option_3' => '"I don\'t think this is true."',
                'option_4' => '"I believe this is the right way."',
                'answer' => 'B'
            ],
            [
                'question' => 'Which statement shows both agreement and a new perspective?',
                'option_1' => '"I agree with what you are saying but have you ever considered...?"',
                'option_2' => '"I am sorry, I don\'t agree with you."',
                'option_3' => '"That\'s not the same thing at all."',
                'option_4' => '"I think you are mistaken."',
                'answer' => 'A'
            ],
            [
                'question' => 'What is a formal invitation?',
                'option_1' => 'An informal invitation with casual wording.',
                'option_2' => 'An invitation following established norms, customs, or values.',
                'option_3' => 'An invitation sent through text messages.',
                'option_4' => "An invitation that doesn't require a response.",
                'answer' => 'B',
            ],
            [
                'question' => 'What is included in the common format of a formal invitation?',
                'option_1' => 'A list of attendees.',
                'option_2' => 'A detailed biography of the host.',
                'option_3' => 'The time, date, and place of the occasion.',
                'option_4' => 'Informal language and jokes.',
                'answer' => 'C',
            ],
            [
                'question' => 'What is the purpose of a formal invitation?',
                'option_1' => 'To request someone\'s attendance at a casual meeting.',
                'option_2' => 'To inform someone about an upcoming informal event.',
                'option_3' => 'To invite people to formal and social events.',
                'option_4' => 'To share general information about an event.',
                'answer' => 'C',
            ],
            [
                'question' => 'Which of the following is an example of a formal invitation?',
                'option_1' => '"Come to my house this Friday!"',
                'option_2' => '"Let\'s meet at the park tomorrow morning."',
                'option_3' => '"Mr. and Mrs. Pujiyanto request your presence at their daughter\'s wedding."',
                'option_4' => '"We\'re having a BBQ at my place—drop by if you can!"',
                'answer' => 'C',
            ],
            [
                'question' => 'What does the abbreviation "R.S.V.P" stand for?',
                'option_a' => 'Reply Soon Via Post.',
                'option_2' => 'Respond to Save the Venue.',
                'option_3' => 'Repondez s\'il vous plaît (Please reply).',
                'option_4' => 'Receive and Send Verified Post.',
                'answer' => 'C',
            ],
            [
                'question' => 'Which of the following is a linguistic characteristic of a formal invitation?',
                'option_1' => 'Informal and humorous tone.',
                'option_2' => 'Simple, precise, and concise words.',
                'option_3' => 'Use of emojis and abbreviations.',
                'option_4' => 'Lack of detailed information.',
                'answer' => 'B',
            ],
            [
                'question' => 'What is the proper way to respond to a formal invitation?',
                'option_1' => 'By sending a text message.',
                'option_2' => 'By writing a reply in third person within 3 days.',
                'option_3' => 'By making a phone call immediately.',
                'option_4' => 'By posting your response on social media.',
                'answer' => 'B',
            ],
            [
                'question' => 'What should be included in the body of a formal invitation?',
                'option_1' => 'The hobbies of the host.',
                'option_2' => 'A list of items to bring to the event.',
                'option_3' => 'Reasons for the invitation, date, time, and place.',
                'option_4' => 'A personal note from the host to the invitee.',
                'answer' => 'C',
            ],
            [
                'question' => 'How should declining a formal invitation be done?',
                'option_1' => 'By giving a detailed explanation of why you can\'t attend.',
                'option_2' => 'By briefly stating the reason for declining in a formal tone.',
                'option_3' => 'By ignoring the invitation.',
                'option_4' => 'By responding casually through text.',
                'answer' => 'B',
            ],
            [
                'question' => 'What is an example of declining a formal invitation?',
                'option_1' => '"I’m sorry, I can’t come. Maybe next time!"',
                'option_2' => '"I will try my best to attend."',
                'option_3' => '"Mr. and Mrs. Situmorang regret that they are unable to accept the kind invitation of Mr. and Mrs. Pujiyanto due to prior engagement."',
                'option_4' => '"I’ll let you know later."',
                'answer' => 'C',
            ],
        ]);
    }
}
