<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rules\ArrayRule;

class Job extends Model 
{
    protected $table = 'jobs_listings'; 

    protected $fillable = ['title', 'salary'];
}