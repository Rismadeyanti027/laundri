<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Form Tambah Outlet</title>
            <link rel="stylesheet" href="bootstrap-4.3.1-dist/css/bootstrap.css">
            <style type="text/css">
                 body{
                    background-image:url('gray.jpg') ;
                }
            </style>
        </head>
        <body class="container mt-5">
        <div class="card bg-secondary text-light">
                <div class="card-header">
                    <h2>Form Tambah Outlet</h2>
                </div>
                <div class="card-body">
                    <form action="Tambah_Outlet.php" method="POST">
                <div class="form-group">
                    <label class="label-control">Nama </label> 
                    <input class="form-control" type="text" name="nama" placeholder="Nama" required>
                </div>
                <div class="form-group">
                    <label class="label-control">Alamat</label> 
                    <input class="form-control" type="text" name="alamat" placeholder="alamat" required>
                </div>
                <div class="Form-group" >
                    <label class="label-control">Tlp</label> 
                    <input class="form-control" type="text" name="tlp" placeholder="Tlp" required>
                </div>
               <br>
                <button class="btn btn-warning" type="submit">Tambah</button>   
            </form>
        </div>
        </div>
        </div>
        </body>
