<?php

namespace App\Console\Commands;

use App\Models\Banner;
use Illuminate\Console\Command;

class BannerExpiredCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'banner:expires';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Turn the status banner to inactive after it expires';

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
     * @return int
     */
    public function handle()
    {
        $expires_banners=Banner::where(function($query){
            $query->where('is_active',1)->where('end_date','<',now());
        })->get()->each(function($b){
            $b->is_active=0;
            $b->save();
        });
    }
}
