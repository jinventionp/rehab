<?php use Cake\I18n\Time; ?>
<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('card_number') ?></th>
            <th scope="col"><?= $this->Paginator->sort('expiry_month') ?></th>
            <th scope="col"><?= $this->Paginator->sort('expiry_year') ?></th>
            <th scope="col"><?= $this->Paginator->sort('cvv') ?></th>
            <th scope="col"><?= $this->Paginator->sort('defaulted') ?></th>
            <th scope="col"><?= $this->Paginator->sort('token') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($cards as $card): ?>
	        <tr>
	            <td><?= $this->Number->format($card->id) ?></td>
                <td><?= $card->user->name?></td>
                <td><?= h($card->name) ?></td>
                <td><?= h($card->card_number) ?></td>
                <td><?= h($card->expiry_month) ?></td>
                <td><?= h($card->expiry_year) ?></td>
                <td><?= h($card->cvv) ?></td>
                <td><?= h($card->defaulted) ?></td>
                <td><?= h($card->token) ?></td>
                <td><?= h($card->created) ?></td>
                <td><?= h($card->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$card->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Cards", "action" => "edit", $card->id])?>" data-title="<?=__('Edit Card')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$card->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Cards", "action" => "delete", $card->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Cards", "action" => "delete", $card->id])?>" data-title="<?=__('Delete Card')?>" data-id="<?=$card->id?>" data-question='Seguro que desea eliminar el <?=__('Card')?> <span class="badge bg-soft-primary text-primary"><?=$card->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $card->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $card->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $card->id], ['confirm' => __('Are you sure you want to delete # {0}?', $card->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>