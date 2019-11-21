<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'description',
        'code',
        'start_date_announcement',
        'end_date_announcement',
        'start_date_calification',
        'end_date_calification',
    ];

    /**
     * Get the comments for the blog post.
     */
    public function areas()
    {
        return $this->belongsToMany('App\Area');
    }

    /**
     * Get the requirements for the announcement.
     */
    public function requirements()
    {
        return $this->hasMany('App\Requirement');
    }

    /**
     * The users that belong to the announcement.
     */
    public function users()
    {
        return $this->belongsToMany('App\User');
    }

}
