<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

/**
 * Класс, описывающий сотрудника
 *
 * Class Employee
 * @package App
 */
class Employee extends Model
{
    protected $table = 'employes';
    protected $fillable = ['name'];
    public $timestamps = false;
}