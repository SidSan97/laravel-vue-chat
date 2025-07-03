<?php

namespace App\Http\Controllers;

use App\Http\Resources\MessagesResource;
use App\Models\Room;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index(Room $room)
    {
        $messages = $room->messages()->with('user')->latest()->paginate(50);

        return MessagesResource::collection($messages);
    }
}
