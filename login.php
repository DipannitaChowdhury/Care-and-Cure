
<?php
session_start();

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];
    $password = $_POST["password"];

  

    if ($email == "" || $password == "") {
        $message = "Please fill in all fields.";
    } else {
        $message = "Login information received.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Login | Care and Cure</title>

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
    max-width:900px;
    min-height:560px;
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
    margin-top:115px;
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

.quote{
    margin-top:30px;
    padding-left:15px;
    border-left:3px solid rgba(255,255,255,.5);
    font-size:13px;
    line-height:1.7;
}

.form-section{
    padding:55px 65px;
    display:flex;
    align-items:center;
}

.form-box{
    width:100%;
    max-width:400px;
    margin:auto;
}

.form-box h2{
    font-size:31px;
    margin-bottom:8px;
}

.subtitle{
    color:#718187;
    font-size:14px;
    margin-bottom:32px;
}

.group{
    margin-bottom:20px;
}

label{
    display:block;
    font-size:13px;
    font-weight:bold;
    color:#38565a;
    margin-bottom:8px;
}

.input{
    width:100%;
    padding:15px;
    border:1px solid #dce9e7;
    border-radius:13px;
    outline:none;
    background:#fbfdfc;
    font-size:14px;
}

.input:focus{
    border-color:#2a9d8f;
    box-shadow:0 0 0 3px rgba(42,157,143,.08);
}

.options{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin:-3px 0 23px;
    font-size:12px;
}

.remember{
    display:flex;
    align-items:center;
    gap:7px;
    color:#718187;
}

.remember input{
    accent-color:#2a9d8f;
}

.forgot{
    color:#238b8b;
    text-decoration:none;
}

.login-btn{
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

.login-btn:hover{
    background:#147c78;
}

.message{
    margin-bottom:18px;
    padding:10px;
    border-radius:10px;
    background:#eef9f7;
    color:#147c78;
    font-size:13px;
    text-align:center;
}

.divider{
    display:flex;
    align-items:center;
    gap:12px;
    margin:25px 0;
    color:#a0adaf;
    font-size:11px;
}

.divider:before,
.divider:after{
    content:"";
    flex:1;
    height:1px;
    background:#e5eeee;
}

.signup{
    text-align:center;
    color:#718187;
    font-size:13px;
}

.signup a{
    color:#238b8b;
    font-weight:bold;
    text-decoration:none;
}

@media(max-width:750px){

    .container{
        grid-template-columns:1fr;
    }

    .welcome{
        min-height:280px;
        padding:32px;
    }

    .welcome-content{
        margin-top:50px;
    }

    .welcome h1{
        font-size:32px;
    }

    .quote{
        display:none;
    }

    .form-section{
        padding:40px 25px;
    }
}

</style>

</head>

<body>

<div class="container">

<section class="welcome">

<div class="logo">
Care <span>and Cure</span>
</div>

<div class="welcome-content">

<div class="tag">
WELCOME BACK
</div>

<h1>
Care is<br>
always closer.
</h1>

<p>
Sign in to continue exploring healthcare,
accessibility and assistance services
through Care and Cure.
</p>

<div class="quote">
“Because finding the right care
should never feel complicated.”
</div>

</div>

</section>


<section class="form-section">

<div class="form-box">

<h2>Welcome back</h2>

<p class="subtitle">
Sign in to your Care and Cure account.
</p>

<?php if($message != ""): ?>

<div class="message">
<?php echo $message; ?>
</div>

<?php endif; ?>


<form method="POST" action="">

<div class="group">

<label>Email Address</label>

<input
class="input"
type="email"
name="email"
placeholder="you@example.com"
required
>

</div>


<div class="group">

<label>Password</label>

<input
class="input"
type="password"
name="password"
placeholder="Enter your password"
required
>

</div>


<div class="options">

<label class="remember">

<input type="checkbox">

Remember me

</label>

<a href="#" class="forgot">
Forgot password?
</a>

</div>


<button
type="submit"
class="login-btn"
>
Sign In →
</button>

</form>


<div class="divider">
OR
</div>


<div class="signup">

Don't have an account?

<a href="signup.php">
Create one
</a>

</div>

</div>

</section>

</div>

</body>

</html>
