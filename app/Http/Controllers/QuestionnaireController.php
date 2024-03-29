<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{

    public function store(Request $request)
    {
        $physicsQuestions = Question::where('type', 'physics')->inRandomOrder()->limit(5)->get();

        // Get 5 random chemistry questions
        $chemistryQuestions = Question::where('type', 'chemistry')->inRandomOrder()->limit(5)->get();

        $questionnaire = Questionnaire::create([
            'title'=> $request->title,
            'expired_at'=> $request->expired_at
        ]);

        // Attach physics questions to the questionnaire
        $questionnaire->questions()->attach($physicsQuestions);

        // Attach chemistry questions to the questionnaire
        $questionnaire->questions()->attach($chemistryQuestions);

        return view('questionnaire.index', compact('questionnaire'));
    }
}
