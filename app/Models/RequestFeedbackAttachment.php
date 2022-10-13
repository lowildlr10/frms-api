<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFeedbackAttachment extends Model
{
    use HasUuids, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'request_feedback_id',
        'name',
        'url'
    ];

    public function feedback()
    {
        return $this->belongsTo(RequestFeedback::class);
    }
}
