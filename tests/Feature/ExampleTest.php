<?php

namespace Ney\PackageBone\Tests\Feature;

use Ney\PackageBone\Tests\IntegrationTestCase;

class ExampleTest extends IntegrationTestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/test');

        $response->assertStatus(404);
    }
}
