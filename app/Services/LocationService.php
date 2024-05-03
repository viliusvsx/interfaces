<?php

namespace App\Services;

use App\Interfaces\Location\StoreLocationInterface;
use App\Models\Location;

class LocationService
{
    public function __construct(
        protected StoreLocationInterface $storeLocation,
    ){}

    public function store(Location $location): Location
    {
        return $this->storeLocation->save($location);
    }
}
