<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notation extends Model
{
    use HasFactory;
    protected $table = 'notation';
    protected $hidden =[''];//s 'utilise au niveau du modele
    protected $fillable = ['critere','note'];
}
