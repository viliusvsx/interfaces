<?php

namespace App\Implementation\Default\Location;

use App\Interfaces\Location\StoreLocationInterface;
use App\Models\Location;

class StoreLocationImplementation implements StoreLocationInterface
{
    public function save(Location $location): Location
    {
        $location->save();

        return $location;
    }
}