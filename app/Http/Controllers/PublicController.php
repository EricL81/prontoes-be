<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index ()
    {
        $categories = Category::all();
        $announcements = Announcement::where('is_accepted',true)
                                    ->orderBy('id', 'desc')->paginate(4);
        return view('welcome', compact('announcements','categories'));
    }

    public function detailCategory($id)
    {
        $category = Category::findOrFail($id);
        $announcements = $category->announcements()->where('is_accepted',true)->orderBy('id','desc')->paginate(4);
        return view('announcements.detailcategory', compact('category','announcements'));
    }

    public function locale($locale)
    {
        session()->put('locale',$locale);
        return redirect()->back();
    }


    public function search(Request $request)
    {
        $q = $request->input('q');
        $announcements = Announcement::search($q)
            ->where('is_accepted', true)
            ->get();

        return view('search_results', compact('q', 'announcements'));
    }  

}
