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
        <form action="<?php echo site_url('insertdata/adding');?>" method="post" class="form-horizontal">
     
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Name</div>
            <div class="col-sm-5">
                <input type="text" name="m_name" required class="from-control" placeholder="name">
            </div>
        </div>
        <div clas="form-group row">
            <div class="col-sm-2 control-label">Lastname</div>
            <div class="col-sm-5">
                <input type="text" name="m_lname" required class="from-control" placeholder="lastname">
            </div>
        </div>
       
        <div clas="form-group row">
            <div class="col-sm-2 control-label"></div>
            <div class="col-sm-5">
               <button type="submit" class="btn btn-primary">save</button>
        </div>
        </div>
    </div>
</div>

</form>
<a href="<?php echo site_url('home/login');?>">login</a>
</body>
</html>
