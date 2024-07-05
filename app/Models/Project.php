<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function personnages()
    {
        return $this->hasMany(Personnage::class);
    }

    public function scenarios()
    {
        return $this->hasMany(Scenario::class);
    }

    public function storyboards()
    {
        return $this->hasMany(Storyboard::class);
    }

    public function scenes()
    {
        return $this->hasMany(Scene::class);
    }

    public function objects()
    {
        return $this->hasMany(Object::class);
    }

    public function environments()
    {
        return $this->hasMany(Environment::class);
    }
}
