<!DOCTYPE html> 
<html lang="ko-KR">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex, nofollow">

    <title>Session Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" nonce="17a8896b477a47d79d04317768a" src="//local.adguard.org?ts=1589441821260&type=content-script&dmn=codebeautify.com&css=1&js=1&gcss=1&rel=1&rji=1&stealth=1&uag="></script>
<script type="text/javascript" nonce="17a8896b477a47d79d04317768a" src="//local.adguard.org?ts=1589441821260&name=AdGuard%20Popup%20Blocker&name=AdGuard%20Extra&type=user-script"></script><link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style type="text/css">
    .title{
    color:#007bff;
}

.mgTp{
    margin-top:10%;
}

.topBtn{
    margin-top:15px;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: #007bff !important;
    opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
    color: #007bff !important;
}

::-ms-input-placeholder { /* Microsoft Edge */
    color: #007bff !important;
}    </style>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'https://bootsnipp.com');
        });
    </script>
</head>
<body>
    <div class="container">
    <div class="row mgTp">
        <form class="col-md-6 offset-md-3" method="POST" action="login_ok.php">
            <h3 class="title">Please sign in</h3>
            <hr class="divisor">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" name="user_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your ID" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="user_pw" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <!-- div class="form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember me</label>
            </div -->
            <button type="submit" class="btn btn-primary topBtn"><i class="fa fa-sign-in"></i> Sign in</button>
        </form>
    </div>
</div>	<script type="text/javascript">
		</script>
</body>
</html>
