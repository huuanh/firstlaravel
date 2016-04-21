<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        //
        $response = $this->call('GET', '/');

        $this->assertEquals(200, $response->status());
    }

    public function testDeleteTask() {
        $this-> visit('/task')
            -> press('Delete');
    }

        // test
    public function testCreateTask() {
        $this-> visit('/')
            -> click('new task')
            -> see('This page is page create new task...');

        $this->visit('task/create')
            -> type('new task in test', 'name')
            ->press('Create Task')
            ->See('This is index page!!')
            -> seePageIs('/task');

        $this->visit('task/create')
            -> press('Create Task')
            -> See('name field is required');
    }

    public function testEditTask() {
        $this -> visit('/task')
            -> click('Edit')
            -> see('This page is page edit new task...')
            -> type('task edit', 'name')
            -> press('Update Task')
            -> see('This is index page!!');
    }
}