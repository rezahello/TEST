<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class star extends Model
{
    protected $fillable = ['nom', 'prenom','image','description'];
    use HasFactory;
}
