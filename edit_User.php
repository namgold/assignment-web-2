<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" href="css/xi-custom.css">
    <title>Sportify - About us</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar header-bar ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand ml-2" href="index.html">Sportify</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active mr-3"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item mr-3"><a href="shop-man.html" class="nav-link">Shopping</a></li>
                    <li class="nav-item mr-3"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item cta cta-colored mr-3"><a href="cart.html" class="nav-link"><span
                                class="icon-shopping_cart"></span>[0]</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');"> -->
    <div class="container" style="padding-top: 100px">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <h1 class="mb-0 bread">Quản lý người dùng</h1>
            </div>
        </div>
    </div>
    <!-- </div> -->

    <div id="show"></div>
    <br>

    <div id='edit-div' style='display:none ; text-align: center; min-height:500px'>
        <br>
        <div style="padding-bottom: 2%">Edit User</div>
        <input id = 'id' type = 'hidden'>
        <div style="padding-right: 2%; display: inline"><input id='username' placeholder='xi' readonly></div>
        <label style="padding-bottom: 2%;padding-right: 2%"><input id='status' type="checkbox" class="radio" value="1" />Active</label>
        <label style="padding-bottom: 2%;padding-right: 2%"><input id='role' type="checkbox" class="radio" value="1" />Admin</label>

        <button id='btn-save' class='btn-show btn btn-success'>Save</button>
    </div>




    <footer class="footer-area ftco-footer ftco-section mt-4">
        <div class="container">
            <div class="row">
                <div class="mouse">
                    <a href="#" class="mouse-icon">
                        <div class="mouse-wheel"><span class="ion-ios-arrow-up"></span></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-end">
            <div class="col-md-12 text-center">
                <p>
                    Đại học Bách Khoa - Khoa Khoa học Kỹ thuật máy tính
                </p>
                <p>
                    Lập trình web - Lớp L02
                </p>
            </div>
        </div>
        </div>
    </footer>



    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>

    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/scrollax.min.js"></script>
    <script src="js/google-map.js"></script>
    <script src="js/main.js"></script>

    <script>
        $(document).ready(function () {
            $.ajax({
                type: 'GET',
                url: 'RestController.php?action=getall',
            }).done(function (response) {
                var res = $.parseJSON(response);
                if (res["status"] == "200 OK") {
                    var txtStr = '';

                    for (var i = 0; i < res["data"].length; i++) {
                        let active = 'Active';
                        let role = "";
                        if (res["data"][i]["active"] == 0) {
                            active = "";
                        }
                        if (res["data"][i]["role"] == 1) {
                            role = "Admin";
                        }
                        txtStr = txtStr + '<tr id =' + res["data"][i]["id"] + ' displayname =' + res["data"][i]["displayname"] + ' status =' + res["data"][i]["active"] + ' isadmin =' + res["data"][i]["role"] + '>\
                <td>' + res["data"][i]["id"] + '</td>\
                <td>' + res["data"][i]["username"] + '</td>\
                <td>' + res["data"][i]["displayname"] + '</td>\
                <td>' + active + '</td>\
                <td>' + role + '</td>\
                <td> <button id ="'+ res["data"][i]["id"] + '" class="btn-delete">Delete</button>\
                <button id ="'+ res["data"][i]["id"] + '" class="btn-edit">Edit</button>\
                </td>\
                <tr>';
                    }
                    if (txtStr != null && txtStr != '') {
                        txtStr = "<table style='width:25%; background-color:#0001 '; border='1';> <tr><th>ID</th><th>User Name</th><th>Display Name</th><th>Status</th><th>IsAdmin</th></tr>" + txtStr + '</table>';
                    }
                    $("#show").html(txtStr);

                    $('.btn-delete').click(function () {
                        var id = $(this).closest('tr').attr('id');
                        $.ajax({
                            url: 'RestController.php?action=delete',
                            type: 'POST',
                            data: {
                                id: id,
                            }
                        }).done(function () {
                            alert("Delete Success!");
                            location.reload(true);
                        })
                    })


                    $('.btn-edit').click(function () {  
                        $('#id').val($(this).closest('tr').attr('id'));                                             
                        $('#username').val($(this).closest('tr').attr('username'));
                        if ($(this).closest('tr').attr('status') == 1) {
                            $('#status').props(checked);
                        }
                        if ($(this).closest('tr').attr('role') == 1) {
                            $('#role').props(checked);
                        }

                        $('#edit-div').css('display', '');
                    })

                }
            });
        })

        $('#btn-save').click(function () {
            var id = $("#id").val();
            var status = $("#status").val();
            var role = $("#role").val();
           
            $.ajax({
                url: 'tinHieu<3.php',
                type: 'POST',
                data: {
                    id: id,
                    status: status,
                    role: role
                }
            }).done(function () {
                location.reload(true);
            })
        
        })
    </script>
</body>

</html>