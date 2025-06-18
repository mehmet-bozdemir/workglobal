<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestUserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run()
  {
    $user = User::create([
      'name' => 'Test User',
      'email' => 'test@test.com',
      'email_verified_at' => Carbon::now(),
      'password' => Hash::make('test1234'), // Password: test1234
    ]);

    return $user;
  }
}
