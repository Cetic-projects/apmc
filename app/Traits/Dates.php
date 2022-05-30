<?php
namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Casts\Attribute;

trait Dates{
    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date("Y-M-D h:m",strtotime($value)),
        );
    }
    protected function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => date("Y-M-D h:m",strtotime($value)),
        );
    }
}
