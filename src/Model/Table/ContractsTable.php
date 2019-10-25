<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contracts Model
 *
 * @property \App\Model\Table\TypecontracsTable&\Cake\ORM\Association\BelongsTo $Typecontracs
 * @property \App\Model\Table\ContractsCustomersTable&\Cake\ORM\Association\HasMany $ContractsCustomers
 * @property \App\Model\Table\CouponsPackagesTable&\Cake\ORM\Association\HasMany $CouponsPackages
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 *
 * @method \App\Model\Entity\Contract get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contract newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Contract[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contract|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contract patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contract[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contract findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContractsTable extends Table
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

        $this->setTable('contracts');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Typecontracs', [
            'foreignKey' => 'typecontrac_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('ContractsCustomers', [
            'foreignKey' => 'contract_id'
        ]);
        $this->hasMany('CouponsPackages', [
            'foreignKey' => 'contract_id'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'contract_id'
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
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('price')
            ->maxLength('price', 45)
            ->allowEmptyString('price');

        $validator
            ->integer('number_classes')
            ->allowEmptyString('number_classes');

        $validator
            ->boolean('customer_can_cancel')
            ->allowEmptyString('customer_can_cancel');

        $validator
            ->scalar('contract frequency')
            ->maxLength('contract frequency', 10)
            ->allowEmptyString('contract frequency');

        $validator
            ->integer('number_contract_frecuency')
            ->allowEmptyString('number_contract_frecuency');

        $validator
            ->integer('time_to_recur')
            ->allowEmptyString('time_to_recur');

        $validator
            ->boolean('payment_recur')
            ->allowEmptyString('payment_recur');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

        $validator
            ->scalar('description')
            ->allowEmptyString('description');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['typecontrac_id'], 'Typecontracs'));

        return $rules;
    }
}
