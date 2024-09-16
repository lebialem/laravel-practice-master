<?php

namespace App\Filament\Resources\PizzaModuleResource\Pages;

use App\Filament\Resources\PizzaModuleResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPizzaModules extends ListRecords
{
    protected static string $resource = PizzaModuleResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
