<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class StaticPageTest extends TestCase
{
    /**
     * Ensure the homepage is visible, reponds with a 200 status code and the
     * text is displaying.
     *
     * @return void
     */
    public function testTheHomepageIsDisplayed()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertSee('Mountain View Landscaping');
    }

    /**
     * Make sure we can see the privacy policy page as well.
     *
     * @return void
     */
    public function testThePrivacyPolicyIsDisplayed()
    {
        $response = $this->get('/privacy');

        $response->assertStatus(200);

        $response->assertSee('Privacy Policy');
    }

    /**
     * Make sure we can see the privacy policy page as well.
     *
     * @return void
     */
    public function testTheServicesPageIsDisplayed()
    {
        $response = $this->get('/services');

        $response->assertStatus(200);

        $response->assertSee('Quality Landscaping Services');
    }

    /**
     * Make sure we can see the privacy policy page as well.
     *
     * @return void
     */
    public function testTheAboutPageIsDisplayed()
    {
        $response = $this->get('/about');

        $response->assertStatus(200);

        $response->assertSee('About Mountain View Landscaping');
    }
}
