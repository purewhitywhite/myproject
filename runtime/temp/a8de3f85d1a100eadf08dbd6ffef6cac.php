<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"D:\phpstudy\PHPTutorial\WWW\cumtdininghall\public/../application/admin\view\link\linklist.html";i:1558059489;s:77:"D:\phpstudy\PHPTutorial\WWW\cumtdininghall\application\admin\view\layout.html";i:1558101342;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台主页</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/index.css">
</head>
<body>

<nav class="navbar navbar-default my-nav">
    <div class="container-fluid">
        <div class="navbar-header" >
            <a class="navbar-brand">
                <img src="/img/cumt.jpeg" >
            </a>
            <span class="navbar-nav nav nav-title">后台管理中心</span>
            <a type="button" class="btn btn-success navbar-btn" href="<?php echo url('http://cumtdininghall.com/index/index/index'); ?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;前台首页</a>
            <a type="button" class="btn btn-primary navbar-btn" href="<?php echo url('http://cumtdininghall.com/admin/User/index'); ?>"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span>&nbsp;后台首页</a>
            <a type="button" class="btn btn-danger navbar-btn" href="<?php echo url('http://cumtdininghall.com/admin/Index/logout'); ?>"><span class="glyphicon glyphicon-off" aria-hidden="true"></span>&nbsp;退出登录</a>
        </div>
    </div>
</nav>

<div class="row">
    <div class="col-md-2 my-left">
        <div class="list-group">
            <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-user" aria-hidden="fasle"/>&nbsp;管理选项</a>
            <a href="<?php echo url('http://cumtdininghall.com/admin/User/changepassword'); ?>" class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"/>&nbsp;修改我的密码</a>
            <a href="<?php echo url('http://cumtdininghall.com/admin/User/userlist'); ?>" class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"/>&nbsp;用户管理</a>
            <a href="<?php echo url('http://cumtdininghall.com/admin/Article/articlelist'); ?>" class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"/>&nbsp;文章管理</a>
            <a href="<?php echo url('http://cumtdininghall.com/admin/Comment/commentlist'); ?>" class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"/>&nbsp;留言管理</a>
            <a href="<?php echo url('http://cumtdininghall.com/admin/Link/linklist'); ?>" class="list-group-item"><span class="glyphicon glyphicon-triangle-right" aria-hidden="true"/>&nbsp;友情链接</a>
        </div>
    </div>
    <div class="col-md-10 my-right">
        
<h4 class="h4">友情链接列表<a class="btn-add" href="<?php echo url('http://cumtdininghall.com/admin/Link/add'); ?>"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>添加友情链接</a>
</h4>
<table class="table table-bordered">
    <tr class="success">
        <th>ID</th>
        <th>名称</th>
        <th>url</th>
        <th>创建时间</th>
        <th>操作</th>
    </tr>

    <?php foreach($data as $value): ?>
    <tr>
        <td><?php echo $value['id']; ?></td>
        <td><?php echo $value['name']; ?></td>
        <td><?php echo $value['url']; ?></td>
        <td><?php echo $value['create_time']; ?></td>
        <td><a href="edit?id=<?php echo $value['id']; ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>&nbsp;修改</a>&nbsp;
            <a href="delete?id=<?php echo $value['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;删除</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<div align="center"><?php echo $page; ?></div>
    </div>
</div>

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/bootstrap.js"></script>
</body>
</html>