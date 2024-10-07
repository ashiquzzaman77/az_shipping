<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class BackupDatabaseCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-database-command';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Database Backup';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $databaseName = config('database.connections.mysql.database');
        $userName = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $date = date('Y-m-d_H-i-s');
        $fileName = storage_path("app/{$databaseName}_{$date}_backup.sql");

        exec("mysqldump -u $userName -p$password $databaseName > $fileName");
    }
}
