<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KrfSectionSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'sub_title',
        'image',
        'description',
    ];
}