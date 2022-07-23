<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Mainmenu;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class Mainmenu extends Model
{
    use HasFactory;
    protected $table = 'main_menu';
    protected $fillable = [
    'title',
    'status',
    'content',
    'parent',
    'category',
    'file',
    'url',
    'order'
];

public static $rules = [
    'title'     => 'required',
    'status'    => 'required',
    'parent'    => 'required',
    'category'  => 'required|in:link,file,content',
    'order'     => 'required'
];
}
