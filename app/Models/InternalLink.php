<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InternalLink extends Model
{
    protected $fillable = [
        'source_page_type',
        'source_page_id',
        'target_url',
        'anchor_text',
    ];
}
