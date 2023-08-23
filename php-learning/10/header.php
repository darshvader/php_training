<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        box-sizing: border-box;
        padding: 0;
        margin: 0;
    }
    .navLinks {
        background-color: black;
        padding: 2rem;
    }

    .navLinks ul {
        display: flex;
        justify-content: center;
        gap: 2rem;
    }

    a {
        text-decoration: none;
        color: white;
    }

    li {
        list-style: none;
    }
    li:hover a{
   color: red;
    }
</style>

<body>
    <nav class="navLinks">
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Testimonials</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Alumni</a></li>
            <li><a href="">Contact Us</a></li>
        </ul>
    </nav>
</body>

</html>