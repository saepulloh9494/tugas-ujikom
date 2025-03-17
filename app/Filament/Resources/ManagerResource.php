<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ManagerResource\Pages;
use App\Models\Manager;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ManagerResource extends Resource
{
  protected static ?string $model = Manager::class;

  protected static ?string $navigationIcon = 'heroicon-o-user-circle';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_manager')
          ->required()
          ->label('Nama Manager'),
        Select::make('id_level')
          ->relationship('level', 'nama_level')
          ->required()
          ->label('Level'),
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
      'index' => Pages\ListManagers::route('/'),
      'create' => Pages\CreateManager::route('/create'),
      'edit' => Pages\EditManager::route('/{record}/edit'),
    ];
  }
}
