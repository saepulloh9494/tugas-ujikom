<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LevelResource\Pages;
use App\Models\Level;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class LevelResource extends Resource
{
  protected static ?string $model = Level::class;

  protected static ?string $navigationIcon = 'heroicon-o-chart-bar';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_level')
          ->required()
          ->label('Nama Level'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('level')->sortable()->searchable(),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListLevels::route('/'),
      'create' => Pages\CreateLevel::route('/create'),
      'edit' => Pages\EditLevel::route('/{record}/edit'),
    ];
  }
}
