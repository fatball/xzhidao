<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApiTest extends TestCase
{
    use WithoutMiddleware;
    public static $result = ['errno' => 0, 'errmsg' => 'success'];

    /**
     * test ask.
     *
     * @return void
     */
    public function testAsk()
    {
        $data = [

        ];
        $this->post('/api/ask', $data)->seeJsonEquals(self::$result);
    }

    public function testAppend()
    {
        $data = [

        ];
        $this->post('/api/append', $data)->seeJsonEquals(self::$result);
    }

    public function testComment()
    {
        $data = [

        ];
        $this->post('/api/comment', $data)->seeJsonEquals(self::$result);
    }

    public function testDelete()
    {
        $data = [

        ];
        $this->post('/api/delete', $data)->seeJsonEquals(self::$result);
    }

    public function testQuality()
    {
        $data = [

        ];
        $this->post('/api/quality', $data)->seeJsonEquals(self::$result);
    }
}
