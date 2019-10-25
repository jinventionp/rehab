<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ContractsCustomersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ContractsCustomersTable Test Case
 */
class ContractsCustomersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ContractsCustomersTable
     */
    public $ContractsCustomers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ContractsCustomers',
        'app.Users',
        'app.Contracts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ContractsCustomers') ? [] : ['className' => ContractsCustomersTable::class];
        $this->ContractsCustomers = TableRegistry::getTableLocator()->get('ContractsCustomers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ContractsCustomers);

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
