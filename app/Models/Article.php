<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['title','body','slug'];
    use HasFactory;



    public function user()
    {

        return $this->belongsTo(User::class);
    }
}
