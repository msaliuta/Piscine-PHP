<?php

class Jaime extends Lannister
{
	function sleepWith($tyr)
	{
		if ($tyr instanceof Cersei)
			print ("With pleasure, but only in a tower in Winterfell, then.\n");
		else
			parent::sleepWith($tyr);
	}
}
