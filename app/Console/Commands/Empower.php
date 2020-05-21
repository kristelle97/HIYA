<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class Empower extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'empower {email} {--revert}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Empower user to make an admin.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $user = User::where('email',$this->argument('email'))->first();
        if (! $user){
            $this->alert('User not found!');
            return;
        }

        if ($this->option('revert')) {
            $choice = $this->ask('Do you really want to remove admin rights from '.$user->full_name.' (y/n)?');
            if ( !( strtolower($choice)=='y' ) ){
                $this->line('Exit without modifying user rights.');
                return;
            }

            $user->admin = true;
            $user->save();
            $this->line('User is not an admin anymore.');
        } else {
            $choice = $this->ask('Do you really want to make '.$user->full_name.' an admin (y/n)?');
            if ( !( strtolower($choice)=='y' ) ){
                $this->line('Exit without empowering user.');
                return;
            }

            $user->admin = false;
            $user->save();
            $this->line('User empowered.');
        }
    }
}
