<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'messages';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'from_user', 'to_user'
    ];

    /**
     * Get the user who has the contact
     */
    public function fromUser()
    {
        return $this->hasOne(User::class, 'telephone', 'from_user');
    }

    /**
     * Get the user who has the contact
     */
    public function toUser()
    {
        return $this->hasOne(User::class, 'telephone', 'to_user');
    }

}
