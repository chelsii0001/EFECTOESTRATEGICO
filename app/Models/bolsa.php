<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bolsa extends Model
{
    protected $table = 'bolsa';
    protected $fillable = ['name','lastname','phone','msg','email','file'];
    use HasFactory;
}
