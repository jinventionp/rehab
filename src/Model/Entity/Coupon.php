<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Coupon Entity
 *
 * @property int $id
 * @property string $coupon_code
 * @property string|null $description
 * @property float $coupon_value
 * @property \Cake\I18n\FrozenDate|null $expiration_date
 * @property int|null $Limit_use_per_coupon
 * @property int|null $Limit_use_per_package
 * @property int|null $Limit_use_per_customer
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\CouponsCustomer[] $coupons_customers
 * @property \App\Model\Entity\CouponsPackage[] $coupons_packages
 */
class Coupon extends Entity
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
        'coupon_code' => true,
        'description' => true,
        'coupon_value' => true,
        'expiration_date' => true,
        'Limit_use_per_coupon' => true,
        'Limit_use_per_package' => true,
        'Limit_use_per_customer' => true,
        'created' => true,
        'modified' => true,
        'coupons_customers' => true,
        'coupons_packages' => true
    ];
}
