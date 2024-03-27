<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $fillable = ['users_id', 'messege'];

    public function user(){
        return $this->belongsTo(User::class,'users_id','id');
    }

    

}
