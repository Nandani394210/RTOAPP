<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sign extends Model
{
    use HasFactory;
    protected $table = 'signs';
    protected $fillable = [
        'title',
        'image',
        'lang',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];

    public function getImageAttribute($image){
        if(!empty($image) && file_exists(public_path("uploads/$image"))){
            return asset("uploads/$image");
        }else{
            return $image;
        }
    }
}
