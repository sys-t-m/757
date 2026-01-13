<?php

namespace Tests\Feature;

use Tests\TestCase;

class NotFoundTest extends TestCase
{
    /**
     * Test that a non-existent route returns a 404 status and uses the custom 404 page.
     */
    public function test_non_existent_route_returns_404_page(): void
    {
        $response = $this->get('/non-existent-page-12345');

        $response->assertStatus(404);
        $response->assertSee('404');
        $response->assertSee('Oops! The page you are looking for could not be found.');
    }
}
