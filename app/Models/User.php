<?php

namespace App\Models;

use App\Filters\BasicFilters;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'age',
        'location',
        'email',
        'password',
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


    /**
     * @param Builder $builder
     * @param BasicFilters $filters
     * @return Builder
     */
    public function scopeFilter(Builder $builder, BasicFilters $filters): Builder
    {
        return $filters->setBuilder($builder)->makeFilter();
    }

    /**
     * @return BelongsToMany
     */
    public function dogs(): BelongsToMany
    {
        return $this->belongsToMany(Dog::class);
    }
}
