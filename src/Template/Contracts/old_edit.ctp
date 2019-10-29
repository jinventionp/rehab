<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contract->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?></li>
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
<div class="contracts form large-9 medium-8 columns content">
    <?= $this->Form->create($contract) ?>
    <fieldset>
        <legend><?= __('Edit Contract') ?></legend>
        <?php
            echo $this->Form->control('typecontract_id', ['options' => $typecontracts]);
            echo $this->Form->control('name');
            echo $this->Form->control('price');
            echo $this->Form->control('number_classes');
            echo $this->Form->control('customer_can_cancel');
            echo $this->Form->control('contract_frequency');
            echo $this->Form->control('number_contract_frecuency');
            echo $this->Form->control('time_to_recur');
            echo $this->Form->control('payment_recur');
            echo $this->Form->control('active');
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
