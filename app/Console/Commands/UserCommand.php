<?php

namespace App\Console\Commands;

use App\Services\UserServices;
use Illuminate\Console\Command;

class UserCommand extends Command
{
    public function __construct(public UserServices $userServices)
    {
        parent::__construct();
    }

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Lista todos os usuarios';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $users = $this->userServices->list();

        $this->table(
            ['id', 'Name', 'Email', 'email_verified_at', 'created_at', 'updated_at'],
            $users
        );
    }
}
