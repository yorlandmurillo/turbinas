<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Borrar'),
                ['action' => 'delete', $turbina->id],
                ['confirm' => __('Seguro que quieres eliminar la turbina {0}?', $turbina->nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Listar Turbina'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="turbina form large-9 medium-8 columns content">
    <?= $this->Form->create($turbina) ?>
    <fieldset>
        <legend><?= __('Editar Turbina') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('descripcion', ['label' => 'Descripción']);
            echo $this->Form->input('ubicacion', ['label' => 'Ubicación']);
            echo $this->Form->input('creacion', ['label' => 'Creación']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Guardar')) ?>
    <?= $this->Form->end() ?>
</div>
