<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Space</title>
</head>
<style>
            html, body {
                margin-top: 0;
                background-color: #4ABDAC;
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: bold;
            
                margin: 0;
            }

            h1{
                text-align: center;
                font-size: 75px;
            }
            h2{
                text-align: center;
            }
            .container{ 
                margin-left: 10%;
                display: flex;
                justify-content: center;
                width: 80%;
                height: 60px;
                background-color: #F7B733;
                align-items: center;
                border-radius: 10px;
                
            }
            .cont{
                margin: 30px;
            }
            a{
                text-decoration: none;
                font-size: 20px;
                color: white;
                font-weight: bold;
            }
            a:hover{
                color: #DFDCE3;  
            }
        </style>
<body>
<H1>My Space</H1>
      <h2>what do you want to do?</h2>

        <div class="container">
<div class="cont"> <p><a href="<?php echo route('view')?>">ver</a></p></div>
<div class="cont"> <p><a href="<?php echo route('edit')?>">editar</a></p></div>
<div class="cont"> <p><a href="<?php echo route('new')?>">nuevo</a></p></div>
<div class="cont"> <p><a href="<?php echo route('print')?>">imprimir</a></p></div>

</body>
</html>