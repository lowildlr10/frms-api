<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestFeedback extends Model
{
    use HasUuids, HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'request_id',
        'respondent_id',
        'message'
    ];

    public function attachments()
    {
        return $this->hasMany(RequestFeedbackAttachment::class);
    }

    public function request()
    {
        return $this->belongsTo(UserRequest::class);
    }
}
