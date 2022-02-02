<?php

namespace Tests\Feature;

use Tests\TestCase;

class ContactFormTest extends TestCase
{
    /** test */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
