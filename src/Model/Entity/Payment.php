<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Payment Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int|null $contract_id
 * @property int|null $product_id
 * @property string|null $name
 * @property string|null $number_payment
 * @property \Cake\I18n\FrozenTime|null $date_payment
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Contract $contract
 * @property \App\Model\Entity\Product $product
 */
class Payment extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'contract_id' => true,
        'product_id' => true,
        'name' => true,
        'number_payment' => true,
        'date_payment' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'contract' => true,
        'product' => true
    ];
}
