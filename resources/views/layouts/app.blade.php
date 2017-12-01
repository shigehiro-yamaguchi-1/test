<?php
/**
 * Created by PhpStorm.
 * User: yamaguchi
 * Date: 2017/11/30
 * Time: 14:53
 */
?>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Management-Vue.js</title>

    <link rel="stylesheet" href="css/app.css">

    <script>
        window.Laravel = {};
        window.Laravel.csrfToken = "{{ csrf_token() }}";
    </script>
</head>
<body>
<div id="app">
    <example></example>
</div>
</body>

<script src="js/app.js"></script>
</html>