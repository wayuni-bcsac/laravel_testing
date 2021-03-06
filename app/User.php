<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
  use HasApiTokens, Notifiable;
/**
* The attributes that are mass assignable.
*
* @var array
*/
protected $fillable = [
  'name', 'email', 'password',
  ];

  protected $hidden = [
    'password', 'remember_token',
    ];

 protected $casts = [
   'email_verified_at' => 'datetime',
 ];

 public function roles()
 {
   return $this->belongsToMany(Role::class,"role_users");
 }

 public function projects()
 {
   return $this->hasMany(Project::class);
 }

 public function phone()
 {
   return $this->hasOne(Phone::class);
 }

}