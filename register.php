<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Catatan Perjalanan - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/register.css" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    

<style>
   .btn{
    border-radius: 45px;
    border:none;
    box-shadow: 0px 0px 15px
        rgba(0, 0, 0, 0.1);
    transition: all 0.3ms ease;
    letter-spacing: 2px;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 45px;
    font-weight: bold;

}

.btn:hover{
    background: #2ceae5;
    transform: translateY(-7px);
    color: #fff;
    box-shadow: 0px 10px 25px
        rgba(46, 223, 229, 0.445);
}


</style>
</head>

<body background="image/perjalanan.jpg">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                           
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Aplikasi Peduli Diri - Register</h1>
                                        <p>Masukan Nama Dan NIK</p>
                                    </div>
                                    <form class="user" method="post" action="proses_register.php">
                                        <div class="form-group">
                                            <input  onkeypress="return event.charCode < 48 || event.charCode > 57"name="nama" required type="text" class="form-control form-control-user"
                                                id="exampleInputEmail"
                                                placeholder="Masukan Nama...">
                                        </div>
                                        <div class="form-group">
                                            <input minlength="16" maxlength="16" onkeypress="return event.charCode >= 48 && event.charCode <=57" name="nik" type="text" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Masukan NIK...">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-user btn-block">
                                           <i class="fa fa-spinner"></i> Register
                                        </button>
                                        <hr>
                                        <a href="index.php" class="btn btn-user btn-block">
                                        <i class="fa fa-arrow-left fa-fw"></i> Back
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>