<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract[]|\Cake\Collection\CollectionInterface $contracts
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Typecontracts'), ['controller' => 'Typecontracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Typecontract'), ['controller' => 'Typecontracts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts Customers'), ['controller' => 'ContractsCustomers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contracts Customer'), ['controller' => 'ContractsCustomers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['controller' => 'CouponsPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['controller' => 'CouponsPackages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contracts index large-9 medium-8 columns content">
    <h3><?= __('Contracts') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('typecontract_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_classes') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_can_cancel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contract_frequency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number_contract_frecuency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time_to_recur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_recur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('active') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($contracts as $contract): ?>
            <tr>
                <td><?= $this->Number->format($contract->id) ?></td>
                <td><?= $contract->has('typecontract') ? $this->Html->link($contract->typecontract->name, ['controller' => 'Typecontracts', 'action' => 'view', $contract->typecontract->id]) : '' ?></td>
                <td><?= h($contract->name) ?></td>
                <td><?= h($contract->price) ?></td>
                <td><?= $this->Number->format($contract->number_classes) ?></td>
                <td><?= h($contract->customer_can_cancel) ?></td>
                <td><?= h($contract->contract_frequency) ?></td>
                <td><?= $this->Number->format($contract->number_contract_frecuency) ?></td>
                <td><?= $this->Number->format($contract->time_to_recur) ?></td>
                <td><?= h($contract->payment_recur) ?></td>
                <td><?= h($contract->active) ?></td>
                <td><?= h($contract->created) ?></td>
                <td><?= h($contract->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $contract->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contract->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?>
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
