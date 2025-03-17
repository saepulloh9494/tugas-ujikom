<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IdentitasResource\Pages;
use App\Models\Identitas;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class IdentitasResource extends Resource
{
  protected static ?string $model = Identitas::class;

  protected static ?string $navigationIcon = 'heroicon-o-identification';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_identitas')
          ->required()
          ->label('Nama Identitas'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('nama_identitas')->sortable()->searchable(),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListIdentitas::route('/'),
      'create' => Pages\CreateIdentitas::route('/create'),
      'edit' => Pages\EditIdentitas::route('/{record}/edit'),
    ];
  }
}
