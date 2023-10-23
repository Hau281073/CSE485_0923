<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Author extends Model
{
    use HasFactory;
    // public static function getAuthorData(){

    //     $value=DB::table('authors')->paginate(3);
    //     return $value;
    // }
    protected $fillable = ['name','bio'] ;
    
}
