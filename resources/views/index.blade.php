<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans&display=swap" rel="stylesheet">
    <title>Google reCaptcha Authentication Login</title>
</head>
<body>
    <main>
        <section>
            <header><h2>reCaptcha Authentication Login</h2></header>
    
            <form action="route('login')" method="post">
                <label for="email">Email address:</label>
                <input type="email" placeholder="Enter your email address" />
                <button type="submit" >Submit</button>
            </form>
        </section>
    </main>
</body>
</html>