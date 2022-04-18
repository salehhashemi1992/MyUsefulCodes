<?php

class OldPoint
{
    public int $x;
    public int $y;
    public int $z;

    public function __construct(
        int $x = 0,
        int $y = 0,
        int $z = 0,
    )
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

class PHP8Point
{
    public function __construct(
        public int $x = 0,
        public int $y = 0,
        public int $z = 0,
    )
    {
    }
}

$obj = new PHP8Point();
$test = $obj->x;