<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CouponsCustomer Entity
 *
 * @property int $id
 * @property int $coupon_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\Coupon $coupon
 * @property \App\Model\Entity\User $user
 */
class CouponsCustomer extends Entity
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
        'coupon_id' => true,
        'user_id' => true,
        'coupon' => true,
        'user' => true
    ];
}
