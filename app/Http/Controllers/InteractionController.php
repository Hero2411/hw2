<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\photo_comments;
use App\Models\photo_favorites;
use Illuminate\Support\Facades\DB;

class InteractionController extends Controller
{
    public function comment(Request $request){
        $income = $request->validate(['comment_text'=> 'required', "photo_id"=> "required"]);
        $income['comment_text'] = strip_tags($income['comment_text']);
        $income['user_id'] = auth()->user()->id;
        $income['comment_date'] = now();
        try {
            photo_comments::create($income);
        } catch (\Illuminate\Database\QueryException $exception) {
            return  $exception;
        }
        return "DONE";
    }

    public function like(Request $request){
        $income = $request->validate(["photo_id"=> "required"]);
        $income['user_id'] = auth()->user()->id;
        try {
            photo_favorites::create($income);
        } catch (\Illuminate\Database\QueryException $exception) {
            return  $exception;
        }
        return "DONE";
    }

    public function get_comments(Request $request){
        $income = $request->validate(["photo_id"=> "required"]);
        try {
            return DB::select("SELECT u.name as username, comment_text, comment_date from users u, photo_comments pc WHERE u.id = pc.user_id AND pc.photo_id = {$income['photo_id']}");
        } catch (\Illuminate\Database\QueryException $exception) {
            return  "ERROR";
        }
    }

}
