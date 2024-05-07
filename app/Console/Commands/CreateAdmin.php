<?php

// app/Console/Commands/CreateAdmin.php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

class CreateAdmin extends Command
{
    protected $signature = 'admin:create';
    protected $description = 'Create a new admin user';

    public function handle()
    {
        $name = $this->ask('Enter the admin\'s name:');
        $email = $this->ask('Enter the admin\'s email:');
        $password = $this->secret('Enter the admin\'s password:');

        Admin::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
        ]);

        $this->info('Admin created successfully!');
    }
}
