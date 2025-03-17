<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SalesResource\Pages;
use App\Models\Sales;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;

class SalesResource extends Resource
{
  protected static ?string $model = Sales::class;

  protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        Select::make('id_customer')
          ->relationship('customer', 'nama_customer')
          ->required()
          ->label('Customer'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('customer.nama_customer')->label('Customer'),
        TextColumn::make('do_number')->label('DO Number'),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListSales::route('/'),
      'create' => Pages\CreateSales::route('/create'),
      'edit' => Pages\EditSales::route('/{record}/edit'),
    ];
  }
}
