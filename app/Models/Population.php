<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Population extends Model
{
    use HasFactory;

    protected $fillable = ['name','age','address','religion','occupation','chitizenship'];
}
