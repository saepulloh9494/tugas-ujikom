<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionTempResource\Pages;
use App\Models\TransactionTemp;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class TransactionTempResource extends Resource
{
  protected static ?string $model = TransactionTemp::class;

  protected static ?string $navigationIcon = 'heroicon-o-clock';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        Select::make('id_item')
          ->relationship('item', 'nama_item') // Pastikan relasi ada di model
          ->required()
          ->label('Item'),

        TextInput::make('quantity')
          ->numeric()
          ->required()
          ->label('Quantity'),

        TextInput::make('price')
          ->numeric()
          ->required()
          ->label('Price'),

        TextInput::make('amount')
          ->numeric()
          ->required()
          ->label('Amount'),

        TextInput::make('session_id')
          ->disabled()
          ->label('Session ID'),

        TextInput::make('remark')
          ->nullable()
          ->label('Remark'),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('item.nama_item')->label('Item'),
        TextColumn::make('quantity')->label('Quantity'),
        TextColumn::make('price')->label('Price'),
        TextColumn::make('amount')->label('Amount'),
        TextColumn::make('remark')->label('Remark')->limit(30),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListTransactionTemps::route('/'),
      'create' => Pages\CreateTransactionTemp::route('/create'),
      'edit' => Pages\EditTransactionTemp::route('/{record}/edit'),
    ];
  }
}
