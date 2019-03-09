<?php

namespace Config;

class Configenv
{

    public function setFileEnv($file)
    {
        if(!file_exists($file)){
            throw new \Exception("Configuration file not found in directory:".$file);
        }

        $this->setConfig($file);
    }

    private function setConfig($file)
    {
        $line = $this->removeComments($file);

        foreach ($line as $key => $value) {
            putenv($value);
        }
    }

    private function removeComments($file)
    {
        $line = file($file);

        for ($i=0; $i <= count($line); $i++) {
            if(@!empty(strstr($line[$i], '#'))){
                unset($line[$i]);
            }
            if(!empty($line[$i])){

              $line[$i] = str_replace("\n", "", $line[$i]);
            }
        }
        return $line;
    }

}
