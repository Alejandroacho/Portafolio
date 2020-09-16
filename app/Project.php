<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = ['title', 'description', 'category', 'url', 'url_name', 'relase_date'];
}
