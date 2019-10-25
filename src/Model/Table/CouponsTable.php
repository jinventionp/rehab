<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Coupons Model
 *
 * @property \App\Model\Table\CouponsCustomersTable&\Cake\ORM\Association\HasMany $CouponsCustomers
 * @property \App\Model\Table\CouponsPackagesTable&\Cake\ORM\Association\HasMany $CouponsPackages
 *
 * @method \App\Model\Entity\Coupon get($primaryKey, $options = [])
 * @method \App\Model\Entity\Coupon newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Coupon[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Coupon|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coupon saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Coupon patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Coupon[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Coupon findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class CouponsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('coupons');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('CouponsCustomers', [
            'foreignKey' => 'coupon_id'
        ]);
        $this->hasMany('CouponsPackages', [
            'foreignKey' => 'coupon_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('coupon_code')
            ->maxLength('coupon_code', 45)
            ->requirePresence('coupon_code', 'create')
            ->notEmptyString('coupon_code');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        $validator
            ->numeric('coupon_value')
            ->requirePresence('coupon_value', 'create')
            ->notEmptyString('coupon_value');

        $validator
            ->date('expiration_date')
            ->allowEmptyDate('expiration_date');

        $validator
            ->integer('Limit_use_per_coupon')
            ->allowEmptyString('Limit_use_per_coupon');

        $validator
            ->integer('Limit_use_per_package')
            ->allowEmptyString('Limit_use_per_package');

        $validator
            ->integer('Limit_use_per_customer')
            ->allowEmptyString('Limit_use_per_customer');

        return $validator;
    }
}
