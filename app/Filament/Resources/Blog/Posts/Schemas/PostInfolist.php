<?php

namespace App\Filament\Resources\Blog\Posts\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class PostInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextEntry::make('blog_author_id')
                //     ->numeric(),
                // TextEntry::make('blog_category_id')
                //     ->numeric(),
                // TextEntry::make('title'),
                // TextEntry::make('slug'),
                // TextEntry::make('published_at')
                //     ->date(),
                // TextEntry::make('seo_title'),
                // TextEntry::make('seo_description'),
                // ImageEntry::make('image'),
                // TextEntry::make('created_at')
                //     ->dateTime(),
                // TextEntry::make('updated_at')
                //     ->dateTime(),
            ]);
    }
}
