<?php

namespace App\Filament\Resources\Blog\Authors\Pages;

use App\Filament\Resources\Blog\Authors\AuthorResource;
use Filament\Resources\Pages\CreateRecord;

class CreateAuthor extends CreateRecord
{
    protected static string $resource = AuthorResource::class;
}
