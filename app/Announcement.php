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

}
