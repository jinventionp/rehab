<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CouponsPackagesFixture
 */
class CouponsPackagesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'biginteger', 'length' => 20, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'coupon_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'contract_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'fk_coupons_packages_coupons1_idx' => ['type' => 'index', 'columns' => ['coupon_id'], 'length' => []],
            'fk_coupons_packages_contracts1_idx' => ['type' => 'index', 'columns' => ['contract_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'fk_coupons_packages_contracts1' => ['type' => 'foreign', 'columns' => ['contract_id'], 'references' => ['contracts', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_coupons_packages_coupons1' => ['type' => 'foreign', 'columns' => ['coupon_id'], 'references' => ['coupons', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
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
                'coupon_id' => 1,
                'contract_id' => 1
            ],
        ];
        parent::init();
    }
}
