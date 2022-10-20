<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Playing
{
    use HasApiTokens, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'votes',
        'data',
        'confirmed',
        'name',
        'want_to_be_created_at',
        'wasnt_actually_created_at',
        'amount',
        'column',
        'choices',
        'another_amount',
        'votes_but_worse',
        'description',
        'numbers',
        'description_but_medium',
        'taggable',
        'votes_but_never',
        'numb',
        'email',
        'name_of_my_first_child',
        'sunrise',
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
}
