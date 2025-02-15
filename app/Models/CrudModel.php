<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\CrudController;

class CrudModel extends Model
{
    use HasFactory; 

    protected $fillable = ['name','email','age','location'];
}
