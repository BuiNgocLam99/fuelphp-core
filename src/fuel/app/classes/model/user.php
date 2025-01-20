<?php

class Model_User extends \Orm\Model
{
    protected static $_properties = array(
        'id' => array(
            'label' => 'Id',
            'data_type' => 'int',
        ),
        'username',
        'password',
        'salt',
        'group_id',
        'email',
        'last_login',
        'previous_login',
        'login_hash',
        'user_id',
        'created_at' => array(
            'label' => 'Created at',
            'data_type' => 'int',
        ),
        'updated_at' => array(
            'label' => 'Updated at',
            'data_type' => 'int',
        ),
    );

	protected static $_observers = [
		'Orm\Observer_CreatedAt' => [
			'events' => ['before_insert'],
			'mysql_timestamp' => false,
		],
		'Orm\Observer_UpdatedAt' => [
			'events' => ['before_save'],
			'mysql_timestamp' => false,
		],
	];

    protected static $_table_name = 'users';

    protected static $_primary_key = array('id');

    public static function validation($factory)
    {
        $val = \Validation::forge($factory);
        $val->add_field('username', 'Username', 'required|max_length[50]');
        $val->add_field('password', 'Password', 'required|min_length[6]');
        $val->add_field('email', 'Email', 'required|valid_email');

        return $val;
    }
}
