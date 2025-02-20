<?php

namespace App\Filament;

use Closure;
use Filament\Resources\Pages\ManageRecords;
use Filament\Tables\Filters\Layout;
use Illuminate\Database\Eloquent\Model;

class PageListSingle extends ManageRecords
{
    protected ?string $maxContentWidth = 'full';

    protected function getTableFiltersLayout(): ?string
    {
        return \Filament\Tables\Enums\FiltersLayout::AboveContent;
    }

    protected function getTableRecordActionUsing(): ?Closure
    {
        return null;
    }
}
