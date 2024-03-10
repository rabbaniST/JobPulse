<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidateBookmark extends Model
{
    use HasFactory;

    public function Candidate()
    {
        return $this->belongsTo(Candidate::class, 'candidate_id');
    }

    public function Job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}