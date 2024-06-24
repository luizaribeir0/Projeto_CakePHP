<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistribuições de arquivos devem manter o aviso de copyright acima.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html>
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
        .navbar {
            font-size: 1.5rem;
            padding: 1rem 1.5rem;
        }
        .navbar-brand span {
            color: #9E0059;
            font-size: 1.6rem;
        }
        .navbar-light .navbar-nav .nav-link {
            color: #9E0059;
            font-weight: bold;
            font-size: 1.2rem;
        }
        .navbar-light .navbar-nav .nav-link:hover {
            color: #5a0015;
        }
        .btn-bordo {
            background-color: #9E0059;
            color: white;
            border-color: #9E0059;
            font-size: 1.2rem;
            padding: 1rem 3.5rem;
        }
        .btn-bordo:hover {
            background-color: #5a0015;
            border-color: #5a0015;
            color: white;
            text-decoration: none;
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
                <?= $this->Html->link('Home', ['controller' => 'pages', 'action' => 'home'], ['class' => 'btn-bordo']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Clientes', ['controller' => 'cliente', 'action' => 'index'], ['class' => 'btn-bordo']) ?>
            </li>
            <li class="nav-item">
                <?= $this->Html->link('Carros', ['controller' => 'carro', 'action' => 'index'], ['class' => 'btn-bordo']) ?>
            </li>
        </ul>
    </div>
</nav>

<style>
    .btn.btn-bordo {
        font-size: 1rem;
        padding: 0.5rem 0.9rem;
    }
    .index h3 {
        color: #9E0059;
        font-weight: bold;
    }
    .table th, .table td {
        vertical-align: middle;
        text-align: center;
    }
    .pagination .page-link {
        color: #9E0059;
    }
    .pagination .page-link:hover {
        color: #5a0015;
    }
</style>
<main class="main">
    <div class="container mt-4">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>
<footer class="footer bg-light text-center py-3 mt-4">
    <div class="container">
        <span>&copy; <?= date('Y') ?> CakePHP. Todos os direitos reservados.</span>
    </div>
</footer>

<?= $this->Html->script(['https://code.jquery.com/jquery-3.5.1.slim.min.js']) ?>
<?= $this->Html->script(['https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js']) ?>
<?= $this->Html->script(['https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js']) ?>
</body>
</html>
