<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Project extends Model
{
    public $guarded = ["id"];

    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }
}
