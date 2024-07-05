<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personnage extends Model
{
    use HasFactory;
    protected $table = 'personnages';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'role', 'backstory','photo'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class, 'scene_character');
    }

    public function dialogues()
    {
        return $this->hasMany(SceneDialogue::class);
    }

}
