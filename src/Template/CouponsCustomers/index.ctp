<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CouponsCustomer[]|\Cake\Collection\CollectionInterface $couponsCustomers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coupons'), ['controller' => 'Coupons', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupon'), ['controller' => 'Coupons', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="couponsCustomers index large-9 medium-8 columns content">
    <h3><?= __('Coupons Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coupon_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($couponsCustomers as $couponsCustomer): ?>
            <tr>
                <td><?= $this->Number->format($couponsCustomer->id) ?></td>
                <td><?= $couponsCustomer->has('coupon') ? $this->Html->link($couponsCustomer->coupon->id, ['controller' => 'Coupons', 'action' => 'view', $couponsCustomer->coupon->id]) : '' ?></td>
                <td><?= $couponsCustomer->has('user') ? $this->Html->link($couponsCustomer->user->name, ['controller' => 'Users', 'action' => 'view', $couponsCustomer->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $couponsCustomer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $couponsCustomer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $couponsCustomer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsCustomer->id)]) ?>
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
