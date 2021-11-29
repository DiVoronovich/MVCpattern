<?php

declare(strict_types=1);

namespace Coffee\Model\DB;

use Coffee\Model\DB;
use Exception;

class Insert extends DB
{
    /**
     * @param string $sql
     * @return void
     * @throws Exception
     */
    public static function execute(string $sql): void
    {
        mysqli_query(self::getConnection(), $sql);
    }
}