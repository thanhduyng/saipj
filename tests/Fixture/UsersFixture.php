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
                'username' => 'Lorem ipsum dolor sit amet',
                'fullname' => 'Lorem ipsum dolor sit amet',
                'email' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'role' => 1,
                'created_at' => '2021-11-21 03:53:46',
                'updated_at' => '2021-11-21 03:53:46',
            ],
        ];
        parent::init();
    }
}
