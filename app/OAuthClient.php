<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAuthClient extends Model
{
    protected $table = "oauth_clients";

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'name', 'secret','redirect', 'personal_access_client', 'password_client','revoked',
    ];
}
