<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Nous extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'historique', 'mission', 'vision', 'objectif', 'user_id'
    ];

    /**
     * Get the user that owns the Nous
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
