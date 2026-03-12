<?php

namespace App\Filament\Resources\SambutanKepseks;

use App\Filament\Resources\SambutanKepseks\Pages\CreateSambutanKepsek;
use App\Filament\Resources\SambutanKepseks\Pages\EditSambutanKepsek;
use App\Filament\Resources\SambutanKepseks\Pages\ListSambutanKepseks;
use App\Filament\Resources\SambutanKepseks\Schemas\SambutanKepsekForm;
use App\Filament\Resources\SambutanKepseks\Tables\SambutanKepseksTable;
use App\Models\SambutanKepsek;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SambutanKepsekResource extends Resource
{
    protected static ?string $model = SambutanKepsek::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'sambutan kepsek';

    public static function form(Schema $schema): Schema
    {
        return SambutanKepsekForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SambutanKepseksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListSambutanKepseks::route('/'),
            'create' => CreateSambutanKepsek::route('/create'),
            'edit' => EditSambutanKepsek::route('/{record}/edit'),
        ];
    }
}
