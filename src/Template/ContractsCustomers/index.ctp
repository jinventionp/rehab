<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractsCustomer[]|\Cake\Collection\CollectionInterface $contractsCustomers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contracts Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contractsCustomers index large-9 medium-8 columns content">
    <h3><?= __('Contracts Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('renew_automatically') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contractsCustomers as $contractsCustomer): ?>
            <tr>
                <td><?= $this->Number->format($contractsCustomer->id) ?></td>
                <td><?= $contractsCustomer->has('user') ? $this->Html->link($contractsCustomer->user->name, ['controller' => 'Users', 'action' => 'view', $contractsCustomer->user->id]) : '' ?></td>
                <td><?= $contractsCustomer->has('contract') ? $this->Html->link($contractsCustomer->contract->name, ['controller' => 'Contracts', 'action' => 'view', $contractsCustomer->contract->id]) : '' ?></td>
                <td><?= h($contractsCustomer->renew_automatically) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contractsCustomer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contractsCustomer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contractsCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractsCustomer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
