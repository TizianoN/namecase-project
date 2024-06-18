<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PrimeTest extends TestCase
{
  /**
   * Test for nextPrime endpoint
   */
  public function test_prev_prime_endpoint(): void
  {
    $number_to_test = 1000;

    $response = $this->get('/api/prev-prime/' . $number_to_test);

    $response->assertStatus(200);
  }


  /**
   * Test for prevPrime endpoint
   */
  public function test_next_prime_endpoint(): void
  {
    $number_to_test = 1000;

    $response = $this->get('/api/next-prime/' . $number_to_test);

    $response->assertStatus(200);
  }


  /**
   * Test for primesBetween endpoint
   */
  public function test_primes_between_endpoint(): void
  {
    $number_min = 1;
    $number_max = 1000;

    $response = $this->get('/api/primes-between/' . $number_min . "/" . $number_max);

    $response->assertStatus(200);
  }
}
