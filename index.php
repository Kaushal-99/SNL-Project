<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="assets/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Parking Reservation System</title>
</head>

<body>
    
    <div class="container ">
        <div class="row header">

            
            <div class="text-center titlediv">
                <h1 id="title">Parking Reservation System</h1>
            </div>
        </div>
    </div>


    <div style="max-width: 500px;" class="add-box container" id="enter">
        <div>
            <h1 class="text-center">Login</h1>
        </div>
        <div class="container">

            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="username" placeholder="username" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" id="password" placeholder="password" required>
            </div>


            <button style="margin-left:40%;" type="submit" onclick="" class="btn btn-success">login</button>
            <div class="form-group">
                Have'nt registered yet? <a href="register.php">Click here to Register</a>
                
            </div>
        </div>

    </div>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->
    <script src="assets/jquery.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
    <script>
        $(document).ready(function () {
            $("#enter").keypress(function (event) {
                console.log(event.keyCode);
                if(event.keyCode == 13){
                    login();
                }
            });
        });
    </script>
</body>

</html>