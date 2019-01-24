<?php

namespace Modules\RFOutlet\Binding;

use Modules\Exec\Binding\ExecBinding;

class Sender
{
    private $exec;

    public function __construct()
    {
        $this->exec = new ExecBinding(env('exec_path'));
    }

    public function send($lv_systemCode, $lv_unitCode, $lv_command)
    {
        $la_args = [
            $lv_systemCode,
            $lv_unitCode,
            $lv_command
        ];

        $this->exec->shell_exec('send', $la_args);

    }

    public function codesend($lv_code)
    {

        //$this->exec->shell_exec('codesend', $lv_code);
        exec("sudo ". env('exec_path'). "codesend " . $lv_code);
    }

}

?>

