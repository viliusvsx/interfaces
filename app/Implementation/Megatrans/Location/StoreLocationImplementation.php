<?php

namespace App\Implementation\Megatrans\Location;

use App\Interfaces\Location\StoreLocationInterface;
use App\Models\Location;
use App\Models\Logging;

class StoreLocationImplementation implements StoreLocationInterface
{
    public function save(Location $location): Location
    {
        $location->save();

        $logId = Logging::query()->latest()->value('id');

        Logging::query()->create([
            'name' => $logId ? (int) $logId + 1 : 1
        ]);

        return $location;
    }
}