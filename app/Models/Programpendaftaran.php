<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programpendaftaran extends Model
{
    protected $fillable = [
        'judul',
        'content',
        'filename',
        'link'
      ];
}
