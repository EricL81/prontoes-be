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
    public function __construct()
    {
        View::share('categories', Category::all());
    }
    public function index ()
    {
        $announcements = Announcement::all();
        return view('welcome', compact('announcements'));
    }

    public function newAnnouncement ()
    {
        return view('announcements.new');
    }
    
    public function createAnnouncement(AnnouncementRequest $request)
    {
        $a = new Announcement();
        $a->name = $request->input('name');
        $a->description = $request->input('description');
        $a->price = $request->input('price');
        $a->user_id = Auth::id();
        $a->save();
        
        return redirect()->route('home')->with('announcement.create.success','Anuncio creado con exito');
    }
}
