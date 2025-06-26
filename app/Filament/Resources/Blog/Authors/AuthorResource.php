<?php

namespace App\Filament\Resources\Blog\Authors;

use App\Filament\Resources\Blog\Authors\Pages\CreateAuthor;
use App\Filament\Resources\Blog\Authors\Pages\EditAuthor;
use App\Filament\Resources\Blog\Authors\Pages\ListAuthors;
use App\Filament\Resources\Blog\Authors\Pages\ViewAuthor;
use App\Filament\Resources\Blog\Authors\Schemas\AuthorForm;
use App\Filament\Resources\Blog\Authors\Schemas\AuthorInfolist;
use App\Filament\Resources\Blog\Authors\Tables\AuthorsTable;
use App\Models\Blog\Author;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class AuthorResource extends Resource
{
    protected static ?string $model = Author::class;

    protected static ?string $slug = 'blog/authors';

    protected static ?string $recordTitleAttribute = 'name';

    protected static string|UnitEnum|null $navigationGroup = 'Blog';

    protected static string|BackedEnum|null $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 2;

    public static function form(Schema $schema): Schema
    {
        return AuthorForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AuthorInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AuthorsTable::configure($table);
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
            'index' => ListAuthors::route('/'),
            'create' => CreateAuthor::route('/create'),
            'view' => ViewAuthor::route('/{record}'),
            'edit' => EditAuthor::route('/{record}/edit'),
        ];
    }
}
