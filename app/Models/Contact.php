<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'mobile_no',
        'city',
        'message',
    ];
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
}
