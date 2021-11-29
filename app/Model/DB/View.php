<?php

declare(strict_types=1);

namespace Coffee\Model\DB;

use Coffee\Model\DB;
use Exception;

class View extends DB
{
    /**
     * @param string $sql
     * @return string[][]
     * @throws Exception
     */
    public static function execute(string $sql): array
    {
        $result = mysqli_query(self::getConnection(), $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}