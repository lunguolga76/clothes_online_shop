<?php

namespace App\Console\Commands;

use App\Events\NewTextInExample;
use Illuminate\Cache\Repository;
use Illuminate\Console\Command;

class CacheExampleCommand extends Command
{
    private const CASH_KEY='cache_secret_key';

    private Repository $cache;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'example:cache {text?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(Repository $cache)
    {
        parent::__construct();
        $this->cache=$cache;
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $text=$this->argument('text') ?? 'empty';

        $values=$this->cache->get(static::CASH_KEY,[]);

        if(isset(  $values[$text])){
            $values[$text]++;
        }else{
            event(new NewTextInExample($text));
            $values[$text]=1;
        }

        $this->table(array_keys($values),[$values]);

        $this->cache->set(static::CASH_KEY,$values);

        return 0;
    }
}
