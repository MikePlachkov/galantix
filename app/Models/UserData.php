<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class UserData extends Model
{
    protected $table = 'users-data';
    protected $primaryKey = 'id';
    protected $fillable = ['UID','name', 'age', 'email', 'phone', 'gender'];
}

