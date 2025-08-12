<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
    protected $fillable = ['name', 'code', 'email', 'phone', 'type_service', 'date','heure','paiement','detail','message'];
}
