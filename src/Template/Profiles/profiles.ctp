<div class="table-responsive">
    <table class="table table-sm mb-0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
            <th scope="col"><?= $this->Paginator->sort('name') ?></th>
            <th scope="col"><?= $this->Paginator->sort('created') ?></th>
            <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
        </tr>
        </thead>
        <tbody>
        	<?php foreach ($profiles as $profile): ?>
	        <tr>
	            <td scope="row"><?= $this->Number->format($profile->id) ?></td>
	            <td><?= h($profile->name) ?></td>
                <td><?= h($profile->created) ?></td>
                <td><?= h($profile->modified) ?></td>
                <td class="actions">
                    <a id="editRecord-<?=$profile->id?>" href="javascript:void(0)" data-url="<?=$this->Url->build(["controller" => "Profiles", "action" => "edit", $profile->id])?>" data-title="<?=__('Edit Profile')?>" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Editar" class="action-icon"> <i class="fas fa-edit fa-xs"></i></a>
                    <a id="deleteRecord-<?=$profile->id?>"  href="javascript:void(0);" data-url="<?=$this->Url->build(["controller" => "Profiles", "action" => "delete", $profile->id])?>" data-url-action="<?=$this->Url->build(["controller" => "Profiles", "action" => "delete", $profile->id])?>" data-title="<?=__('Delete Profile')?>" data-id="<?=$profile->id?>" data-question='Seguro que desea eliminar el <?=__('Profile')?> <span class="badge bg-soft-primary text-primary"><?=$profile->name?></span> ?'  data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Eliminar" class="action-icon"> <i class="fas fa-trash-alt fa-xs"></i></a>
                </td>
	            <!--<td class="actions">
	                <?= $this->Html->link(__('View'), ['action' => 'view', $profile->id]) ?>
	                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $profile->id]) ?>
	                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $profile->id], ['confirm' => __('Are you sure you want to delete # {0}?', $profile->id)]) ?>
	            </td>-->
	        </tr>
	        <?php endforeach; ?>
        </tbody>
    </table>
</div> <!-- end table-responsive-->
<?=$this->element('pagination')?>