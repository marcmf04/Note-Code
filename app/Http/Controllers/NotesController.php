<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Models\Note;
use App\Models\User;

class NotesController extends Controller
{
    public function notesFromUser($username)
    {
        $notes_user_id = User::getUserIdFromUsername($username);
        $user_id = auth()->user()->id;

        if ($notes_user_id == $user_id) {
            $notes = Note::getNotes($user_id, true);
        } else {
            $notes = Note::getNotes($notes_user_id, false);
        }

        dd($notes);

        // return a json response
        return response()->json($notes);
    }
}
