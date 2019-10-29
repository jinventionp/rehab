<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Typecontract $typecontract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Typecontract'), ['action' => 'edit', $typecontract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Typecontract'), ['action' => 'delete', $typecontract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $typecontract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Typecontracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typecontract'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="typecontracts view large-9 medium-8 columns content">
    <h3><?= h($typecontract->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($typecontract->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($typecontract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($typecontract->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($typecontract->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($typecontract->description)); ?>
    </div>
</div>
