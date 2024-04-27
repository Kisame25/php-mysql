<?php
    $url = parse_url($_SERVER['REQUEST_URI'])['path'];

    // url route
    $route = [
        '/' => 'controllers/index.php',
        '/about' => 'controllers/about.php',
        '/contact' => 'controllers/contact.php',
        '/auth' => 'controllers/auth/index.php',
        '/dashboard' => 'controllers/dashboard/index.php',
        '/blog' => 'controllers/blog/index.php',
    ];

    function abort($code = 404,$message = 'Sorry Page Not Found.',$titme_message="Not Found"){
        http_response_code($code);
        $title = "$code-$titme_message";
        require './views/404.php';
        exit();
    }

    function IsRoute($url,$route){
        if(array_key_exists($url, $route)){
            require $route[$url];
        }else{
            abort();
        }
    }

    IsRoute($url,$route);
?>