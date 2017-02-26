<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
  public function testHome()
  {
    $response = $this->get('/home');
    $response->assertRedirect('/login');
  }

  public function testPasswordNew()
  {
    $response = $this->get('/password/new');
    $response->assertRedirect('/login');
  }

  public function testGroupNew()
  {
    $response = $this->get('/group/new');
    $response->assertRedirect('/login');
  }
}
