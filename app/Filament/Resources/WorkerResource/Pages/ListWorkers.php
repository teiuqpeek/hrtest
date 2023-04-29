<?php

namespace App\Filament\Resources\WorkerResource\Pages;

use App\Filament\Resources\WorkerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Konnco\FilamentImport\Actions\ImportAction;
use Konnco\FilamentImport\Actions\ImportField;


class ListWorkers extends ListRecords
{
    protected static string $resource = WorkerResource::class;

    protected static ?string $title = 'Результаты анкетирования';
    protected static ?string $breadcrumb = 'Анкеты';

    protected function getActions(): array
    {
        return [
            // Actions\CreateAction::make(),
            ImportAction::make()
                ->fields([

                    ImportField::make('name')
                        ->label('Имя'),
                    ImportField::make('questions.one'),
                    ImportField::make('questions.two'),
                    ImportField::make('questions.three'),
                    ImportField::make('questions.four'),
                    ImportField::make('questions.five'),
                    ImportField::make('questions.six'),
                    ImportField::make('questions.seven'),
                    ImportField::make('questions.eight'),
                    ImportField::make('questions.nine'),
                    ImportField::make('questions.ten'),
                    ImportField::make('questions.aone'),
                    ImportField::make('questions.atwo'),
                    ImportField::make('questions.athree'),
                    ImportField::make('questions.afour'),
                    ImportField::make('questions.afive'),
                    ImportField::make('questions.asix'),
                    ImportField::make('questions.aseven'),
                    ImportField::make('questions.aeight'),
                    ImportField::make('questions.anine'),
                    ImportField::make('questions.aten'),
                    ImportField::make('questions.bone'),
                    ImportField::make('questions.btwo'),
                    ImportField::make('questions.bthree'),


                ])
        ];
    }
}
