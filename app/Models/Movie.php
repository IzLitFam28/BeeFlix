<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Movie extends Model
{
    protected $dates = ['publish_date'];

    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    protected function casts(): array
    {
        return [
            'publish_date' => 'date:d-m-Y'
        ];
    }
}
