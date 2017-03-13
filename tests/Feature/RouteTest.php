<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
  public function testLogin()
  {
    $response = $this->get('/login');
    $response->assertStatus(200);
  }

  public function testRegister()
  {
    $response = $this->get('/register');
    $response->assertStatus(200);
  }

  // public function testPasswordIndex()
  // {
  //   $response = $this->get('/password/index');
  //   $response->assertStatus(200);
  // }

  // public function testGroupIndex()
  // {
  //   $response = $this->get('/group/index');
  //   $response->assertStatus(200);
  // }




}
