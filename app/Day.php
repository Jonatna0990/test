<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Класс, описывающий день недели
 * Class Day
 * @package App
 */
class Day extends Model
{
    protected $fillable = ['name'];
    public $timestamps = false;
}
