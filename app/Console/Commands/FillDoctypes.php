<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Doctype;

class FillDoctypes extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'fill:doctypes';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fill Doctypes on database';

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
        if(Doctype::count() == 0)
        {
            $var = new Doctype;
            $var->code = 'B';
            $var->description = 'BOLETA';
            $var->save();

            $var = new Doctype;
            $var->code = 'CH';
            $var->description = 'CHEQUE';
            $var->save();

            $var = new Doctype;
            $var->code = 'F A';
            $var->description = 'FACTURA ESTÁNDAR AFECTA';
            $var->save();

            $var = new Doctype;
            $var->code = 'F E';
            $var->description = 'FACTURA ESTÁNDAR EXENTA';
            $var->save();

            $var = new Doctype;
            $var->code = 'FE';
            $var->description = 'FACTURA ELECTRÓNICA';
            $var->save();

            $var = new Doctype;
            $var->code = 'FEA';
            $var->description = 'FACTURA ELECTRÓNICA AFECTA';
            $var->save();

            $var = new Doctype;
            $var->code = 'FEE';
            $var->description = 'FACTURA ELECTRÓNICA EXENTA';
            $var->save();

            $var = new Doctype;
            $var->code = 'OT';
            $var->description = 'OTROS';
            $var->save();

            echo "Done!\n";
        }
        else
            echo "Data already on database\n";
    }
}