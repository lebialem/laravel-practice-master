<?php

namespace App\Filament\Resources\PizzaModuleResource\Pages;

use App\Filament\Resources\PizzaModuleResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPizzaModule extends EditRecord
{
    protected static string $resource = PizzaModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
