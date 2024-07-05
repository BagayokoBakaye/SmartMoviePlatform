<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'project_id',
        'image_path'
        // other fields
    ];
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function scenes()
    {
        return $this->belongsToMany(Scene::class, 'object_scene');
    }
}
