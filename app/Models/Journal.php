<?php

namespace App\Models;

use App\Models\Concerns\HasUuid;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable('title', 'content')]
class Journal extends Model
{
    use HasUuid, SoftDeletes;

    protected function casts(): array
    {
        return [
            'created_at' => 'datetime'
        ];
    }
}
