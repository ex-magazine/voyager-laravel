<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CandidatesAchivement extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'level',
        'month',
        'year',
        'description',
        'certificate_file',
        'supporting_file',
    ];

    protected $casts = [
        'year' => 'integer',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
