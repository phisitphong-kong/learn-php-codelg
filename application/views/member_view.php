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
        <h4>Show member</h4>
        <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>image</th>
                <th>position</th>
                <th>name</th>
                <th>lastname</th> 
                <th>datatime</th>
                <th>edit</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($query as $rs) {?>
            <tr>
                <td><?php echo $rs->m_id;?></td>
                
                <td><img src="<?php echo base_url('img');?>/<?php echo $rs->m_img;?>" width="100px"></td>
                <td><?php echo $rs->pname;?></td>
                <td><?php echo $rs->m_name;?></td>
                <td><?php echo $rs->m_lname;?></td>
                <td><?php echo $rs->m_datesave;?></td>
                <td><a href="<?php echo site_url('insertdata/edit/').$rs->m_id;?>">edit</a></td>
                <td><a href="<?php echo site_url('insertdata/delete/').$rs->m_id;?>" onclick="return confirm('ยืนยัน');">delete</a></td>
                
            </tr>
            <?php }?>
        </tbody>
        </table>
  

</body>
</html>
