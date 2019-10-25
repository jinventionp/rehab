<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property int $profile_id
 * @property string $name
 * @property string|null $surname
 * @property string $email
 * @property string $password
 * @property string|null $movil
 * @property string|null $address
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property bool|null $active
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Profile $profile
 * @property \App\Model\Entity\Card[] $cards
 * @property \App\Model\Entity\ContractsCustomer[] $contracts_customers
 * @property \App\Model\Entity\CouponsCustomer[] $coupons_customers
 * @property \App\Model\Entity\Payment[] $payments
 */
class User extends Entity
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
        'profile_id' => true,
        'name' => true,
        'surname' => true,
        'email' => true,
        'password' => true,
        'movil' => true,
        'address' => true,
        'birth_date' => true,
        'active' => true,
        'created' => true,
        'modified' => true,
        'profile' => true,
        'cards' => true,
        'contracts_customers' => true,
        'coupons_customers' => true,
        'payments' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
          return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
