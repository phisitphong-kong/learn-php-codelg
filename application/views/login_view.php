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
        <h4>Form login</h4>
        <form action="<?php echo site_url('home/showlogin');?>" method="post" class="form-horizontal">
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
            <div class="col-sm-2 control-label"></div>
            <div class="col-sm-5">
               <button type="submit" class="btn btn-primary">login</button>
        </div>
        </div>
    </div>
</div>

</form>
</body>
</html>
