<!DOCTYPE html>
<html>

<head>
    <title>My blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="/css/jquery.datetimepicker.min.css">
<link rel="stylesheet" href="/css/styles.css">
</head>

<body>

    <div class="container">

        <header>
            <h1>My blog</h1>
        </header>

        <nav>
            <ul class="nav">
                <li class="nav-item"><a class="nav-link" href="<?php __DIR__?>./">Home</a></li>

                <?php if (Auth::isLoggedIn()) : ?>

                <li class="nav-item"><a class="nav-link" href="<?php __DIR__?>./admin/">Admin</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php __DIR__?>./logout.php">Log out</a></li>

                <?php else : ?>

                <li class="nav-item"><a class="nav-link" href="<?php __DIR__?>./login.php">Log in</a></li>

                <?php endif; ?>

                <li class="nav-item"><a class="nav-link" href="<?php __DIR__?>./contact.php">Contact</a></li>
            </ul>
        </nav>

        <main>