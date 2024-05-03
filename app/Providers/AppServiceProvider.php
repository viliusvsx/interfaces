<?php

namespace App\Providers;

use App\Interfaces\Location\StoreLocationInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    protected string $currentCompany = 'megatranss';

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // By default subindinam šitą Interface su Default StoreLocationImplementation.
        $this->app->bindIf(StoreLocationInterface::class, \App\Implementation\Default\Location\StoreLocationImplementation::class);

        // Tarkim turim kažkokią įmonę, kuri nori, kai kai sukuriame lokaciją, būtų padaromi papildomi atitinkami veiksmai.
        if ($this->currentCompany === 'megatrans') {
            $this->app->bind(StoreLocationInterface::class, \App\Implementation\Megatrans\Location\StoreLocationImplementation::class);
        }
    }
}
