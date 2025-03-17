<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PetugasResource\Pages;
use App\Models\Petugas;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class PetugasResource extends Resource
{
  protected static ?string $model = Petugas::class;

  protected static ?string $navigationIcon = 'heroicon-o-user';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_petugas')
          ->required()
          ->label('Nama Petugas'),
        Select::make('id_manager')
          ->relationship('manager', 'nama_manager')
          ->required()
          ->label('Manager'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('nama_user')->sortable()->searchable(),
        TextColumn::make('level')->label('Level'),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListPetugas::route('/'),
      'create' => Pages\CreatePetugas::route('/create'),
      'edit' => Pages\EditPetugas::route('/{record}/edit'),
    ];
  }
}
