<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'sigle', 'slogant', 'email', 'office_number', 'mobile_number',
        'logo', 'address', 'country', 'province', 'city'
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
