<?php

abstract class House
{
	function introduce()
	{
		print 'House '.$this->getHouseName().' of '.$this->getHouseSeat().' : "'.$this->getHouseMotto().'"'."\n";
	}
	abstract function getHouseName();
	abstract function getHouseSeat();
	abstract function getHouseMotto();
}
