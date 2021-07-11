<?php

namespace Service;

use Contract\ICircle;
use Contract\ISquare;
use Lib\CircleAreaLib;
use Lib\SquareAreaLib;

class AdapterClass implements ISquare, ICircle
{
    private CircleAreaLib $circleAreaLib;
    private SquareAreaLib $SquareAreaLib;

    public function __conctruct(CircleAreaLib $circleAreaLib, SquareAreaLib $squareAreaLib)
    {
        $this->SquareAreaLib = $squareAreaLib;
        $this->circleAreaLib = $circleAreaLib;
    }

    function circleArea(int $circumference)
    {
        $diagonal = $circumference/M_PI;
        return $this->circleAreaLib->getCircleArea($diagonal);
    }

    function squareArea(int $sideSquare)
    {
        $diagonal = sqrt(2) * $sideSquare;
        return $this->SquareAreaLib->getSquareArea($diagonal);
    }
}