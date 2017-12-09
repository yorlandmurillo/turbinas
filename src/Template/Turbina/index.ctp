<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Nueva Turbina'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turbina index large-9 medium-8 columns content">
    <h3><?= __('Turbina') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descripcion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ubicacion') ?></th>
                <th scope="col"><?= $this->Paginator->sort('creacion') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turbina as $turbina): ?>
            <tr>
                <td><?= $this->Number->format($turbina->id) ?></td>
                <td><?= h($turbina->nombre) ?></td>
                <td><?= h($turbina->descripcion) ?></td>
                <td><?= h($turbina->ubicacion) ?></td>
                <td><?= h($turbina->creacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $turbina->id ], ['class' => 'btn btn-info' ]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $turbina->id], ['class' => 'btn btn-warning' ]) ?>
                    <?= $this->Form->postLink(__('Borrar'), ['action' => 'delete', $turbina->id], ['confirm' => __('Seguro que quieres eliminar la turbina {0}?', $turbina->nombre), 'class' => 'btn btn-danger'] ) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}} en total')]) ?></p>
    </div>
</div>
