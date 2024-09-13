<?php

namespace App\Models;

use App\Models\User;
use Laravel\Scout\Searchable;
use App\Models\AnnouncementImage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Announcement extends Model
{
    use HasFactory;
    use Searchable;

    public function toSearchableArray()
    {
        $array = [
            'id'=>$this->id,
            'name'=>$this->name,
            'description'=>$this->description,
            'category'=>$this->category->name,
            'user'=>$this->user->name,
            'other'=>'announcements announcement',
        ];

        return $array;
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    static public function ToBeRevisionedCount()
    {
        return Announcement::where('is_accepted', null)->count();
    }

    public function images()
    {
        return $this->HasMany(AnnouncementImage::class);
    }

}
