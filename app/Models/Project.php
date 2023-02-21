<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model {
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'type',
        'status',
        'password',
        'server',
        'port',
        'username',
        'icon_url',
        'url'
    ];
}
