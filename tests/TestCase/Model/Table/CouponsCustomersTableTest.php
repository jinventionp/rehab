<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CouponsCustomersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CouponsCustomersTable Test Case
 */
class CouponsCustomersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CouponsCustomersTable
     */
    public $CouponsCustomers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CouponsCustomers',
        'app.Coupons',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('CouponsCustomers') ? [] : ['className' => CouponsCustomersTable::class];
        $this->CouponsCustomers = TableRegistry::getTableLocator()->get('CouponsCustomers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CouponsCustomers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
