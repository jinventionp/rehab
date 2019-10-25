<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\TypecontracsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\TypecontracsTable Test Case
 */
class TypecontracsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\TypecontracsTable
     */
    public $Typecontracs;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Typecontracs',
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
        $config = TableRegistry::getTableLocator()->exists('Typecontracs') ? [] : ['className' => TypecontracsTable::class];
        $this->Typecontracs = TableRegistry::getTableLocator()->get('Typecontracs', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Typecontracs);

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
