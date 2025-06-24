<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FornecedorFixture
 */
class FornecedorFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'fornecedor';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nome' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-06-17 02:12:00',
                'modified' => '2025-06-17 02:12:00',
            ],
        ];
        parent::init();
    }
}
