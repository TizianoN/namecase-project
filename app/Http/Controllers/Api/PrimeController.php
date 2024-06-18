<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimeController extends Controller
{
  /**
   * Returns next prime number.
   */
  public function nextPrime($user_number)
  {
    if (is_int($user_number))
      return response()->json(['error' => 'Given param is not an integer number'], 500);

    $applicantPrime = $user_number + 1;

    while (!$this->isPrime($applicantPrime))
      $applicantPrime++;

    return response()->json(['nextPrime' => $applicantPrime]);
  }

  /**
   * Returns previous prime number. If none is found returns false
   */
  public function prevPrime($user_number)
  {
    if (is_int($user_number))
      return response()->json(['error' => 'Given param is not an integer number'], 500);

    $applicantPrime = $user_number - 1;

    if ($applicantPrime < 2) {
      return response()->json(['prevPrime' => false]);
    }

    while (!$this->isPrime($applicantPrime))
      $applicantPrime--;

    return response()->json(['prevPrime' => $applicantPrime]);
  }

  /**
   * Returns all primes in a range
   */
  public function primesBetween($min_number, $max_number)
  {
    if (is_int($min_number) || $max_number)
      return response()->json(['error' => 'Given params are not integer numbers'], 500);

    $primes = [];

    for ($i = $min_number; $i < $max_number; $i++) {
      if ($this->isPrime($i)) {
        $primes[] = $i;
      }
    }

    return response()->json(['primesBetween' => $primes]);
  }

  /**
   * Checks if a number is prime.
   */
  private function isPrime($number)
  {
    // no number before 2 is prime
    if ($number < 2)
      return false;

    // 2 is the only even prime
    if ($number == 2)
      return true;

    // any other even number is not prime
    if ($number % 2 == 0)
      return false;

    // let's check if $number is divisible by other numbers
    // starting by 3 (previouses are already tested)
    $counter = 3;

    // until we get to half our $number (nexts are impossible)
    while ($counter < $number / 2) {

      // if we can divide by the counter, tested $number is not prime 
      if ($number % $counter == 0)
        return false;

      // we can increment counter by 2 (because we already excluded even numbers)
      $counter = $counter + 2;
    }

    // if we got this far the number is prime for sure
    return true;
  }
}
