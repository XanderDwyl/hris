<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PDO;
use PDOException;

class DatabaseCreateCommand extends Command
{
  /**
   * The console command name.
   *
   * @var string
   */
  protected $name = 'db:create';

  /**
   * The name and signature of the console command.
   *
   * @var string
   */
  protected $signature = 'db:create';

  /**
   * The console command description.
   *
   * @var string
   */
  protected $description = 'This command creates a new database';

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
   * Create database.
   * command: php artisan db:create
   *
   * @return success or error message
   */
  public function handle()
  {
    $database = env('DB_DATABASE', false);

    if (! $database) {
      return $this->info('Skipping creation of database as env(DB_DATABASE) is empty');
    }

    try {
      $pdo = $this->getPDOConnection(env('DB_HOST'), env('DB_PORT'), env('DB_USERNAME'), env('DB_PASSWORD'));
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $pdo->query("CREATE DATABASE IF NOT EXISTS $database");
      $pdo->query("use $database");

      $this->info(sprintf('Successfully created %s database', $database));
    } catch (PDOException $exception) {
      $this->error(sprintf('Failed to create %s database, %s', $database, $exception->getMessage()));
    }
  }

  /**
   * @param  string $host
   * @param  integer $port
   * @param  string $username
   * @param  string $password
   * @return PDO
   */
  private function getPDOConnection($host, $port, $username, $password)
  {
    return new PDO(sprintf('mysql:host=%s;port=%d;', $host, $port), $username, $password);
  }
}
