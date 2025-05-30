<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactResource\Pages;
use App\Models\Contact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Actions\ViewAction;
use Filament\Tables\Actions\DeleteAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Contact Formulieren';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('first_name')
                    ->label('Voornaam')
                    ->disabled(),
                Forms\Components\TextInput::make('last_name')
                    ->label('Achternaam')
                    ->disabled(),
                Forms\Components\TextInput::make('company')
                    ->label('Bedrijf')
                    ->disabled(),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->disabled(),
                Forms\Components\TextInput::make('phone_number')
                    ->label('Telefoonnummer')
                    ->disabled(),
                Forms\Components\Textarea::make('message')
                    ->label('Bericht')
                    ->disabled(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->poll(10)
            ->columns([
                TextColumn::make('first_name')
                    ->label('Voornaam')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('last_name')
                    ->label('Achternaam')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('email')
                    ->label('Email')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('phone_number')
                    ->label('Telefoonnummer'),
                TextColumn::make('message')
                    ->label('Bericht')
                    ->limit(50),
                TextColumn::make('created_at')
                    ->label('Gemaakt op')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('deleted_at')
                    ->label('Deleted op')
                    ->dateTime()
                    ->sortable()
                    ->hidden(fn () => !request()->query('trashed')),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                ViewAction::make(),
                DeleteAction::make(),
                Tables\Actions\RestoreAction::make(),
                Tables\Actions\ForceDeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\RestoreBulkAction::make(),
                Tables\Actions\ForceDeleteBulkAction::make(),
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
            'index' => Pages\ListContacts::route('/'),
        ];
    }

    protected static function getGlobalSearchAttributes(): array
    {
        return ['first_name', 'last_name', 'email', 'message'];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->withoutGlobalScope(SoftDeletingScope::class);
    }

    public static function canCreate(): bool
    {
        return false;
    }

    // Add this method to show the total number of contacts in the sidebar
    public static function getNavigationBadge(): ?string
    {
        return (string) Contact::count();
    }
}
