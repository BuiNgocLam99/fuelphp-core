<?php

use Orm\Model;
use PHPUnit\Framework\TestCase;

class Test_Model_User extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        // Set up the testing environment if needed
    }

    public function test_user_creation()
    {
        // Create a new Model_User object
        $user = Model_User::forge([
            'username' => 'testuser',
            'password' => 'password',
            'email'    => 'testuser@example.com',
        ]);

        // Check that the object was created successfully
        $this->assertInstanceOf(Model_User::class, $user);
        $this->assertEquals('testuser', $user->username);
        $this->assertEquals('password', $user->password);
        $this->assertEquals('testuser@example.com', $user->email);
    }

    public function test_user_validation()
    {
        // Create a new Model_User object with invalid data
        $user = Model_User::forge([
            'username' => '',
            'password' => 'short',
            'email'    => 'invalid-email',
        ]);

        // Validate the user data
        $validation = Model_User::validation('test');
        $validation->run((array) $user);

        // Check that validation failed
        $this->assertFalse($validation->run());
        $this->assertNotEmpty($validation->error());
    }
}
