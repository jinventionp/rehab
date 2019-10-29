<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypecontractsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypecontractsTable Test Case
 */
class TypecontractsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypecontractsTable
     */
    public $Typecontracts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typecontracts'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Typecontracts') ? [] : ['className' => TypecontractsTable::class];
        $this->Typecontracts = TableRegistry::getTableLocator()->get('Typecontracts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typecontracts);

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
}
