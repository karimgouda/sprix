<?php

namespace App\Filament\Resources\PrivacyPolicyResource\Pages;

use App\Filament\Resources\PrivacyPolicyResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrivacyPolicy extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = PrivacyPolicyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
}
