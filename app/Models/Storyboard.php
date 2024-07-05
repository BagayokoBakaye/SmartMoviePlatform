<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Storyboard extends Model
{
    use HasFactory;
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scenario()
    {
        return $this->belongsTo(Scenario::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class, 'storyboard_scene');
    }
}
