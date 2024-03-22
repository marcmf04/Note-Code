<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    public function scopeGetNotes($query, $user_id, $private = false)
    {
        if ($private) {
            return Note::where('user_id', $user_id)->get()->toArray();
        } else {
            return Note::where('user_id', $user_id)->where('public', true)->get()->toArray();
        }
    }
}
