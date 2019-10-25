<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractsCustomer $contractsCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contracts Customer'), ['action' => 'edit', $contractsCustomer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contracts Customer'), ['action' => 'delete', $contractsCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractsCustomer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts Customers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contracts Customer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contractsCustomers view large-9 medium-8 columns content">
    <h3><?= h($contractsCustomer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $contractsCustomer->has('user') ? $this->Html->link($contractsCustomer->user->name, ['controller' => 'Users', 'action' => 'view', $contractsCustomer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract') ?></th>
            <td><?= $contractsCustomer->has('contract') ? $this->Html->link($contractsCustomer->contract->name, ['controller' => 'Contracts', 'action' => 'view', $contractsCustomer->contract->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contractsCustomer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Renew Automatically') ?></th>
            <td><?= $contractsCustomer->renew_automatically ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
