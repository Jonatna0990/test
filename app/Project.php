<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Класс, описывающий проект
 * Class Project
 * @package App
 */
class Project extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}