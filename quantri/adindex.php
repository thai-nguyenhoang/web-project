<?php
include '../connect.php';
$query  = "SELECT * FROM thanhvien";
$result = $pdh->query($query);

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Admin</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="css/style_slide.css" rel="stylesheet" type="text/css"/>
        <link rel="shortcut icon" type="image/x-icon" href="../public/logo/Prepaidgamecards-Gaming-Gadgets-Nintendo-3DS.ico" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
        <link rel="stylesheet" href="../css/uniform.css" />
        <link rel="stylesheet" href="../css/select2.css" />
        <link rel="stylesheet" href="../css/matrix-style.css" />
        <link rel="stylesheet" href="../css/matrix-media.css" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
        <link href="css/style_1.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <div class="container">
 <div class="row">
  <h1 class="text-center">Cách thiết kế giao diện trang Admin List bằng Bootstrap</h1>
  <div class="col-md-10 col-md-offset-1">
   <div class="panel panel-default panel-table">
    <div class="panel-heading">
     <div class="row">
      <div class="col col-xs-6">
       <h3 class="panel-title">Danh sách khách hàng</h3>
      </div>
      <div class="col col-xs-6 text-right">
       <button type="button" class="btn btn-sm btn-primary btn-create">Thêm mới</button>
      </div>
     </div>
    </div>
    <div class="panel-body">
     <table class="table table-striped table-bordered table-list" border="1">
      <thead>
       <tr>
        <th><em class="fa fa-cog"></em>
        </th>
        <th class="hidden-xs">Mã số</th>
        <th>Họ tên</th>
        <th>Email</th>
       </tr>
      </thead>
      <tbody>
<?php foreach ($result as $list) {?>
	           <tr>
	       <td align="center"><a class="btn btn-default"><em class="fa fa-pencil"></em></a> <a class="btn btn-danger"><em class="fa fa-trash"></em></a>
	       </td>
	       <td class="hidden-xs"><?php echo $list["memberID"];?></td>
	       <td><?php echo $list["username"];?></td>
	       <td><?php echo $list["email"];?></td>
	      </tr>
	<?php }?>

     </tbody></table>
    </div>
    <div class="panel-footer">
     <div class="row">
      <div class="col col-xs-4">Trang 1 của 5 </div>
      <div class="col col-xs-8">
       <ul class="pagination hidden-xs pull-right">
        <li><a href="#">1</a>
        </li>
        <li><a href="#">2</a>
        </li>
        <li><a href="#">3</a>
        </li>
        <li><a href="#">4</a>
        </li>
        <li><a href="#">5</a>
        </li>
       </ul>
       <ul class="pagination visible-xs pull-right">
        <li><a href="#">«</a>
        </li>
        <li><a href="#">»</a>
        </li>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
</div>

    </body>
</html>