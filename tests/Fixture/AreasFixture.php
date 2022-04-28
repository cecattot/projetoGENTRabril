<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AreasFixture
 */
class AreasFixture extends TestFixture
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
                'abreviatura' => 'Lorem ipsum dolor sit amet',
                'ativo' => 'L',
                'created' => '2022-04-28 02:51:08',
                'modified' => '2022-04-28 02:51:08',
            ],
        ];
        parent::init();
    }
}
