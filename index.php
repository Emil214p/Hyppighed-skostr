<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Skostørrelser</h2>
                    </div>
                    <p>Udfyld her for at give dine informationer.</p>
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label>Navn</label>
                            <input type="text" name="Navn" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Alder</label>
                            <input type="text" name="Alder" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Skostørrelse</label>
                            <input type="text" name="Skostoerelse" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-primary" name="submit" value="Indsend">
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>