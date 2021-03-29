<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index ()
    {
        $announcements = Announcement::where('is_accepted',true)
                                    ->orderBy('id', 'desc')->paginate(5);

        //$announcements = Announcement::orderBy('id', 'desc')->paginate(5);
        return view('welcome', compact('announcements'));
    }

    public function detailCategory($id)
    {
        $category = Category::findOrFail($id);
        $announcements = $category->announcements()
                                    ->where('is_accepted',true)
                                    ->orderBy('id', 'desc')->paginate(5);
        
        return view('announcements.detailcategory', compact('category','announcements'));

        /* $category = Category::findOrFail($id);
        return view('announcements.detailcategory', compact('category')); */
    }

    public function locale($locale)
    {
        session()->put('locale',$locale);
        return redirect()->back();
    }

}
