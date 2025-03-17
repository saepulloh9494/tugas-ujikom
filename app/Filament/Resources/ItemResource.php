<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ItemResource\Pages;
use App\Models\Item;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class ItemResource extends Resource
{
  protected static ?string $model = Item::class;

  protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_item')
          ->required()
          ->label('Nama Item'),
        TextInput::make('harga')
          ->numeric()
          ->required()
          ->label('Harga'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('nama_item')->label('Nama Item'),
        TextColumn::make('harga_beli')->label('Harga Beli')->money('IDR'),
        TextColumn::make('harga_jual')->label('Harga Jual')->money('IDR'),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListItems::route('/'),
      'create' => Pages\CreateItem::route('/create'),
      'edit' => Pages\EditItem::route('/{record}/edit'),
    ];
  }
}
