<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
	
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];
	
	/**
     * Get all of the grade Levels for the student.
     */
    public function gradelevels()
    {
        return $this->hasMany(GradeLevel::class);
    }
	
}
 