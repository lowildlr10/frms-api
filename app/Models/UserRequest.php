<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRequest extends Model
{
    use HasUuids, HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'requests';

    public function attachments()
    {
        return $this->hasMany(RequestAttachment::class);
    }

    public function feedbacks()
    {
        return $this->hasMany(RequestFeedback::class);
    }
}
