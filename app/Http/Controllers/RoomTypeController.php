<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\RoomType;
use Inertia\Inertia;
use Inertia\Response;

final class RoomTypeController extends Controller
{
    public function index(): Response
    {
        return Inertia::render('our-rooms', [
            'roomTypes' => RoomType::query()
                ->withCount('rooms')
                ->get(),
        ]);
    }
}
