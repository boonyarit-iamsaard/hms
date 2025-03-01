<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Room;
use App\Models\RoomType;
use Exception;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

final class RoomTypeSeeder extends Seeder
{
    public function run(): void
    {
        try {
            $roomTypes = File::json(database_path('data/room_types.json'));
        } catch (Exception) {
            $this->command->info('Room types seed data not found, skipping...');

            return;
        }

        if (empty($roomTypes)) {
            $this->command->info('Room types seed data is empty, skipping...');

            return;
        }

        foreach ($roomTypes as $roomType) {
            $createdRoomType = RoomType::create([
                'code' => $roomType['code'],
                'name' => $roomType['name'],
                'description' => $roomType['description'],
            ]);

            for ($i = 1; $i <= $roomType['quantity']; $i++) {
                Room::create([
                    'name' => "$createdRoomType->code-$i",
                    'room_type_id' => $createdRoomType->id,
                ]);
            }
        }
    }
}
