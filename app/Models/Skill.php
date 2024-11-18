<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    //模型中定义允许批量赋值的字段。这是 Laravel 的一个安全特性，所有的 Eloquent 模型都会默认阻止批量赋值。
    protected $fillable = ['name', 'level'];

}
