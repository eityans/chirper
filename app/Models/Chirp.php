<?php

namespace App\Models;

use App\Events\ChirpCreated;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chirp extends Model
{
    use HasFactory;
    protected $fillable = [
      'message',
    ];

    protected $dispachesEvents = [
      'created' => ChirpCreated::class,
    ];

    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
