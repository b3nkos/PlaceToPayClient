<?php

namespace b3nkos\PlaceToPayClient\Bank;


interface BankRepoInterface
{
    /**
     * return the bank list
     * @return Bank[]
     */
    public function getBankList();

}