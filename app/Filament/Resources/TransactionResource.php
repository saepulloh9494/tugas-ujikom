<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TransactionResource\Pages;
use App\Models\Transaction;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class TransactionResource extends Resource
{
  protected static ?string $model = Transaction::class;

  protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        Select::make('id_sales')
          ->relationship('sales', 'do_number')
          ->required()
          ->label('Sales'),
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
        TextColumn::make('sales.do_number')->label('DO Number'),
        TextColumn::make('customer.nama_customer')->label('Customer'),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListTransactions::route('/'),
      'create' => Pages\CreateTransaction::route('/create'),
      'edit' => Pages\EditTransaction::route('/{record}/edit'),
    ];
  }
}
