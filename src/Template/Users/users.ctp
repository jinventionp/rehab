<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('profile_id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('surname') ?></th>
            <th scope="col"><?= $this->Paginator->sort('email') ?></th>
            <th scope="col"><?= $this->Paginator->sort('movil') ?></th>
            <th scope="col"><?= $this->Paginator->sort('address') ?></th>
            <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
            <th scope="col"><?= $this->Paginator->sort('active') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($users as $user): ?>
	        <tr>
	            <td scope="row"><?= $this->Number->format($user->id) ?></td>
	            <td><?= $user->profile->name ?></td>
	            <td><?= h($user->name) ?></td>
	            <td><?= h($user->surname) ?></td>
	            <td><?= h($user->email) ?></td>
	            <td><?= h($user->movil) ?></td>
	            <td><?= h($user->address) ?></td>
	            <td><?= h($user->birth_date) ?></td>
	            <td><?= h($user->active) ?></td>
	            <td><?= h($user->created) ?></td>
	            <td><?= h($user->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$user->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Users", "action" => "edit", $user->id])?>" data-title="<?=__('Edit User')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$user->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Users", "action" => "remove", $user->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Users", "action" => "delete", $user->id])?>" data-title="<?=__('Delete User')?>" data-id="<?=$user->id?>" data-question='Seguro que desea eliminar el <?=__('User')?> <span class="badge bg-soft-primary text-primary"><?=$user->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>