<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Summary of Role
 */
class Role extends Model
{

    use HasFactory;
    public const USER = 'user';

    public const ADMIN = 'admin';
    /**
     * Summary of table
     *
     * @var string
     */
    protected $table = "roles";

    protected $fillable = ['id','name'];

    protected $timestamp = false;

    /**
     * Summary of users
     *
     * @return HasMany
     */
    public function users(): HasMany
    {

        return $this->hasMany(User::class);

    }

}
