<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'language',
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

    public function savedRecipes()
    {
        return $this->hasMany(SavedRecipes::class);
    }
    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
    public function recipes()
    {
        return $this->hasManyThrough(
            Recipe::class,
            SavedRecipes::class,
            'user_id', // Foreign key on SavedRecipes table
            'id', // Local key on Recipe table
            'id', // Local key on User table
            'recipe_id' // Foreign key on SavedRecipes table
        );
    }
}
