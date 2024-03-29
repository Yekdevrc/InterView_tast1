<?php

namespace App\Http\Controllers;

use App\Models\Questionnaire;
use App\Http\Controllers\Controller;
use App\Models\Question;
use Illuminate\Http\Request;

class QuestionnaireController extends Controller
{

    public function index()
    {
        $questionnaires=Questionnaire::where('expired_at', '>=', now())->get();

        return view('dashboard', compact('questionnaires'));
    }

    public function create()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {

        $questionnaire = Questionnaire::create([
            'title'=> $request->title,
            'expired_at'=> $request->expired_at
        ]);


        return redirect(route('questionnaire.show', $questionnaire->id));
    }

    public function show($id)
    {
        $questionnaire=Questionnaire::findOrFail($id);
        $physicsQuestions = Question::where('type', 'physics')->inRandomOrder()->limit(5)->get();

        // Get 5 random chemistry questions
        $chemistryQuestions = Question::where('type', 'chemistry')->inRandomOrder()->limit(5)->get();
        
        // Attach physics questions to the questionnaire
        $questionnaire->questions()->attach($physicsQuestions);

        // Attach chemistry questions to the questionnaire
        $questionnaire->questions()->attach($chemistryQuestions);
        return view('welcome', compact('questionnaire'));
    }
}
