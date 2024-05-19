<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticate;
use Illuminate\Notifications\Notifiable;

class User extends Authenticate
{
    use HasFactory, Notifiable;
    protected $table = 'users';
    protected $guarded = [];
}
