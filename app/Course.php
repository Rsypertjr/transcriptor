<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
	
	 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['student_id','gradelevel','courseName'];
	
	/**
     * Get Grade Level the Course belongs to
     */
	public function gradelevel()
    {
        return $this->belongsTo(GradeLevel::class);
    }
}

	
	