<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carro $carro
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Carro'), ['action' => 'edit', $carro->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Carro'), ['action' => 'delete', $carro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carro->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carro'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Carro'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="carro view content">
            <h3>Carro</h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($carro->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cliente') ?></th>
                    <td><?= $carro->hasValue('cliente') ? $this->Html->link($carro->cliente->nome, ['controller' => 'Cliente', 'action' => 'view', $carro->cliente->id]) : 'Disponível' ?></td>
                </tr>
                <tr>
                    <th><?= __('Totalmente Pago') ?></th>
                    <td><?= $carro->totalmente_pago ? 'Sim' : 'Não' ?></td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($carro->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipo') ?></th>
                    <td><?= h($carro->tipo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= h($carro->marca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cor') ?></th>
                    <td><?= h($carro->cor) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ano') ?></th>
                    <td><?= $this->Number->format($carro->ano) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
