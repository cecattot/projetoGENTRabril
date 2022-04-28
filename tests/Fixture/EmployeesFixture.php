<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmployeesFixture
 */
class EmployeesFixture extends TestFixture
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
                'siape' => 'Lorem ipsum dolor ',
                'telefone' => 'Lorem ipsum do',
                'ativo' => 'L',
                'created' => '2022-04-27 01:56:04',
                'modified' => '2022-04-27 01:56:04',
                'role_id' => 1,
                'area_id' => 1,
            ],
        ];
        parent::init();
    }
}
