<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scene extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function storyboards()
    {
        return $this->belongsToMany(Storyboard::class, 'storyboard_scene');
    }

    public function personnages()
    {
        return $this->belongsToMany(Personnage::class, 'scene_character');
    }

    public function dialogues()
    {
        return $this->hasMany(SceneDialogue::class);
    }

    public function environments()
    {
        return $this->belongsToMany(Environment::class, 'environment_scene');
    }

    public function objects()
    {
        return $this->belongsToMany(Object::class, 'object_scene');
    }
}
