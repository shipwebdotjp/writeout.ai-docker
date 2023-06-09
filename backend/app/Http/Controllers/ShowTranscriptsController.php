<?php

namespace App\Http\Controllers;

use App\SendStack;
use App\Models\Transcript;

class ShowTranscriptsController extends Controller
{
    //return all transcripts for user
    public function __invoke(SendStack $sendStack)
    {
        //return user's transcripts
        $transcripts = Transcript::where('user_id', auth()->user()->id)->get();

        return view('transcripts', [
            'transcripts' => $transcripts
        ]);
    }
}