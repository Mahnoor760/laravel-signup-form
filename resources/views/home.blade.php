<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOM6zBAb8QT6UuqKA4rvL/F4r5H4mQd84RQJ5iDA" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f2f2f2;
        }

        .form-container {
            font-family: 'Poppins', sans-serif;
            background: repeating-linear-gradient(-45deg, #111, #111 4px, #2a2314 4px, #2a2314 8px);
            padding: 40px 25px;
            border-top: 6px solid #17c0eb;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.1);
            width: 300px;
            border-radius: 10px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .form-container .title {
            color: #fff;
            font-size: 35px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .form-container .create-account {
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            text-transform: capitalize;
            text-align: right;
            margin-bottom: 20px;
        }

        .form-container .create-account a {
            color: #fff;
            transition: all 0.3s ease;
        }

        .form-container .create-account a:hover {
            color: #17c0eb;
        }

        .form-container .form-group {
            background-color: #17c0eb;
            padding: 10px;
            margin-bottom: 25px;
            border-radius: 5px;
            display: flex;
            align-items: center;
        }

        .form-container .input-icon {
            color: #fff;
            font-size: 18px;
            margin-right: 10px;
        }

        .form-container .form-control {
            color: #fff;
            background: transparent;
            font-size: 16px;
            width: calc(100% - 40px);
            padding: 5px;
            border: none;
            outline: none;
        }

        .form-container .form-control::placeholder {
            color: #fff;
            font-size: 16px;
        }

        .form-container .btn {
            color: #fff;
            background: #333;
            font-size: 16px;
            padding: 10px 25px;
            border-radius: 5px;
            border: none;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .form-container .btn i {
            margin-right: 8px;
        }

        .form-container .btn:hover {
            background: #17c0eb;
        }

        .form-container .forgot {
            font-size: 14px;
            color: #fff;
            text-align: right;
        }

        .form-container .forgot a {
            color: #fff;
            transition: all 0.3s ease;
        }

        .form-container .forgot a:hover {
            color: #17c0eb;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h3 class="title">Sign In</h3>
        <form action="{{ url('/') }}/reg" method="post" class="form-horizontal">
            @csrf
            <div class="create-account">
                <a >Create Account</a>
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Username">
            </div>
            <div class="form-group">
                <span class="input-icon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" placeholder="Password">
            </div>
            <input type="submit" class="btn btn-default" class="fa fa-arrow-right" value="Sign In">
            <br>
            <div class="forgot">
                <a href="#">Forgot Password?</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
        integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
