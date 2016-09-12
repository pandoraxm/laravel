<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StuController extends CommonController
{
    //1 添加表单
    public function create()
    {
    	return view("admin.stu.add");
    }   
    //2 执行添加
    //3 修改表单
    //4 执行修改
    //5 执行删除
    //6 执行查询
    public function show()
    {
    	return view("admin.stu.table");
    }
    //7 查询单条数据
}
