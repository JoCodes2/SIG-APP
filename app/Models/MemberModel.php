<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MemberModel extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'member';
    protected $fillable = [
        'id',
        'name',
        'date_birth',
        'place_birth',
        'age',
        'address',
        'status',
        'status_member',
        'updated_at',
    ];
}
