<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignSubject extends Model
{
    public function student_class()
    {
        // relationship between two column in table
        return $this->belongsTo(StudentClass::class, 'class_id', 'id');
    }

    public function school_subject()
    {
        // relationship between two column in table
        return $this->belongsTo(SchoolSubject::class, 'subject_id', 'id');
    }
}
