<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TimetableModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'timetable';
    protected $fillable = [
        'id',
        'title',
        'description',
        'day',
        'start_time',
        'end_time',
        'updated_at',
    ];
}
