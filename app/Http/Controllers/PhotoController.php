<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhotoController extends Controller
{
    public static function showPhotosBySetId($set_id)
    {
        $photos = Photo::where('set_id', $set_id)->get();
        return $photos;
    }



    public function addSet(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'cover_filename' => 'required',
            'location' => 'required',
            'shoot_date' => 'required|date',
            'subject' => 'required',
            'description' => 'required',
        ]);
    
        DB::table('shoot_sets')->insert([
            'title' => $data['title'],
            'cover_filename' => $data['cover_filename'],
            'location' => $data['location'],
            'shoot_date' => $data['shoot_date'],
            'subject' => $data['subject'],
            'description' => $data['description'],
        ]);
    
        return redirect('/');
    }
    
    public static function getSets(){
        $photoSets = DB::table('shoot_sets')->get();
        return $photoSets;
    }
    
    public static function getSetbyId($id){
        $photoSet = DB::table('shoot_sets')->where('id', $id)->first();
        return $photoSet;
    }


    public static function getAccountFavourites($id) {
        $favs = DB::select("SELECT filename, photo_id FROM photo_favorites pf, photos p where pf.user_id =" . $id . " and p.id = pf.photo_id");

        return $favs;
    }

    public static function getRandomPhotos($numPhotos) {
        $photos = Photo::inRandomOrder()->limit($numPhotos)->get();
        return $photos;
    }


}
