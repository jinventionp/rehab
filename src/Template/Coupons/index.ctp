<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coupon[]|\Cake\Collection\CollectionInterface $coupons
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Coupon'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coupons Customers'), ['controller' => 'CouponsCustomers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupons Customer'), ['controller' => 'CouponsCustomers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['controller' => 'CouponsPackages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['controller' => 'CouponsPackages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="coupons index large-9 medium-8 columns content">
    <h3><?= __('Coupons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coupon_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coupon_value') ?></th>
                <th scope="col"><?= $this->Paginator->sort('expiration_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Limit_use_per_coupon') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Limit_use_per_package') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Limit_use_per_customer') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($coupons as $coupon): ?>
            <tr>
                <td><?= $this->Number->format($coupon->id) ?></td>
                <td><?= h($coupon->coupon_code) ?></td>
                <td><?= $this->Number->format($coupon->coupon_value) ?></td>
                <td><?= h($coupon->expiration_date) ?></td>
                <td><?= $this->Number->format($coupon->Limit_use_per_coupon) ?></td>
                <td><?= $this->Number->format($coupon->Limit_use_per_package) ?></td>
                <td><?= $this->Number->format($coupon->Limit_use_per_customer) ?></td>
                <td><?= h($coupon->created) ?></td>
                <td><?= h($coupon->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $coupon->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $coupon->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coupon->id], ['confirm' => __('Are you sure you want to delete # {0}?', $coupon->id)]) ?>
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
