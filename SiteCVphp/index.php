<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php
        include 'header.php'
        ?>
    </header>
    <nav>
        <?php
        include 'identite.php';
        include 'experience.php';
        include 'formation.php';
        include 'langues.php';
        include 'informatique.php';
        include 'divers.php';
        include 'footer.php'; ?>
    </nav>
    <article class="article">
        <h1>Descriptif</h1>
        <button>Commencer</button>
    </article>