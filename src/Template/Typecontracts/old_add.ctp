<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecontract $typecontract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Typecontracts'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="typecontracts form large-9 medium-8 columns content">
    <?= $this->Form->create($typecontract) ?>
    <fieldset>
        <legend><?= __('Add Typecontract') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
