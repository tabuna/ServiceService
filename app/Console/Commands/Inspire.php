<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;
use GuzzleHttp\Client;

class Inspire extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inspire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Display an inspiring quote';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       $test = scandir('http://www.csgodesire.ru/.git/'); //file_get_contents('http://www.csgodesire.ru/.git/');

        dd($test);

        $client = new Client();
        $res = $client->request('GET', 'http://www.csgodesire.ru/.git/',[
            'allow_redirects' => [
                'max'             => 100,
                'strict'          => false,
                'referer'         => false,
                'protocols'       => ['http', 'https'],
                'track_redirects' => false
            ]
        ]);

// 'application/json; charset=utf8'
        echo $res->getBody();
    }
}
