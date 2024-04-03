<?php

namespace App\Models;

use App\Enums\ProductStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Traits\Dumpable;

class Product extends Model
{
    use Dumpable;
    use HasFactory;
    protected $guarded = [];
    protected function casts():array
    {
        return [
           'status' => ProductStatus::class,
        ];
    }
}
