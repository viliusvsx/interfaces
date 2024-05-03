<?php

namespace App\Interfaces\Location;

use App\Models\Location;

interface StoreLocationInterface
{
    public function save(Location $location): Location;
}