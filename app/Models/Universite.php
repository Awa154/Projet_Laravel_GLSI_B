<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Universite extends Model
{
    use HasFactory;
    protected $table = 'universite';
    protected $hidden =[''];//s 'utilise au niveau du modele
    protected $fillable = ['nom','description','image_path','addresse','contact'];
}
