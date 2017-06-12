<?php

namespace Appleton\Taxes\Traits;

trait HasTaxBrackets
{
    protected function getTaxBracket($amount, $table)
    {
        $bracket = end($table);
        foreach ($table as $row) {
            if ($row[0] <= $amount) {
                $bracket = $row;
            }
        }
        return $bracket;
    }

    protected function getTaxAmountFromTaxBrackets($amount, $table)
    {
        $bracket = $this->getTaxBracket($amount, $table);

        return isset($bracket) ? ($amount - $bracket[0]) * $bracket[1] + $bracket[2] : 0;
    }
}
