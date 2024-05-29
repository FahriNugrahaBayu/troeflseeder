<?php

namespace Database\Seeders;

use App\Models\Answer;
use Illuminate\Database\Seeder;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Answer::create([
            'question_id' => 1,
            'answer' => 'Roams',
            'is_correct' => 1,
        ]);

        Answer::create([
            'question_id' => 1,
            'answer' => 'Roam',
            'is_correct' => 0,
        ]);

        Answer::create([
            'question_id' => 1,
            'option_text' => 'Have roamed',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 1,
            'option_text' => 'Were roamed',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 2,
            'option_text' => 'Found',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 2,
            'option_text' => 'Finds',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 2,
            'option_text' => 'Finding',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 2,
            'option_text' => 'Find',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 3,
            'option_text' => 'Lives',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 3,
            'option_text' => 'Live',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 3,
            'option_text' => 'Life',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 3,
            'option_text' => 'Had lived',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 4,
            'option_text' => 'Notably',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 4,
            'option_text' => 'Notable',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 4,
            'option_text' => 'Noted',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 4,
            'option_text' => 'Note',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 5,
            'option_text' => 'Skillfull teamworking',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 5,
            'option_text' => 'Skillfully teamworking',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 5,
            'option_text' => 'Skills teamworking',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 5,
            'option_text' => 'Skilled teamworking',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 6,
            'option_text' => 'Dictated',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 6,
            'option_text' => 'Dictation',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 6,
            'option_text' => 'Dictate',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 6,
            'option_text' => 'Dictating',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 7,
            'option_text' => 'Entering',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 7,
            'option_text' => 'Enter',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 7,
            'option_text' => 'Entered',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 7,
            'option_text' => 'Enters',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 8,
            'option_text' => 'Weigh',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 8,
            'option_text' => 'Weight',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 8,
            'option_text' => 'Weighing',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 8,
            'option_text' => 'Weighs',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 9,
            'option_text' => 'Considerably longer',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 9,
            'option_text' => 'Consider longer',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 9,
            'option_text' => 'Considering longer',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 9,
            'option_text' => 'Considerable longer',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 10,
            'option_text' => 'Because of',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 10,
            'option_text' => 'Because',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 10,
            'option_text' => 'Although',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 10,
            'option_text' => 'Moreover',
            'point' => 0,
        ]);
        Option::create([
            'question_id' => 11,
            'option_text' => 'Occupied',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 11,
            'option_text' => 'Occupies',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 11,
            'option_text' => 'Occupy',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 11,
            'option_text' => 'Occupying',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Considerable',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Consider',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Consideration',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Considerably',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Considerably',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 12,
            'option_text' => 'Considerably',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 13,
            'option_text' => 'Confined',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 13,
            'option_text' => 'Confining',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 13,
            'option_text' => 'Confine',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 13,
            'option_text' => 'Confines',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 14,
            'option_text' => 'Varied',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 14,
            'option_text' => 'Vary',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 14,
            'option_text' => 'Variation',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 14,
            'option_text' => 'Fair',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 15,
            'option_text' => 'Increased',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 15,
            'option_text' => 'Increasing',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 15,
            'option_text' => 'Increase',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 15,
            'option_text' => 'Increases',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 16,
            'option_text' => 'Give Birth',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 16,
            'option_text' => 'Gave birth',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 16,
            'option_text' => 'Gives birth',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 16,
            'option_text' => 'Giving birth',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 17,
            'option_text' => 'Coldest',
            'point' => 1,
        ]);
        
        Option::create([
            'question_id' => 17,
            'option_text' => 'Most Coldest',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 17,
            'option_text' => 'Cold',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 17,
            'option_text' => 'Colded',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 18,
            'option_text' => 'changing',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 18,
            'option_text' => 'Change',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 18,
            'option_text' => 'Changed',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 18,
            'option_text' => 'Changes',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 19,
            'option_text' => 'Fundamentally',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 19,
            'option_text' => 'Fund',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 19,
            'option_text' => 'Funded',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 19,
            'option_text' => 'Fundamental',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 20,
            'option_text' => 'Classified',
            'point' => 1,
        ]);

        Option::create([
            'question_id' => 20,
            'option_text' => 'Classify',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 20,
            'option_text' => 'Classifies',
            'point' => 0,
        ]);

        Option::create([
            'question_id' => 20,
            'option_text' => 'Classifying',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 21,
            'option_text' => 'Influence',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 21,
            'option_text' => 'Influenced',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 21,
            'option_text' => 'Influences',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 21,
            'option_text' => 'Influencer',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 22,
            'option_text' => 'Appearance',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 22,
            'option_text' => 'Appear',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 22,
            'option_text' => 'Appearing',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 22,
            'option_text' => 'Appeared',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 23,
            'option_text' => 'Crossed',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 23,
            'option_text' => 'Cross',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 23,
            'option_text' => 'Crossing',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 23,
            'option_text' => 'Crosses',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 24,
            'option_text' => 'Is',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 24,
            'option_text' => 'Are',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 24,
            'option_text' => 'Was',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 24,
            'option_text' => 'Were',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 25,
            'option_text' => 'Proposed',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 25,
            'option_text' => 'Proposing',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 25,
            'option_text' => 'Proposes',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 25,
            'option_text' => 'Proposes',
            'is_correct' => 0,
        ]);
        
        Option::create([
            'question_id' => 26,
            'option_text' => 'Is',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 26,
            'option_text' => 'Are',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 26,
            'option_text' => 'Was',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 26,
            'option_text' => 'Were',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 27,
            'option_text' => 'Because of',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 27,
            'option_text' => 'Because',
            'is_correct' => 0,
        ]);
        
        Option::create([
            'question_id' => 27,
            'option_text' => 'Although',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 27,
            'option_text' => 'Moreover',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 28,
            'option_text' => 'Recent global economic crisis',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 28,
            'option_text' => 'Recently global economic crisis',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 28,
            'option_text' => 'Recently globally economic crisis',
            'is_correct' => 0,
        ]);
        
        Option::create([
            'question_id' => 28,
            'option_text' => 'Recently global economic crisis',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 29,
            'option_text' => 'A golden key',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 29,
            'option_text' => 'A golden lock',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 29,
            'option_text' => 'A silver lock',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 29,
            'option_text' => 'A silver key',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 30,
            'option_text' => 'Had a picnic by the lake',
            'is_correct' => 1,
        ]);

        Option::create([
            'question_id' => 30,
            'option_text' => 'Went swimming',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 30,
            'option_text' => 'Watched a movie',
            'is_correct' => 0,
        ]);

        Option::create([
            'question_id' => 30,
            'option_text' => 'Went sleeping',
            'is_correct' => 0,
        ]);
    }
}
