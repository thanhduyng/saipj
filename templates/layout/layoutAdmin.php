<?php
$cakeDescription = 'Admin';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="wrapper">

<nav>
    <header>
        <span></span>
       ThanhND
        <a></a>
    </header>
    <ul>
        <li><span>Navigation</span></li>
        <li><a class="active">Dashboard</a></li>
        <li><a href="/users">Users</a></li>
        <li><a>Roadmap</a></li>
        <li><a>Milestones</a></li>
        <li><a>Tickets</a></li>
        <li><a>GitHub</a></li>
        <li><a>FAQ</a></li>
    </ul>
</nav>
<main>
<h1></h1>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</main>
</body>
</html>
