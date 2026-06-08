<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'last_name', 'email', 'password'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => ucfirst($value),
            set: fn (string $value) => mb_convert_case($value, MB_CASE_TITLE, "UTF-8"),
        );
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => ucfirst($value),
            set: fn (string $value) => mb_convert_case($value, MB_CASE_TITLE, "UTF-8"),
        );
    }

    protected function email(): Attribute
    {
        return Attribute::make(
            get: fn(string $value) => strtolower($value),
            set: fn(string $value) => strtolower($value),
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: function (mixed $value, array $attributes) {
                $name = ucfirst($attributes['name']);
                $last_name = ucfirst($attributes['last_name']);
                return "{$name} {$last_name}";
            },
        );
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }


}
