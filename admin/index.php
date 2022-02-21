


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trandy Mania | Sign In</title>

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&display=swap" rel="stylesheet" />  
    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }

        body, input{
            font-family: 'Poppins', sans-serif;
        }

        #form-main-wrapper{
            width:100%;
            height:100vh;
            background:#8A39E1;
            display:flex;
            justify-content:center;
            align-items:center;
        }

        .form-container{
            width:450px;
            padding:20px 15px;
            /* border:1px solid red; */
            
        }
        
        .admin-avtar img{
            width:35px;
            height:auto;
        }

        .admin-avtar{
            text-align:center;    
            margin-bottom:20px;
            display:flex;
            align-items:center;
            justify-content:center;
        }

        .admin-avtar h1 {
            font-size: 28px;
            font-weight: 400;
            margin-left: 15px;
            color:#fff;
        }

        .signin-status{
            width:100%;
            background-color:orange;
            padding:15px 10px;
            border-radius:3px;
            margin-bottom:25px;
        }

        .form-con label{
            display:block;
            font-weight:500;
            margin-bottom:5px;
        }

        .form-con input {
            width: 100%;
            font-size: 16px;
            padding: 5px 10px;
            font-weight: 400;
            outline:none;
            /* border:1px solid #fff;
            background-color:#fff; */
        }

        label[for="rem-me"] {
            margin-bottom: 0px;
        }

        .field-con {
            margin-bottom: 20px;
        }
        
        .field-con:last-child {
            margin-bottom: 0px;
        }

        .flex{
            display:flex;
        }

        .form-btn-con input{
            display:inline-block;
            width:unset;
        }

        .remember-me{
            display:block;
            width:100%;
            display:flex;
            align-items:center;
            
        }

        .form-btn-con input[type=checkbox]{
            margin-right:10px;
        }

        .form-con{
            /* border:1px solid red; */
        }
        
        .add-links{
            margin-top:50px;
        }

        .add-links a{
            display:block;
            margin:10px 0;
            font-size:14px;
            color:#fff;
        }

        .form{
            background:#fff;
            padding:40px 30px;
            box-shadow: 0px 16px 40px rgba(0, 0, 0,0.25);
        }

        .d-none{
            display:none;
        }

        .form-submit {
            background-color: #8A39E1;
            border: none;
            color: #fff;
            padding: 8px 30px !important;
            border:2px solid transparent;
            font-weight:500 !important;
            transition: 300ms ease-in-out;
            cursor:pointer;
        }

        .form-submit:hover{
            background-color:#fff;
            border:2px solid #8A39E1;
            color:#8A39E1;
        }

        @media screen and (max-width:576px){
            .flex.form-btn-con {
            flex-direction: column;
            }

            .sub-btn-wrap {
                text-align: center;
                margin-top: 25px;
            }

            .form {
                padding: 40px 20px;
            }

            .admin-avtar h1 {
                font-size: 25px;
            }
        }
    </style>
</head>
<body>
    <div id="form-main-wrapper">
        <div class="form-container">
            <div class="admin-avtar">
                <img src="img/key-chain.png" />
                <h1>Admin Sign In</h1>
            </div>

            <div class="signin-status d-none">
                <p id="status-desc">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
            </div>

            

            <div class="form-wrapper">
                <div class="form-con form">
                    <form action="" method="POST">
                        <div class="field-con">
                            <label for="email">Email: </label>
                            <input type="email" id="email" name="usr-email" required="required" autofocus />
                        </div>
                        <div class="field-con">
                            <label for="passkey">Password: </label>
                            <input type="password" id="passkey" name="usr-passkey" required="required" />
                        </div>

                        <div class="flex form-btn-con">
                            <span class="remember-me">
                                <input type="checkbox" name="remember-me" id="rem-me" /> <label for="rem-me"><span>Remember Me</span></label>
                            </span>

                            <div class="sub-btn-wrap">
                                <input type="submit" class="form-submit" value="Sign In" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            
            <div class="form-con add-links">
                <a href="admin-forget-password.php" title="">Forget password?</a>
                <a href="#" title="Back to trendy mania">Back to Site</a>
            </div>
        </div>


    </div>
</body>
</html>