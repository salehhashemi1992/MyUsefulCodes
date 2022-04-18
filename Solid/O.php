<?php

interface workable
{
    public function work();
}

class Developer implements workable
{

    public function work()
    {
        return 'develop';
    }
}

class Coder implements workable
{

    public function work()
    {
        return 'code';
    }
}

class Working
{
    public function process($member)
    {
        $member->work();
    }
}

$developer = new Developer();
$coder = new Coder();

$working = new Working();
$working->process($developer);
$working->process($coder);

