<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Role;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
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
    ];

    // Relationship Methods
    public function roles() 
    {
      return $this->belongsToMany(Role::class);
    }

    public function timeEntries()
    {
      return $this->hasMany(TimeEntry::class);
    }
    
    // Role Method Checks
    public function isAdmin(): Bool
    {
      return in_array(Role::IS_ADMIN, $this->roles()->pluck('id')->toArray());
    }

    public function isOwner(): Bool
    {
      return in_array(Role::IS_OWNER, $this->roles()->pluck('id')->toArray());
    }
    
}
