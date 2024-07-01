<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.10.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= 'Gerenciador de Carros' ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css(['https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css']) ?>
    <?= $this->Html->css(['normalize.min', 'fonts', 'cake']) ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        .navbar {
            font-size: 1.5rem;
            padding: 1rem 1.5rem;
            background-color: #f1e6e6 !important;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
        }
        .navbar-brand span {
            color: #D33F49;
            font-size: 1.6rem;
            font-weight: bold;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #D33F49;
            font-weight: bold;
            font-size: 1.2rem;
            transition: color 0.5s;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #512500;
        }
        .main {
            flex: 1;
        }
        .btn-bordo {
            background-color: #ab2a34;
            color: white;
            font-weight: bold;
            border-radius: 0.25rem;
        }
        .btn-bordo:hover {
            background-color: #673542;
            color: white;
        }
        .footer {
            background-color: #f1e6e6;
            color: #5E6572;
            border-top: 1px solid #e9ecef;
            padding: 1rem 0;
            box-shadow: 0 5px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Gerenciador de <span>Carros</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <?= $this->Html->link('Home', ['controller' => 'pages', 'action' => 'home'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Clientes', ['controller' => 'cliente', 'action' => 'index'], ['class' => 'nav-link']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Carros', ['controller' => 'carro', 'action' => 'index'], ['class' => 'nav-link']) ?>
            </li>
        </ul>
    </div>
</nav>

<main class="main">
    <div class="container mt-4">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
<footer class="footer text-center">
    <div class="container">
        <span>&copy; <?= date('Y') ?> CakePHP. Todos os direitos reservados.</span>
    </div>
</footer>

<?= $this->Html->script(['https://code.jquery.com/jquery-3.5.1.slim.min.js']) ?>
<?= $this->Html->script(['https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js']) ?>
<?= $this->Html->script(['https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js']) ?>
</body>
</html>
