<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Customer;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\TextColumn;

class CustomerResource extends Resource
{
  protected static ?string $model = Customer::class;

  protected static ?string $navigationIcon = 'heroicon-o-user-group';

  public static function form(Forms\Form $form): Forms\Form
  {
    return $form
      ->schema([
        TextInput::make('nama_customer')
          ->required()
          ->label('Nama Customer'),
        TextInput::make('alamat')
          ->required()
          ->label('Alamat'),
        TextInput::make('telp')
          ->label('No. Telepon')
          ->numeric()
          ->nullable(),
        TextInput::make('fax')
          ->label('Fax')
          ->nullable(),
        TextInput::make('email')
          ->email()
          ->label('Email')
          ->nullable(),
      ]);
  }

  public static function table(Tables\Table $table): Tables\Table
  {
    return $table
      ->columns([
        TextColumn::make('nama_customer')->sortable()->searchable(),
        TextColumn::make('alamat')->limit(30),
        TextColumn::make('telp'),
        TextColumn::make('email'),
      ])
      ->actions([
        Tables\Actions\EditAction::make(),
        Tables\Actions\DeleteAction::make(),
      ]);
  }

  public static function getPages(): array
  {
    return [
      'index' => Pages\ListCustomers::route('/'),
      'create' => Pages\CreateCustomer::route('/create'),
      'edit' => Pages\EditCustomer::route('/{record}/edit'),
    ];
  }
}
