<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact</title>
    </head>
    <body>
        @extends('layout') 
        @section('title', 'Contact') 
        @section('content')

        <h1>Contact form</h1>

        <div id="contact">
            <form action="/contact/send" method="post">
                @csrf
                <input type="text" name="first_name" id="first_name" placeholder="first name">
                <br>
                <input type="submit" value="submit">
            </form>
        </div>
    @endsection
    </body>
</html>