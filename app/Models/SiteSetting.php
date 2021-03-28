<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;
    protected $fillable = [
        'facebook', 'youtube', 'instagram', 'twitter', 'facebook_url',
        'youtube_url', 'instagram_url', 'twitter_url'

    ];
}
