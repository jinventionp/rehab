<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ProfilesTable&\Cake\ORM\Association\BelongsTo $Profiles
 * @property \App\Model\Table\CardsTable&\Cake\ORM\Association\HasMany $Cards
 * @property \App\Model\Table\ContractsCustomersTable&\Cake\ORM\Association\HasMany $ContractsCustomers
 * @property \App\Model\Table\CouponsCustomersTable&\Cake\ORM\Association\HasMany $CouponsCustomers
 * @property \App\Model\Table\PaymentsTable&\Cake\ORM\Association\HasMany $Payments
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Profiles', [
            'foreignKey' => 'profile_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Cards', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('ContractsCustomers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('CouponsCustomers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Payments', [
            'foreignKey' => 'user_id'
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
            ->maxLength('name', 200)
            ->requirePresence('name', 'create')
            ->notEmptyString('name', 'El campo Nombres es Obligatorio');

        $validator
            ->scalar('surname')
            ->maxLength('surname', 200)
            ->allowEmptyString('surname', 'El campo Apellidos es Obligatorio');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email', null, false)
            ->add('email', 'unique', [
                'rule' => 'validateUnique', 
                'provider' => 'table', 
                'message' => 'El Correo electrónico ya existe, intente con otro Correo electrónico'
            ])
            ->add('email', 'validFormat', [
                'rule'    => 'email',
                'message' => 'Email no válido',
            ]);

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmptyString('password', 'El campo Contraseña es Obligatorio', 'update');

        $validator
            ->requirePresence('confirm_password', 'create')
            ->allowEmptyString('confirm_password', 'El campo Confirmar contraseña es Obligatorio', 'update')
            ->add('confirm_password', 'custom', ['rule' => function ($value, $context) {
                if (isset($context['data']['password']) && $value == $context['data']['password']) {
                    return true;
                }
                return false;
            },
                'message' => 'Lo sentimos, las contraseñas no coinciden',
            ]);

        $validator
            ->scalar('movil')
            ->maxLength('movil', 45)
            ->allowEmptyString('movil');

        $validator
            ->scalar('address')
            ->maxLength('address', 200)
            ->allowEmptyString('address');

        $validator
            ->date('birth_date')
            ->allowEmptyDate('birth_date');

        $validator
            ->boolean('active')
            ->allowEmptyString('active');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['profile_id'], 'Profiles'));

        return $rules;
    }

    public function findAuth(\Cake\ORM\Query $query, array $options)
    {
        //['Users.id', 'Users.name', 'Users.email', 'Users.password', 'Users.phone', 'Users.role_id', 'Users.active', 'Roles.id', 'Roles.name']
        $query
            ->select()
            ->contain([
                'Roles' => ['Profiles' => [
                    'Modules'
                    ]
                ]
            ])
            ->where(['Users.active' => 1]);

        return $query;
    }
}
