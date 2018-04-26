<?php

namespace App\Models\Auth;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'artists';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['fullname', 'email', 'contact', 'address', 'message','image'];
    
}
