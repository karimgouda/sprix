<?php

namespace App\Filament\Resources\HeroStatisticResource\Pages;

use App\Filament\Resources\HeroStatisticResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateHeroStatistic extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = HeroStatisticResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
        ];
    }
}
