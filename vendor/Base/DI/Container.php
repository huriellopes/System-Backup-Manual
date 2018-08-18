<?php

namespace Base\DI;

use Base\Database\Database;

class Container
{

	public static function getModel($model)
	{
		$class = "\\App\\Models\\".ucfirst($model);
        return new $class(Database::getDb());
	}

}
