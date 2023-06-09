<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TodoItem extends Model
{
    use HasFactory;

    /**
     * @return BelongsTo
     */
    public function todo_list(): BelongsTo
    {
        return $this->belongsTo(TodoList::class);
    }
}
