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
<div class="jumbotron text-center">
    <h1 class="display-4">Bem-vindo ao Sistema de Gerenciamento de Carros</h1>
    <p class="lead">Gerencie seus clientes e seus carros de forma eficiente e organizada.</p>
    <hr class="my-4">
    <p>Nosso sistema oferece uma solução completa para gerenciamento de informações de clientes e veículos, facilitando a administração e acompanhamento de pagamentos e dados detalhados de cada carro.</p>
    <a class="btn btn-primary btn-lg" href="<?= $this->Url->build(['controller' => 'Cliente', 'action' => 'index']) ?>" role="button">Gerenciar Clientes</a>
    <a class="btn btn-secondary btn-lg" href="<?= $this->Url->build(['controller' => 'Carro', 'action' => 'index']) ?>" role="button">Gerenciar Carros</a>
</div>

<div class="container mt-5">
    <h2>Funcionalidades do Sistema</h2>
    <div class="row">
        <div class="col-md-4">
            <h3>Gerenciamento de Clientes</h3>
            <p>Cadastre, edite e visualize informações detalhadas de seus clientes, incluindo nome, CPF, e-mail, número de telefone, e status sobre seu pagamento.</p>
        </div>
        <div class="col-md-4">
            <h3>Gerenciamento de Carros</h3>
            <p>Cadastre, edite e visualize informações detalhadas dos carros dos seus clientes, como nome, tipo, marca, ano, cor e status de pagamento.</p>
        </div>
    </div>
</div>

<style>
    .jumbotron {
        background-color: #f8f9fa;
        padding: 2rem 1rem;
        border-radius: 0.3rem;
    }
    .jumbotron h1 {
        color: #800020;
        font-weight: bold;
    }
    .jumbotron .btn-primary {
        background-color: #800020;
        border-color: #800020;
    }
    .jumbotron .btn-primary:hover {
        background-color: #5a0015;
        border-color: #5a0015;
    }
    .jumbotron .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }
    .container h2 {
        color: #800020;
        font-weight: bold;
        margin-bottom: 1.5rem;
    }
    .container h3 {
        color: #343a40;
        margin-bottom: 1rem;
    }
    .container p {
        color: #6c757d;
    }
    .container.mt-5 {
        margin: 150px;
    }
</style>
