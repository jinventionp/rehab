<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Typecontracs'), ['controller' => 'Typecontracs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Typecontrac'), ['controller' => 'Typecontracs', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Contracts Customers'), ['controller' => 'ContractsCustomers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contracts Customer'), ['controller' => 'ContractsCustomers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Coupons Packages'), ['controller' => 'CouponsPackages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Coupons Package'), ['controller' => 'CouponsPackages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Payments'), ['controller' => 'Payments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Payment'), ['controller' => 'Payments', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contracts view large-9 medium-8 columns content">
    <h3><?= h($contract->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Typecontrac') ?></th>
            <td><?= $contract->has('typecontrac') ? $this->Html->link($contract->typecontrac->name, ['controller' => 'Typecontracs', 'action' => 'view', $contract->typecontrac->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($contract->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= h($contract->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contract Frequency') ?></th>
            <td><?= h($contract->contract frequency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Classes') ?></th>
            <td><?= $this->Number->format($contract->number_classes) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number Contract Frecuency') ?></th>
            <td><?= $this->Number->format($contract->number_contract_frecuency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time To Recur') ?></th>
            <td><?= $this->Number->format($contract->time_to_recur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($contract->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($contract->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer Can Cancel') ?></th>
            <td><?= $contract->customer_can_cancel ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Recur') ?></th>
            <td><?= $contract->payment_recur ? __('Yes') : __('No'); ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Active') ?></th>
            <td><?= $contract->active ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Description') ?></h4>
        <?= $this->Text->autoParagraph(h($contract->description)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Contracts Customers') ?></h4>
        <?php if (!empty($contract->contracts_customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Renew Automatically') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contract->contracts_customers as $contractsCustomers): ?>
            <tr>
                <td><?= h($contractsCustomers->id) ?></td>
                <td><?= h($contractsCustomers->user_id) ?></td>
                <td><?= h($contractsCustomers->contract_id) ?></td>
                <td><?= h($contractsCustomers->renew_automatically) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ContractsCustomers', 'action' => 'view', $contractsCustomers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ContractsCustomers', 'action' => 'edit', $contractsCustomers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ContractsCustomers', 'action' => 'delete', $contractsCustomers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contractsCustomers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Coupons Packages') ?></h4>
        <?php if (!empty($contract->coupons_packages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Coupon Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contract->coupons_packages as $couponsPackages): ?>
            <tr>
                <td><?= h($couponsPackages->id) ?></td>
                <td><?= h($couponsPackages->coupon_id) ?></td>
                <td><?= h($couponsPackages->contract_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'CouponsPackages', 'action' => 'view', $couponsPackages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'CouponsPackages', 'action' => 'edit', $couponsPackages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'CouponsPackages', 'action' => 'delete', $couponsPackages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $couponsPackages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Payments') ?></h4>
        <?php if (!empty($contract->payments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Contract Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Number Payment') ?></th>
                <th scope="col"><?= __('Date Payment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($contract->payments as $payments): ?>
            <tr>
                <td><?= h($payments->id) ?></td>
                <td><?= h($payments->user_id) ?></td>
                <td><?= h($payments->contract_id) ?></td>
                <td><?= h($payments->product_id) ?></td>
                <td><?= h($payments->name) ?></td>
                <td><?= h($payments->number_payment) ?></td>
                <td><?= h($payments->date_payment) ?></td>
                <td><?= h($payments->created) ?></td>
                <td><?= h($payments->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Payments', 'action' => 'view', $payments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Payments', 'action' => 'edit', $payments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Payments', 'action' => 'delete', $payments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $payments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
