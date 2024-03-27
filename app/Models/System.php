<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class System extends Model
{
    use HasFactory;

    protected $fillable = [
        'computer','cpu','users_id'
        ];

        public function user(){
            return $this->belongsTo(User::class,'users_id','id');
        }
}
