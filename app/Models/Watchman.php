<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Watchman extends Model
// {
//     use HasFactory;
// }

class Watchman extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'watchman';

        protected $fillable = [
            'name','society_id','gender','birthdate', 'contact_no','email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }