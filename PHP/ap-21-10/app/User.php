<?php
<<<<<<< HEAD
namespace App;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }
=======

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
>>>>>>> 499c0a483493e27b7850feed4c999938658a9840
}
