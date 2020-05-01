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
        'body', 'user_id', 'contact_id'
    ];

    /**
     * Get the user who has the contact
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user who has the contact
     */
    public function contact()
    {
        return $this->belongsTo(Contact::class);
    }

}
