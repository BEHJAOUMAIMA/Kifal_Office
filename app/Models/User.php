<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\Carbon;
use Carbon\CarbonImmutable;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'mobile',
        'is_admin',
        'role_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function hasRole($roleName)
    {
        return $this->role->role_name === $roleName;
    }

    public function hasPermission($permissionName)
    {
        return $this->role->permissions->pluck('permission_name')->contains($permissionName);
    }

    public function getUserFullName()
    {
        $first_name = $this->getAttribute('firstname');
        $last_name = $this->getAttribute('lastname');
        $fulName = $first_name . " " . $last_name;
        return $fulName;
    }
    public function getUserEmail()
    {
        $user_email = $this->getAttribute('email');
        return $user_email;
    }
    public function getUserMobile()
    {
        $user_mobile = $this->getAttribute('mobile');
        return $user_mobile;
    }

    public function getUserRole()
    {
        $user_role = $this->role->role_name;
        return $user_role;
    }
    public function getUserDateCreation()
    {
        $user_dateCreation = $this->getAttribute('created_at');
        setlocale(LC_TIME, 'fr_FR');
        $formatted_date =  Carbon::parse($user_dateCreation)->isoFormat('DD MMMM YYYY',null ,'fr');
        return $formatted_date;
    }


}
