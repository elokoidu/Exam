<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /***
     * @param string $role
     * @return $this
     */
    public function addRole(string $role)
    {
        return $this->setRole($role);
    }

    /**
     * @param array $role
     * @return $this
     */
    public function setRole(string $role)
    {
        $this->setAttribute('role', $role);
        return $this;
    }

    /***
     * @param $role
     * @return mixed
     */
    public function hasRole($role)
    {
        return $role === $this->getRole();
    }

    /**
     * @return array
     */
    public function getRole()
    {
        $role = $this->getAttribute('role');

        if (is_null($role)) {
            $role = [];
        }

        return $role;
    }
}
