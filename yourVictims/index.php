<?php 
$dirs = array_filter(glob('*'), 'is_dir');?>
<!DOCTYPE html>
<html><head><style>
table {font-family: arial, sans-serif;border-collapse: collapse;width: 100%;}
td, th {border: 1px solid #dddddd;text-align: left;padding: 8px;}
</style>
</head>
<body>
<h2>Your victims</h2>
<table>
  <tr>
    <th style="background-color: #dddddd;">Users</th>
  </tr>    
  
<?php $count = 1;
      foreach($dirs as $dir){
?>  
<tr>
    <td><b><a href='<?php echo $dir; ?>'><?php echo $dir; ?></a></b></td>
</tr>
<?php $count++; } 
?>
</table>
</body>
</html>

