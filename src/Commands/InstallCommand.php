<?php

namespace TheAdeyemiOlayinka\PayTheDev\Commands;

use Illuminate\Console\Command;

class InstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'pay-the-dev:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish Assets for PayTheDev.';

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
        $this->line("<info>PayTheDev by TheAdeyemiOlayinka https://github.com/theadeyemiolayinka</info>");
        $this->line("<info>Setting up PayTheDev...</info>");
        $this->line("");
        sleep(2);

        $this->line("<info>Cooking Greatness! ...</info>");
        $this->line("");
        sleep(2);

        $this->call('vendor:publish', [
            '--tag' => 'pay-the-dev.config'
        ]);

        $this->line("");
        sleep(2);
        $this->line("<info>PayTheDev installed sucessfully!!</info>");
    }
}
