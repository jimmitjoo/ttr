<!doctype html>
<!---

      ,--.         ,--, ,------.    ,------. ,------. ,------.
      \   \       /   / |  .---'   |  .--.  ||  .--. '|  .---'
       \   \ '--'/   /  |  `--,    |  '--'  ||  '--'.'|  `--,
        \    '--'   /   |  `---.   |  .--.  ||  |\  \ |  `---.
         '--'   '--'    `------'   '--'  '--'`--' '--'`------'


      ,------. ,--.  ,--.,--.  ,--.,--.  ,--.,--.,--.  ,--. ,----.
      |  .--. ''  |  |  '|  ,'.|  ||  ,'.|  ||  ||  ,'.|  |'  .-./
      |  '--'.'|  |  |  ||  |' '  ||  |' '  ||  ||  |' '  ||  | .---.
      |  |\  \ '  '--'  '|  | `   ||  | `   ||  ||  | `   |'  '--'  |
      `--' '--' `------' `--'  `--'`--'  `--'`--'`--'  `--' `------'

  -->
<html lang="sv" ng-app="ttr">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('description')">

    <link rel="canonical" href="@yield('current_url')" />

    <meta property="og:site_name" content="Timetorun.se"/>
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="@yield('current_url')" />
    <meta property="og:description" content="@yield('description')" />
    <meta property="fb:app_id" content="{{ getenv('FACEBOOK_CLIENT') }}" />
    <meta property="og:locale" content="sv_SE" />
    <meta property="og:image" content="@yield('share_image')" />

    <link rel="icon" type="image/png" href="/images/favicon.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/images/favicon-114x114.png" />

    <!-- GWT -->
    <meta name="google-site-verification" content="gpSKbUAhIIpQ83Ht6Z-eK9hMP7CsXbuudtyiqnLMuaA" />
    
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,300,500,700,900">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,900,700,500,300,100">
    <link rel="stylesheet" href="{{ elixir("css/build.css") }}" >

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
</head>
<body>