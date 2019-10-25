<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ContractsFixture
 */
class ContractsFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'typecontrac_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'price' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => 'Precio', 'precision' => null, 'fixed' => null],
        'number_classes' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Número de Clases', 'precision' => null, 'autoIncrement' => null],
        'customer_can_cancel' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => 'El cliente puede cancelar', 'precision' => null],
        'contract frequency' => ['type' => 'string', 'length' => 10, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => 'Frecuencia del Contrato (dias, mes), 1 mes corresponde a 30 dias calendario', 'precision' => null, 'fixed' => null],
        'number_contract_frecuency' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Numero de dias o meses del contrato ej:30 dias ó 2 meses', 'precision' => null, 'autoIncrement' => null],
        'time_to_recur' => ['type' => 'integer', 'length' => 2, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => 'Tiempo de Recurrencia (cobro automatico) ', 'precision' => null, 'autoIncrement' => null],
        'payment_recur' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'active' => ['type' => 'boolean', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'description' => ['type' => 'text', 'length' => null, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_unicode_ci', 'comment' => '', 'precision' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_contracts_typecontracs1_idx' => ['type' => 'index', 'columns' => ['typecontrac_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_contracts_typecontracs1' => ['type' => 'foreign', 'columns' => ['typecontrac_id'], 'references' => ['typecontracs', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'typecontrac_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'price' => 'Lorem ipsum dolor sit amet',
                'number_classes' => 1,
                'customer_can_cancel' => 1,
                'contract frequency' => 'Lorem ip',
                'number_contract_frecuency' => 1,
                'time_to_recur' => 1,
                'payment_recur' => 1,
                'active' => 1,
                'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'created' => '2019-10-24 15:05:33',
                'modified' => '2019-10-24 15:05:33'
            ],
        ];
        parent::init();
    }
}
