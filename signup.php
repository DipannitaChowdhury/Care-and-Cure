<?php
// Sign Up page
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | Care and Cure</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            min-height:100vh;
            background:#f4faf8;
            display:flex;
            justify-content:center;
            align-items:center;
            padding:25px;
            color:#183236;
        }

        .container{
            width:100%;
            max-width:950px;
            background:white;
            border-radius:28px;
            overflow:hidden;
            display:grid;
            grid-template-columns:42% 58%;
            box-shadow:0 20px 60px rgba(20,124,120,.12);
        }

        .welcome{
            background:linear-gradient(145deg,#147c78,#2a9d8f);
            color:white;
            padding:45px;
        }

        .logo{
            font-size:24px;
            font-weight:bold;
        }

        .logo span{
            color:#dffff8;
        }

        .welcome-content{
            margin-top:100px;
        }

        .tag{
            font-size:11px;
            letter-spacing:2px;
            margin-bottom:18px;
        }

        .welcome h1{
            font-size:40px;
            line-height:1.15;
            margin-bottom:18px;
        }

        .welcome p{
            font-size:14px;
            line-height:1.8;
            color:#e3f7f3;
        }

        .features{
            margin-top:30px;
            display:flex;
            flex-direction:column;
            gap:13px;
        }

        .feature{
            display:flex;
            align-items:center;
            gap:12px;
            font-size:13px;
        }

        .feature-icon{
            width:35px;
            height:35px;
            border-radius:11px;
            background:rgba(255,255,255,.15);
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:17px;
        }

        .form-section{
            padding:45px 60px;
        }

        .form-box{
            width:100%;
            max-width:440px;
            margin:auto;
        }

        .form-box h2{
            font-size:30px;
            margin-bottom:8px;
        }

        .subtitle{
            color:#718187;
            font-size:14px;
            margin-bottom:28px;
        }

        .row{
            display:grid;
            grid-template-columns:1fr 1fr;
            gap:14px;
        }

        .group{
            margin-bottom:17px;
        }

        label{
            display:block;
            font-size:13px;
            font-weight:bold;
            color:#38565a;
            margin-bottom:7px;
        }

        .input{
            width:100%;
            padding:13px 14px;
            border:1px solid #dce9e7;
            border-radius:12px;
            outline:none;
            background:#fbfdfc;
            font-size:14px;
        }

        .input:focus{
            border-color:#2a9d8f;
            box-shadow:0 0 0 3px rgba(42,157,143,.08);
        }

        .terms{
            display:flex;
            gap:9px;
            color:#718187;
            font-size:12px;
            line-height:1.5;
            margin:3px 0 20px;
        }

        .terms input{
            accent-color:#2a9d8f;
        }

        .terms a{
            color:#238b8b;
        }

        .create{
            width:100%;
            padding:15px;
            border:none;
            border-radius:13px;
            background:#2a9d8f;
            color:white;
            font-size:15px;
            font-weight:bold;
            cursor:pointer;
        }

        .create:hover{
            background:#147c78;
        }

        .login{
            text-align:center;
            color:#718187;
            font-size:13px;
            margin-top:20px;
        }

        .login a{
            color:#238b8b;
            font-weight:bold;
        }

        @media(max-width:750px){

            .container{
                grid-template-columns:1fr;
            }

            .welcome{
                padding:32px;
            }

            .welcome-content{
                margin-top:45px;
            }

            .features{
                display:none;
            }

            .form-section{
                padding:35px 25px;
            }
        }

        @media(max-width:500px){

            .row{
                grid-template-columns:1fr;
            }

            .welcome h1{
                font-size:30px;
            }

            .form-section{
                padding:30px 20px;
            }
        }
    </style>
</head>

<body>

<div class="container">

    <!-- LEFT SIDE -->

    <section class="welcome">

        <div class="logo">
            Care <span>and Cure</span>
        </div>

        <div class="welcome-content">

            <div class="tag">
                CARE • ACCESS • ASSISTANCE
            </div>

            <h1>
                Your care,<br>
                your way.
            </h1>

            <p>
                Join Care and Cure to discover healthcare,
                accessibility and assistance services made
                easier for everyone.
            </p>

            <div class="features">

                <div class="feature">
                    <div class="feature-icon">♿</div>
                    <span>Accessibility-focused services</span>
                </div>

                <div class="feature">
                    <div class="feature-icon">🚑</div>
                    <span>Emergency & ambulance support</span>
                </div>

                <div class="feature">
                    <div class="feature-icon">❤️</div>
                    <span>Care designed for everyone</span>
                </div>

            </div>

        </div>

    </section>


    <!-- SIGN UP FORM -->

    <section class="form-section">

        <div class="form-box">

            <h2>Create your account</h2>

            <p class="subtitle">
                Start your journey with Care and Cure.
            </p>

            <form>

                <div class="row">

                    <div class="group">
                        <label>First Name</label>
                        <input class="input"
                               type="text"
                               placeholder="First name"
                               required>
                    </div>

                    <div class="group">
                        <label>Last Name</label>
                        <input class="input"
                               type="text"
                               placeholder="Last name"
                               required>
                    </div>

                </div>


                <div class="group">
                    <label>Email Address</label>
                    <input class="input"
                           type="email"
                           placeholder="you@example.com"
                           required>
                </div>


                <div class="group">
                    <label>Phone Number</label>
                    <input class="input"
                           type="tel"
                           placeholder="+880 1XXXXXXXXX"
                           required>
                </div>


                <div class="group">
                    <label>Password</label>
                    <input class="input"
                           type="password"
                           placeholder="Create a password"
                           required>
                </div>


                <div class="terms">

                    <input type="checkbox" required>

                    <div>
                        I agree to the
                        <a href="#">Terms of Service</a>
                        and
                        <a href="#">Privacy Policy</a>.
                    </div>

                </div>


                <button class="create" type="submit">
                    Create My Account →
                </button>

            </form>


            <div class="login">
                Already have an account?
                <a href="#">Log In</a>
            </div>

        </div>

    </section>

</div>

</body>
</html>
