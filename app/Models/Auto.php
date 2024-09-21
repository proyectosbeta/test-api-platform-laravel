<?php

namespace App\Models;

use ApiPlatform\Metadata\ApiResource;
use ApiPlatform\Metadata\GetCollection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ApiResource(
    paginationItemsPerPage: 10,
    operations: [
        new GetCollection()
    ]
)]
class Auto extends Model
{
    use HasFactory;
}
