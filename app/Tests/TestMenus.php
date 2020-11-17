<?php namespace App;

use CodeIgniter\Test\FeatureTestCase;

class TestMenu extends FeatureTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testGetAllMenus()
    {
      $result = $this->call('get', site_url());
    }
}
