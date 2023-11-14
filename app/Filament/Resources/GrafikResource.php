<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GrafikResource\Pages;
use App\Filament\Resources\GrafikResource\RelationManagers;
use App\Models\Grafik;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GrafikResource extends Resource
{
    protected static ?string $model = Grafik::class;

    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Grafik Sampah';
    protected static ?string $navigationGroup = 'Data Grafik';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListGrafiks::route('/'),
            'create' => Pages\CreateGrafik::route('/create'),
            'edit' => Pages\EditGrafik::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array
    {
        return [
            GrafikResource\Widgets\Grafikchart::class,
        ];
    }
}
