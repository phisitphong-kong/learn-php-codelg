<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-7"></div>
        <h4>Form Register</h4>
        <form action="<?php echo site_url('home/adding');?>" method="post" class="form-horizontal">
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Username</div>
            <div class="col-sm-5">
                <input type="text" name="username" required class="from-control" placeholder="username">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Password</div>
            <div class="col-sm-5">
                <input type="password" name="password" required class="from-control" placeholder="password">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Name</div>
            <div class="col-sm-5">
                <input type="text" name="name" required class="from-control" placeholder="name">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Lastname</div>
            <div class="col-sm-5">
                <input type="text" name="lastname" required class="from-control" placeholder="lastname">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">email</div>
            <div class="col-sm-5">
                <input type="email" name="email" required class="from-control" placeholder="email">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">phone</div>
            <div class="col-sm-5">
                <input type="text" name="phone" required class="from-control" placeholder="phone">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label"></div>
            <div class="col-sm-5">
               <button type="submit" class="btn btn-primary">Register</button>
        </div>
        </div>
    </div>
</div>

</form>
<a href="<?php echo site_url('home/login');?>">login</a>
</body>
</html>
