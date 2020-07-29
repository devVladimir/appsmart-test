<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>AppSmart Product Search App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                min-height: 100vh;
            }

            .mt-20 {
                margin-top: 2rem;
            }

            form {
                width: 100%;
            }
            .form-group {
                display: flex;
                justify-content: space-between;
            }
            .form-group input {
                margin-right: 2rem;
            }
            .product-img {
                max-height: 10rem;
                max-width: 10rem;
            }
            .image {
                height: 10rem;
                width: 10rem;
                background: lightblue;
                display: flex;
                align-items: center;
                justify-content: center;
            }
            th {
                text-align: center;
            }
            td{
                padding-right: 1rem;
            }
            tr {
                min-height: 20rem;
                padding-bottom: 2rem;
            }
        </style>
    </head>
    <body>