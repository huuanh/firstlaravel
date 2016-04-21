<?php

class UserTest extends TestCase {
    public function testSomethingIsTrue()
    {
        $response = $this->action('GET', 'UserController@create')
            ->send();

    }
}