<?php

use PHPUnit\Framework\TestCase;

class Test_Model_User extends TestCase
{
    protected static $pdo;

    public static function setUpBeforeClass(): void
    {
        \Migrate::latest('auth', 'package');
    }

    /**
     * Thiết lập môi trường cho từng bài test.
     */
    // protected function setUp(): void
    // {
    //     parent::setUp();

    //     // Xóa dữ liệu cũ trước mỗi test để đảm bảo môi trường sạch
    //     self::$pdo->exec("DELETE FROM `users`");
    // }

    // public function test_user_creation()
    // {
    //     // Tạo một đối tượng Model_User mới
    //     $user = Model_User::forge([
    //         'username' => 'testuser',
    //         'password' => 'password',
    //         'email'    => 'testuser@example.com',
    //     ]);

    //     // Lưu đối tượng vào cơ sở dữ liệu
    //     $user->save();

    //     // Kiểm tra đối tượng được tạo và lưu thành công
    //     $this->assertNotNull($user->id);
    //     $this->assertEquals('testuser', $user->username);
    //     $this->assertEquals('password', $user->password);
    //     $this->assertEquals('testuser@example.com', $user->email);
    // }

    // public function test_user_login()
    // {
    //     // Giả sử người dùng đã tồn tại trong cơ sở dữ liệu
    //     $username = 'testuser';
    //     $password = 'password';

    //     // Thực hiện đăng nhập
    //     $auth = Auth::instance();
    //     $login_success = $auth->login($username, $password);

    //     // Kiểm tra đăng nhập thành công
    //     $this->assertTrue($login_success);
    // }

    // public function test_user_deletion()
    // {
    //     // Tìm người dùng theo tên đăng nhập
    //     $user = Model_User::find('first', [
    //         'where' => ['username' => 'testuser']
    //     ]);

    //     // Xóa người dùng nếu tồn tại
    //     if ($user) {
    //         $user_id = $user->id;
    //         $user->delete();

    //         // Kiểm tra người dùng đã được xóa
    //         $deleted_user = Model_User::find($user_id);
    //         $this->assertNull($deleted_user);
    //     } else {
    //         $this->fail('Người dùng không tồn tại để xóa.');
    //     }
    // }
}
