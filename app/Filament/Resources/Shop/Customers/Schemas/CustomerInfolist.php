<?php

namespace App\Filament\Resources\Shop\Customers\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class CustomerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                // TextEntry::make('name'),
                // TextEntry::make('email'),
                // TextEntry::make('photo'),
                // TextEntry::make('gender'),
                // TextEntry::make('phone'),
                // TextEntry::make('birthday')
                //     ->date(),
                // TextEntry::make('created_at')
                //     ->dateTime(),
                // TextEntry::make('updated_at')
                //     ->dateTime(),
                // TextEntry::make('deleted_at')
                //     ->dateTime(),
            ]);
    }
}
