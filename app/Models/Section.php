<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Section extends Model
{
    use HasApiTokens, Notifiable;

    protected $table = 'sections';

    protected $fillable = ['title', 'slug', 'description'];

    public function topics()
    {
        return $this->hasMany(Topic::class, 'section_id');
    }
}
