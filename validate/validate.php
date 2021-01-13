<!DOCTYPE html>

<head>
	<?php
	require_once '../validate/block_io.php';
	$apiKey = "b5a1-82e8-d76d-0cbc";
	$version = 2;
	$pin = "23091998";
	$block_io = new BlockIo($apiKey, $pin, $version);
	 ?>
    <title>Block.io: Bitcoin API and More</title>

    <meta charset="utf-8">
    <meta name="author" content="Block.io">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
    <link rel="icon" type="image/png" href="/favicon-196x196.png" sizes="196x196">
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="icon" type="image/png" href="/favicon-128.png" sizes="128x128">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <meta name="application-name" content="Block.io">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="/mstile-144x144.png">
    <meta name="msapplication-square70x70logo" content="/mstile-70x70.png">
    <meta name="msapplication-square150x150logo" content="/mstile-150x150.png">
    <meta name="msapplication-wide310x150logo" content="/mstile-310x150.png">
    <meta name="msapplication-square310x310logo" content="/mstile-310x310.png">
    <meta name="authenticity-token" id="authenticity-token" content="O/hmy0S77UoG4dU0A07Iwcvn7054pSE7SWQcYL0hY1s=">

    <link rel="stylesheet" type="text/css" media="screen" href="/css/reset.css">
    <link href="/css/font-awesome.min.css?mtime=1418552811" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="screen" href="/fonts/fira.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/screen-base.css">
    <link rel="stylesheet" href="/css/prism.css?mtime=1421370737">
    <link media="screen and (min-width: 0em) and (max-width: 43.6875em)" href="/css/small.css" rel="stylesheet">
    <link media="screen and (min-width: 43.75em) and (max-width: 64.9375em)" href="/css/medium.css" rel="stylesheet">
    <link media="screen and (min-width: 65em)" href="/css/large.css" rel="stylesheet">


    <link href="/css/readable-bootstrap.min.css" rel="stylesheet">
    <link href="/css/blockio.css?mtime=1531091733" rel="stylesheet">
    <link href="/text-security/text-security-disc.min.css" rel="stylesheet">

    <meta content="authenticity_token" name="csrf-param">
<meta content="O/hmy0S77UoG4dU0A07Iwcvn7054pSE7SWQcYL0hY1s=" name="csrf-token">

<script src="/js/zxcvbn.min.js" type="text/javascript" async=""></script><script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/api2/v1552285980763/recaptcha__id.js"></script><script>
      function recaptchaFormSubmitter() {
    var form = document.getElementById("new_user");
    $(form).submit();
    grecaptcha.reset();
      }
</script>  </head>
<body id="top">
<div class="panel panel-default">
<form action="/api/v2/is_valid_address" method="get" id="fddd0044450466af" class="api-form text-center" style="width: 50%;" prog-lang="curl" api-call="is_valid_address" version="2" novalidate="novalidate">
	  <p class="text-left">API KEY:
	    <input type="text" name="api_key" placeholder="api_key" class="form-control"> (Your API Keys are in your <a href="/dashboard" target="_blank" rel="noreferrer">Wallet</a>)
	  </p>
	  <p class="text-left">
	    ADDRESS: <input type="text" name="address" placeholder="address" value="" class="form-control">
	  </p>
	  <p class="text-left"><button type="submit" class="btn btn-md btn-success api-submit submitter-fddd0044450466af">Go!</button></p>
</form>
</div>
</body>
