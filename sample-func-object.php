<?php
class cls
{
	function a()
	{
		return 3;
	}
	function b()
	{
		return $this;
	}
}

function f()
{
	return new cls();
}
function f2()
{
	return range(0,10);
}

echo f2()[5],"=5",PHP_EOL;
echo f()->a(),"=3",PHP_EOL;
echo f()->b()->a(),"=3",PHP_EOL;