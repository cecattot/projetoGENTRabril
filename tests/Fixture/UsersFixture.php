<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'siape' => 'Lorem ipsum dolor ',
                'password' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'L',
                'created' => '2022-04-14 20:01:21',
                'modified' => '2022-04-14 20:01:21',
                'role_id' => 1,
            ],
        ];
        parent::init();
    }
}
