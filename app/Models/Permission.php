<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $fillable = [
        'permession_name',
        'permission_category'
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}