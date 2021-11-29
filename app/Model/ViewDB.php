<?php

declare(strict_types=1);

namespace Coffee\Model;

/**
 * Responsible for authors list output.
 */
class ViewDB
{
    /**
     * @param string[][] $authorsList
     * @param string $columnName
     * @return void
     */
    public function output(array $authorsList, string $columnName): void
    {
        foreach ($authorsList as $row) {
            print($columnName . ": " . $row[$columnName] . "<br>");
        }
    }
}