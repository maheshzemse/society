<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Admin extends Model
// {
//     use HasFactory;
// }

class Admin extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'admin';

        protected $fillable = [
            'name','society_id', 'flat_no','contact_no', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
