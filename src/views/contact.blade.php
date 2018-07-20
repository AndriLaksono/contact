<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Contact US</title>
    </head>
    <body>
        <h1>Halaman contact</h1>

        <form action="{{ url('contact') }}" method="post">
            <input type="text" name="name" placeholder="Name"><br>
            <input type="email" name="email" placeholder="Email"> <br>
            <textarea name="pesan" rows="8" cols="80" placeholder="Pesan"></textarea> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>
</html>
