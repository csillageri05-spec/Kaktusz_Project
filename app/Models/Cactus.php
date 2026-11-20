<?php

namespace App\Models;

use App\Enums\CactusType;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/** @property CactusType $type */
#[Fillable(['id', 'name', 'type', 'dmg', 'speed', 'mana', 'hp', 'owner', 'image_path', 'hat_id', 'created_at', 'updated_at'])]
class Cactus extends Model
{
    /** @use HasFactory<\Database\Factories\CactusFactory> */
    use HasFactory;

    protected $table = 'cacti';

    protected function casts(): array
    {
        return [
            'type' => CactusType::class,
            'dmg' => 'integer',
            'speed' => 'integer',
            'mana' => 'integer',
            'hp' => 'integer',
        ];
    }

    /** @return BelongsTo<Hat, $this> */
    public function hat(): BelongsTo
    {
        return $this->belongsTo(Hat::class);
    }
}
