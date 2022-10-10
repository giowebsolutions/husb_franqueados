<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'whatsapp',
        'address_city',
        'address_state',
        'address_postal',
        'address_street',
        'address_number',
        'address_complement',
        'address_reference',
        'user_id'
    ];
}
