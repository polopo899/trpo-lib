<?php

namespace feofanov;

use core\LogAbstract;
use core\LogInterface;

class MyLog extends LogAbstract implements LogInterface
{
    public function _write()
    {
        foreach ($this->log as $solution)
        {
            echo $solution;
        }
        $date = new \DateTime();
        $file = "./Log/". $date->format('d-m-Y\TH_i_s_u').".log";
        if (!is_dir('./Log/'))
        {
            mkdir("./Log/");
        }
        file_put_contents($file, $this->log);
    }
    public static function log(string $str): void
    {
        array_push(MyLog::Instance()->log, $str);
    }

    public static function write(): void
    {
        MyLog::Instance()->_write();
    }
}