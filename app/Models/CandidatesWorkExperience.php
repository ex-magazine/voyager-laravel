<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatesWorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'job_title',
        'employment_status',
        'job_description',
        'is_current_job',
        'start_month',
        'start_year',
        'end_month',
        'end_year',
    ];

    protected $casts = [
        'is_current_job' => 'boolean',
        'start_month' => 'integer',
        'start_year' => 'integer',
        'end_month' => 'integer',
        'end_year' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
