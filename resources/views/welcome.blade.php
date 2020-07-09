<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
        <title>PIDATA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h1{
                text-align: center;
                font-size: 75px;
            }
            h2{
                text-align: center;
            }
        </style>
    </head>
    <body>
      <H1>WELCOME TO PIDATA</H1>
      <h2>In this site you can organizated all your data </h2>
      <p><a href="<?php echo route('about')?>">About us</a></p>
      <p><a href="<?php echo route('history')?>">History</a></p>
      <p><a href="<?php echo route('object')?>">objetivos</a></p>
      <p><a href="<?php echo route('mision')?>">mision</a></p>
      <p><a href="<?php echo route('vision')?>">vision</a></p>
      <p><a href="<?php echo route('inspire')?>">Nuestra inspiración</a></p>
    </body>
</html>
