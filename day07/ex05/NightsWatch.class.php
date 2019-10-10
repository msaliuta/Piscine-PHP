<?php

class NightsWatch implements IFighter
{
	public function fight()
	{

	}
	public function recruit($class)
	{
		if ($class instanceof IFighter)
		{
			$class->fight();
		}
	}
}
