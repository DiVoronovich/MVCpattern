<?php

declare(strict_types=1);

/**
 * Responsible for authors list output.
 */
class ViewDB
{
    /**
     * @param string[][] $authorsList
     * @return void
     */
    public function output(array $authorsList): void
    {
        foreach ($authorsList as $row) {
            print("Author: " . $row['author'] . "<br>");
        }
    }
}