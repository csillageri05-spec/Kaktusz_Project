<?php

namespace App\Models;

use App\Enums\HatType;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/** @property HatType|null $type */
#[Fillable(['id', 'type', 'image_path', 'created_at', 'updated_at'])]
class Hat extends Model
{
    /** @use HasFactory<\Database\Factories\HatFactory> */
    use HasFactory;

    protected function casts(): array
    {
        return [
            'type' => HatType::class,
        ];
    }
}
