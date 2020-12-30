<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

// class Superadmin extends Model
// {
//     use HasFactory;
// }

class Secretary extends Authenticatable
    {
        use Notifiable;
        use HasFactory;
        protected $table = "secretary";

        protected $guard = 'secretary';

        protected $fillable = [
            'name', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
}
