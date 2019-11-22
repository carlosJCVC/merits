<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [ 'title', 'description', 'announcement_id', 'required' ];

    /**
     * Get the file record associated with the requirement.
     */
    public function file()
    {
        return $this->hasOne('App\File');
    }
}
