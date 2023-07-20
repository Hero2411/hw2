<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo_comments;

class InteractionController extends Controller
{
    public function comment(Request $request){
        $income = $request->validate(['comment'=> 'required']);

        $income['comment'] = strip_tags($income['comment']);
        $income['user_id'] = auth()->id();
        photo_comments::create($income);
        return redirect('/');

    }
}
