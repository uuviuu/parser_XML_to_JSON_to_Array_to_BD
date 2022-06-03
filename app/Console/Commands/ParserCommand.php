<?php

namespace App\Console\Commands;

use Exception;
use Parser;

use App\Models\Parser as ParserModel;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ParserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:parser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activates the controller for parsing the XML file';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    // функция отправки в БД
    public function parser($data)
    {
        try {
            DB::beginTransaction();
            ParserModel::firstOrCreate($data);
            DB::commit();
        } catch (Exception $exception) {
            DB::rollback();
            abort(500);
        }
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $withoutArray = Parser::parser();

        foreach ($withoutArray as $array) {
            $this->parser($array);
        }
        echo "\nОтправка XML в БД выполнена успешно\n";
    }
}
