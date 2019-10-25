<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CouponsPackagesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CouponsPackagesTable Test Case
 */
class CouponsPackagesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CouponsPackagesTable
     */
    public $CouponsPackages;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.CouponsPackages',
        'app.Coupons',
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
        $config = TableRegistry::getTableLocator()->exists('CouponsPackages') ? [] : ['className' => CouponsPackagesTable::class];
        $this->CouponsPackages = TableRegistry::getTableLocator()->get('CouponsPackages', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CouponsPackages);

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
