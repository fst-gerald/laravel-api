<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    const MALE       = 0;
    const FEMALE     = 1;
    const NON_BINARY = 2;

    const SEXES = [
        'MALE',
        'FEMALE',
        'NON_BINARY'
    ];

    const CONTINENTS = [
        'Asia',
        'Africa',
        'Europe',
        'NorthAmerica',
        'SouthAmerica'
    ];

    const AGE_RANGES = [
        '10-24',
        '25-39',
        '40-59',
        '60-79',
        '80+' 
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'fname',
        'lname',
        'age',
        'sex',
        'continent'
    ];
}
