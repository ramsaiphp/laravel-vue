<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    protected $fillable = ['name', 'messages'];

    /*
     *
     */
    public function users(){

        return $this->hasMany(Messages::class);


    }
}
