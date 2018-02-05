<?php
/**
 * Created by PhpStorm.
 * User: markus
 * Date: 07.11.17
 * Time: 12:28
 */

namespace Modules\Exec\Binding;

class ExecBinding
{
    private $execPath;

    public function __construct($lv_execPath)
    {
        $this->execPath = $lv_execPath;
    }

    public function getExecPath()
    {
        return $this->execPath;
    }

    public function shell_exec($lv_shell, $la_args)
    {
        $lv_argString = null;

        if (is_array($la_args)) {
            foreach ($la_args as $la_arg) {
                $lv_argString = $lv_argString . " " . $la_arg;
            }
        } else {
            $lv_argString = $la_args;
        }

        shell_exec("sudo " . $this->getExecPath() . $lv_shell . " " . $lv_argString);
    }

}
