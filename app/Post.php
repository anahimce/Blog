<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [ //popuniti u tabeli
        'title', 'body'
    ];


    // protected $guarded = [// popuniti sve sem id
    //     'id'
    // ];

    public static function published()
    {
        return self::where('published', 0)->get();
    }

    public static function drafts()
    {
        return self::where('published', 1)->get();
    }
}


