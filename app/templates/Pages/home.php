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
    <title>Gerenciador de Carros: <?= $this->fetch('title') ?></title>
    <?= $this->Html->css(['https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css']) ?>
    <?= $this->Html->css('my_home.css') ?>
</head>
<body>
    <div class="hero">
        <h1 class="display-4">Bem-vindo ao Gerenciamento de Carros</h1>
        <p class="lead">Gerencie seus clientes e seus carros de maneira eficiente e organizada.</p>
        <a class="btn btn-primary btn-lg" href="<?= $this->Url->build(['controller' => 'Cliente', 'action' => 'index']) ?>" role="button">Gerenciar Clientes</a>
        <a class="btn btn-secondary btn-lg" href="<?= $this->Url->build(['controller' => 'Carro', 'action' => 'index']) ?>" role="button">Gerenciar Carros</a>
    </div>

    <div class="container features">
        <h2>Funcionalidades do Sistema</h2>
        <div class="row">
            <div class="col-md-6 feature">
                <i class="fas fa-users"></i>
                <h3>Gerenciamento de Clientes</h3>
                <p>Cadastre, edite e visualize informações detalhadas de seus clientes, incluindo nome, CPF, e-mail, número de telefone, e status sobre seu pagamento.</p>
            </div>
            <div class="col-md-6 feature">
                <i class="fas fa-car"></i>
                <h3>Gerenciamento de Carros</h3>
                <p>Cadastre, edite e visualize informações detalhadas dos carros dos seus clientes, como nome, tipo, marca, ano, cor e status de pagamento.</p>
            </div>
        </div>
    </div>
</body>
</html>
