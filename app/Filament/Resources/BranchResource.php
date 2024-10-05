<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchResource\Pages;
//use App\Filament\Resources\BranchResource\RelationManagers;
use App\Models\Branch;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BranchResource extends Resource
{
    protected static ?string $model = Branch::class;

    protected static ?string $navigationIcon = 'heroicon-o-variable'; // Choose any appropriate icon

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('branch_name')
                    ->required()
                    ->label('Branch Name'),
                Forms\Components\TextInput::make('branch_phone')
                    ->label('Branch Phone'),
                Forms\Components\TextInput::make('branch_address')
                    ->required()
                    ->label('Branch Address'),
                Forms\Components\TextInput::make('branch_city')
                    ->required()
                    ->label('Branch City'),
                Forms\Components\TextInput::make('branch_country')
                    ->required()
                    ->label('Branch Country'),
                Forms\Components\TextInput::make('branch_state')
                    ->required()
                    ->label('Branch State'),
                Forms\Components\Select::make('company_id')
                    ->relationship('company', 'company_name')
                    ->required()
                    ->label('Company'),
                Forms\Components\Select::make('brand_id')
                    ->relationship('brand', 'name')
                    ->required()
                    ->label('Brand'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_city')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_country')->sortable(),
                Tables\Columns\TextColumn::make('company.company_name')->label('Company')->sortable(),
                Tables\Columns\TextColumn::make('brand.name')->label('Brand')->sortable(),
            ])
            ->filters([
                // Add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // You can define relations if needed, for example branches -> loyalty plans, etc.
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBranches::route('/'),
            'create' => Pages\CreateBranch::route('/create'),
            'edit' => Pages\EditBranch::route('/{record}/edit'),
        ];
    }
}
