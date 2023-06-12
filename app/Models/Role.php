<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'role_name', 'role_category'
    ];
    public function users()
    {
        return $this->hasMany(User::class);
    }
    
    public function permissions()
    {

        return \DB::table('permission_role')
            ->select([
                "permissions.*"
            ])
            ->where('role_id', '=', $this->getAttributeValue('id'))
            ->join('permissions', 'permissions.id', '=', 'permission_id')
            ->get();

        return $this->belongsToMany(Permission::class, 'permission_role');


    }
}
