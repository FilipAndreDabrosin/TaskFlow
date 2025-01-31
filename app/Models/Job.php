<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\ArrayRule;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model 
{
    use HasFactory;
    protected $table = 'jobs_listings'; 

    protected $fillable = ['title', 'salary'];
}