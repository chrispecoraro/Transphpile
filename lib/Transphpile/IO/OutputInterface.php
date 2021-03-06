<?php

namespace Transphpile\IO;

interface OutputInterface
{
    public function output($message);
    public function verbose($message, $tag);
    public function veryVerbose($message, $tag);
    public function debug($message, $tag);
}
