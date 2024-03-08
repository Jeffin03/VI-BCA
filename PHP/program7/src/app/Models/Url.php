<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Url extends Model
{
    use HasFactory;


    protected $fillable = ['original_url', 'short_code'];


    public static function generateUniqueShortCode()
    {
        $code = Str::random(6);


        while (self::where('short_code', $code)->exists()) {
            $code = Str::random(6);
        }


        return $code;
    }
}