@extends("admin.base.base")

@section("content")
  <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 class="fa fa-calendar">
            类别信息管理
      
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> 首页</a></li>
            <li><a href="#">学生信息管理</a></li>
            <li class="active">浏览类别信息</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-12">
              <div class="box">
                <div class="box-header with-border">
                  <h3 class="box-title"> 学生信息管理</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered">
                    <tr>
                      <th style="width: 50px">学号</th>
                      <th>姓名</th>
                      <th>性别</th>
                      <th>年龄</th>
                      <th>班级</th>
                      <th style="width: 200px">操作</th>
                    </tr>
                    <tr>
                      <td>1001</td>
                      <td>张三丰</td>
                      <td>男</td>
                      <td>24</td>
            <td>倚天一期</td>
            <td><button class="btn btn-danger">删除</button> <button class="btn btn-primary">修改</button></td> 
                    </tr>
          <tr>
                      <td>1002</td>
                      <td>郭襄</td>
                      <td>女</td>
                      <td>18</td>
            <td>倚天一期</td>
            <td><button class="btn btn-danger">删除</button> <button class="btn btn-primary">修改</button></td> 
                    </tr>
          <tr>
                      <td>1003</td>
                      <td>张无忌</td>
                      <td>男</td>
                      <td>18</td>
            <td>倚天二期</td>
            <td><button class="btn btn-danger">删除</button> <button class="btn btn-primary">修改</button></td> 
                    </tr>
          <tr>
                      <td>1004</td>
                      <td>赵敏</td>
                      <td>女</td>
                      <td>18</td>
            <td>倚天二期</td>
            <td><button class="btn btn-danger">删除</button> <button class="btn btn-primary">修改</button></td> 
                    </tr>
                  
                
                  </table>
                </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                  <ul class="pagination pagination-sm no-margin pull-right">
                    <li><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">&raquo;</a></li>
                  </ul>
                </div>
              </div><!-- /.box -->

              
        </section><!-- /.content -->
@endsection
   