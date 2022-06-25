<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;
//List of properties that must be assigned
    protected $fillable = ['title', 'description', 'category','author', 'signees'];
    //List of properties that must NOT be assigned
   // protected $guarded;
}
