<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContentModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'content';
    protected $fillable = [
        'id',
        'title',
        'description',
        'image',
        'link',
        'category',
        'date_upload',
    ];
}
