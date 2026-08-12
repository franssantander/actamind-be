<?php

namespace App\Data\Journals;

use Spatie\LaravelData\Data;

class JournalData extends Data
{
    public function __construct(
        public int $id,
        public string $uuid,
        public string $title,
        public ?string $content,
        public ?string $created_at,
        public ?string $updated_at
    ) {}
}