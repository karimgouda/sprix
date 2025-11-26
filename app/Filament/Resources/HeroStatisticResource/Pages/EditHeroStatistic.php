<?php

namespace App\Filament\Resources\HeroStatisticResource\Pages;

use App\Filament\Resources\HeroStatisticResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHeroStatistic extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = HeroStatisticResource::class;

    protected function getActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
