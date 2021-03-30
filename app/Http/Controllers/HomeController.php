<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests\AnnouncementRequest;

class HomeController extends Controller
{
    public function newAnnouncement ()
    {
        $uniqueSecret = base_convert(sha1(uniqid(mt_rand())),16,36);
        return view('announcements.new', compact('uniqueSecret'));
    }
    
    public function createAnnouncement(AnnouncementRequest $request)
    {
        $a = new Announcement();
        $a->name = $request->input('name');
        $a->description = $request->input('description');
        $a->price = $request->input('price');
        $a->user_id = Auth::id();
        $a->category_id = $request->input('category');
        $a->save();
        $uniqueSecret = $request->input('uniqueSecret');
        
        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }



    public function detailAnnouncement($id)
    {
        $announcement = Announcement::findOrFail($id);
        return view('announcements.detail', compact('announcement'));
    }


    public function uploadImages(Request $request)
    {

        $uniqueSecret = $request->input('uniqueSecret');
        $fileName = $request->file('file')->store('public/temp/{$uniqueSecret}');
        session()->push("images.{$uniqueSecret}", $fileName);
        return response()->json(
            session()->get("images.{$uniqueSecret}")
            
        );    
    }
}
