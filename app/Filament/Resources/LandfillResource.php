<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandfillResource\Pages;
use App\Filament\Resources\LandfillResource\RelationManagers;
use App\Models\Landfill;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandfillResource extends Resource
{
    protected static ?string $model = Landfill::class;

    protected static ?string $navigationIcon = 'heroicon-o-trash';
    protected static ?string $navigationLabel = 'Data Tempat Sampah';
    protected static ?string $navigationGroup = 'Master Data';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('janitor_id')
                    ->relationship('janitor', 'nama_petugas')
                    ->label('Nama Petugas')
                    ->required(),
                Forms\Components\Select::make('vehicle_id')
                    ->relationship('vehicle', 'jenis_kendaraan')
                    ->label('Kendaraan')
                    ->required(),
                Forms\Components\Select::make('location_id')
                    ->relationship('location', 'nama_lokasi')
                    ->label('Lokasi')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('janitor.nama_petugas')
                    ->label('Nama Petugas')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('vehicle.jenis_kendaraan')
                    ->label('Kendaraan')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('location.nama_lokasi')
                    ->label('Lokasi')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListLandfills::route('/'),
            'create' => Pages\CreateLandfill::route('/create'),
            'edit' => Pages\EditLandfill::route('/{record}/edit'),
        ];
    }

    // public static function getWidgets(): array
    // {
    //     return [
    //         LandfillResource\Widgets\landfillchart::class,
    //     ];
    // }
}
