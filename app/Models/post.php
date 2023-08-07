<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
use App\Models\Tag;
use App\Models\User;

class post extends Model
{
    use HasFactory;
    protected $table = 'post';
    protected $fillable =['title','price','image','description','category_id','user_id'];
    //create realectionshiptable
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function tag()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
