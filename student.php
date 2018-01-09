<?php
require_once("session.php");
?>
<!doctype html>
<html lang="en">

<head>
    <title>學生郵務系統</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">學生郵務系統</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-row-reverse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="logout.php?logout=true">
                        <i class="fa fa-fw fa-sign-out"></i>Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- <div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-3">Code Name TKUPM</h1>
        <p class="lead">Modern Package Manager for TKU Students !</p>
    </div>
</div> -->
<div class="container">
    <br>
    <div class="card">
        <div class="card-header">
            Package Notify !
        </div>
        <div class="card-body">
            <h5 class="card-title">You've got a new package !</h5>
            <p class="card-text">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>收件人</th>
                    <th>包裹類型</th>
                    <th>包裹編號</th>
                    <th>數量</th>
                    <th>抵達時間</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Test User</td>
                    <td>明信片</td>
                    <td>1004523#s21e4-1s2r27</td>
                    <td>2</td>
                    <td>2018/01/01</td>
                </tr>
                </tbody>
            </table>
            </p>
            <a href="#" class="btn btn-success float-right" data-toggle="modal" data-target="#confirm">Sign it</a>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="confirm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Warning</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                BLAH BLAH BLAH
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-danger">Confirm</button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>