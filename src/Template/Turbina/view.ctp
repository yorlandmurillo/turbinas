<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Turbina'), ['action' => 'edit', $turbina->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Turbina'), ['action' => 'delete', $turbina->id], ['confirm' => __('Seguro que quieres eliminar la turbina  {0}?', $turbina->nombre)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Turbina'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Turbina'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turbina view large-9 medium-8 columns content">
    <h3><?= h($turbina->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turbina->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($turbina->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descripción') ?></th>
            <td><?= h($turbina->descripcion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Ubicación') ?></th>
            <td><?= h($turbina->ubicacion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fecha Creación') ?></th>
            <td><?= h($turbina->creacion) ?></td>
        </tr>
    </table>
</div>
