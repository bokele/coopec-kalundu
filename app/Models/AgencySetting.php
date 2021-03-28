<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AgencySetting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'user_id', 'email',  'office_number', 'mobile_number',
        'address',  'province', 'city'
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
