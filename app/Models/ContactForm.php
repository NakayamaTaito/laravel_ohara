<?php

namespace App\Models;

use App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\contactForm;

use Illuminate\Database\Eloquent\Model;

class ContactForm extends Model
{
    //
    protected $fillable = [
        'name',
        'title',
        'email',
        'url',
        'gender',
        'age',
        'contact',
    ];
}
