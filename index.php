<?php

require_once("session.php");
require_once("debug.php");
require_once("User.php");
$auth_user = new USER();
if ($_SESSION['level'] == 3) {
    $auth_user->redirect('student.php');
}
//if ($_SESSION['level'] != 1 || $_SESSION['level'] != 2 ) {
//    $auth_user->redirect('index.php');
//}
// $user_id = $_SESSION['user_session'];

// $stmt = $auth_user->runQuery("SELECT * FROM user WHERE id=$user_id");
// $stmt->execute();

// $userRow = $stmt->fetch(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php echo $debugbarRenderer->renderHead() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>學生郵務系統</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<?php include_once('admin_header.php'); ?>
<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-plus" aria-hidden="true"></i>新增包裹
            </div>
            <div class="card-body">
                <form method="POST">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault01">收件人</label>
                            <input type="text" class="form-control" id="validationDefault01" placeholder="收件人" required
                                   name="rcp">
                            <div class="invalid-feedback">
                                Invalid
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault02">包裹類型</label>
                            <input type="text" class="form-control" id="validationDefault02" placeholder="包裹類型"
                                   required name="cat">
                            <div class="invalid-feedback">
                                Invalid
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault04">存放位置</label>
                            <input type="text" class="form-control" id="validationDefault04" placeholder="存放位置"
                                   required name="strg">
                            <div class="invalid-feedback">
                                Invalid
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="validationDefault03">包裹編號</label>
                            <input type="text" class="form-control" id="validationDefault03" placeholder="包裹編號"
                                   name="pid">
                        </div>
                        <!--                        <div class="col-md-3 mb-3">-->
                        <!--                            <label for="validationDefault04">數量</label>-->
                        <!--                            <input type="text" class="form-control" id="validationDefault04" placeholder="數量"-->
                        <!--                                   required>-->
                        <!--                            <div class="invalid-feedback">-->
                        <!--                                Invalid-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <div class="col-md-3 mb-3">
                            <label for="validationDefault05">抵達時間</label>
                            <input type="text" class="form-control" id="validationDefault05" placeholder="抵達時間"
                                   required name="arr_time">
                            <div class="invalid-feedback">
                                Invalid
                            </div>
                        </div>
                    </div>

                    <button class="btn btn-success btn-sm" type="submit" name="add_pkg">送出</button>
                </form>
            </div>
        </div>
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-list" aria-hidden="true"></i>包裹列表
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>收件人</th>
                            <th>包裹類型</th>
                            <th>包裹編號</th>
                            <th>數量</th>
                            <th>已領取</th>
                            <th>已通知</th>
                            <th>抵達時間</th>
                            <th>操作</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Test User</td>
                            <td>明信片</td>
                            <td>1004523#214-1227</td>
                            <td>2</td>
                            <td>N/A</td>
                            <td>N/A</td>
                            <td>2018/01/01</td>
                            <td>
                                <input class="btn btn-info btn-sm" type="button" value="編輯">
                                <input class="btn btn-success btn-sm" type="button" value="簽收">
                                <input class="btn btn-danger btn-sm" type="button" value="刪除">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include_once("footer.php") ?>
</div>
</body>

</html>
