<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Класс для связи между проектом, днем и пользователем
 *
 * Class ProjectDay
 * @package App
 */
class ProjectDay extends Model
{
    protected $primaryKey = 'day_id';
    protected $table = 'projectday';
    protected $fillable = ['day_id', 'employee_id',	'project_id'];
    public $timestamps = false;
}
