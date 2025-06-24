<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsuariosFixture
 */
class UsuariosFixture extends TestFixture
{
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
                'email' => 'Lorem ipsum dolor sit amet',
                'created' => '2025-06-23 01:50:01',
                'modified' => '2025-06-23 01:50:01',
                'cpf' => 'Lorem ipsum dolor ',
                'rg' => 'Lorem ipsum dolor ',
                'data_de_nascimento' => '2025-06-23',
                'signo' => 'Lorem ipsum dolor ',
                'senha' => 'Lorem ip',
            ],
        ];
        parent::init();
    }
}
