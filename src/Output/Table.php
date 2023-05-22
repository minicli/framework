<?php

declare(strict_types=1);

namespace Minicli\Framework\Output;

final class Table
{
    private const MIN_COLUMN_SIZE = 5;

    /**
     * @param array<int,string> $headers
     * @param array<int,array<int,string>> $rows
     */
    public function __construct(
        private array $headers,
        private array $rows = [],
    ) {
    }

    /**
     * @param array<int,string> $row
     */
    public function addRow(array $row): Table
    {
        $this->rows[] = $row;

        return $this;
    }

    public function totalRows(): int
    {
        return count($this->rows);
    }

    public function render(): string
    {
        $table = [$this->headers, ...$this->rows];
        $columnSizes = $this->calculateColumnSizes($table);

        $formattedTable = '';
        foreach ($table as $row) {
            $formattedTable .= $this->getRowAsString($row, $columnSizes);
        }

        return $formattedTable;
    }

    /**
     * @param array<int,array<int,string>> $table
     * @return array<int,int>
     */
    private function calculateColumnSizes(array $table, int $minColSize = self::MIN_COLUMN_SIZE): array
    {
        $columnSizes = [];

        foreach ($table as $row) {
            $columnCount = 0;

            foreach ($row as $cell) {
                $columnSizes[$columnCount] = $columnSizes[$columnCount] ?? $minColSize;
                if (mb_strlen($cell) >= $columnSizes[$columnCount]) {
                    $columnSizes[$columnCount] = mb_strlen($cell) + 2;
                }
                $columnCount++;
            }
        }

        return $columnSizes;
    }

    /**
     * @param array<int,string> $row
     * @param array<int,int> $columnSizes
     */
    private function getRowAsString(array $row, array $columnSizes): string
    {
        $formattedRow = '';

        foreach ($row as $column => $cell) {
            $formattedRow .= $this->getPaddedString($cell, $columnSizes[$column]);
        }

        return $formattedRow;
    }

    private function getPaddedString(string $cell, int $colSize = self::MIN_COLUMN_SIZE): string
    {
        return str_pad($cell, $colSize);
    }
}
