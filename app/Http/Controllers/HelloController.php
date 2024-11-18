<?php

namespace App\Http\Controllers;

use App\Models\Skill; // 引入 Skill 模型
use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $data = [
            'name' => "新用户",
            'skills' => Skill::all() // 从数据库中获取所有技能
        ];

        return view('hello', $data);
    }
}
