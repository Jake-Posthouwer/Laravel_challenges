<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About</title>
    </head>
    <body>
        @extends('layout')
        @section('title', 'About')
        <h1>About</h1>
        <ul>
            <li>
                <a href="/">Home</a>
            </li>
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/work">Work</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </body>
</html>