<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class AuthTest extends TestCase
{
  // If the user goes to the index page then they will be moved to the
  // login page. This will be changed as soon as i have something to
  // do on the index page.
  // At the moment I cant think of anything.
  public function testIndex()
  {
    $response = $this->get('/');
    $response->assertRedirect('/login');
  }

  // If the user trys to go to the homepage without being logged in
  // then the user will be moved to the login page
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

  public function testGroupShow()
  {
    $response = $this->get('/group/show/1');
    $response->assertRedirect('/login');
  }

  public function testGroupJoin()
  {
    $response = $this->get('/group/show/1/join');
    $response->assertRedirect('/login');
  }

  public function testGroupEdit()
  {
    $response = $this->get('/group/show/1/edit');
    $response->assertRedirect('/login');
  }

  public function testGroupDelete()
  {
    $response = $this->get('/group/show/1/delete');
    $response->assertRedirect('/login');
  }

  public function testGroupList()
  {
    $response = $this->get('/group/list');
    $response->assertRedirect('/login');
  }
}
