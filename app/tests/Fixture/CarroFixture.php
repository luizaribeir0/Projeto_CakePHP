<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CarroFixture
 */
class CarroFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'carro';
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
                'tipo' => 'Lorem ipsum dolor sit amet',
                'marca' => 'Lorem ipsum dolor sit amet',
                'ano' => 1,
                'cor' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
