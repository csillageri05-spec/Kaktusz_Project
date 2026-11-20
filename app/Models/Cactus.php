<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


#[Fillable(['id', 'name', 'type', 'dmg', 'speed', 'mana', 'hp', 'owner', 'image_path', 'hat_id', 'created_at', 'updated_at'])]
class Cactus extends Model

{
    /** @use HasFactory<\Database\Factories\CactusFactory> */
    use HasFactory;
}
