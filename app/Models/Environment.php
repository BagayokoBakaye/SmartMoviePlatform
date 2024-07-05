<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Environment extends Model
{
    use HasFactory;
     protected $fillable = ['project_id', 'name', 'description', 'image_path'];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class, 'environment_scene');
    }
}
