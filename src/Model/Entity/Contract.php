<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contract Entity
 *
 * @property int $id
 * @property int $typecontrac_id
 * @property string $name
 * @property string|null $price
 * @property int|null $number_classes
 * @property bool|null $customer_can_cancel
 * @property string|null $contract frequency
 * @property int|null $number_contract_frecuency
 * @property int|null $time_to_recur
 * @property bool|null $payment_recur
 * @property bool|null $active
 * @property string|null $description
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Typecontrac $typecontrac
 * @property \App\Model\Entity\ContractsCustomer[] $contracts_customers
 * @property \App\Model\Entity\CouponsPackage[] $coupons_packages
 * @property \App\Model\Entity\Payment[] $payments
 */
class Contract extends Entity
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
        'typecontrac_id' => true,
        'name' => true,
        'price' => true,
        'number_classes' => true,
        'customer_can_cancel' => true,
        'contract frequency' => true,
        'number_contract_frecuency' => true,
        'time_to_recur' => true,
        'payment_recur' => true,
        'active' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'typecontrac' => true,
        'contracts_customers' => true,
        'coupons_packages' => true,
        'payments' => true
    ];
}
