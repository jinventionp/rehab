<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ContractsCustomer $contractsCustomer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $contractsCustomer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $contractsCustomer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Contracts Customers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="contractsCustomers form large-9 medium-8 columns content">
    <?= $this->Form->create($contractsCustomer) ?>
    <fieldset>
        <legend><?= __('Edit Contracts Customer') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('contract_id', ['options' => $contracts]);
            echo $this->Form->control('renew_automatically');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
