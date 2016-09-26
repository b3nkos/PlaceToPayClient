<?php

namespace b3nkos\PlaceToPayClient\Bank;


interface BankModelInterface
{
    /**
     * Return the bank list
     * @return array
     */
    public function getBankList();
}