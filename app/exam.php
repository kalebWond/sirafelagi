<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class exam extends Model
{
    protected $fillable = ['title'];
	public function job()
    {
    	return $this->belongsTo(job::class);
    }

    public function questions()
    {
    	return $this->hasMany(question::class);
    }
    public function applicants()
    {
        return $this->belongsToMany('App\applicant','grades');
    }
    public function grades()
    {
        return $this->hasMany(grade::class);
    }
}
