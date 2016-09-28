<?php

namespace b3nkos\PlaceToPayClient\Bank;

final class BankRepo implements BankRepoInterface
{
    /**
     * @var BankModelInterface
     */
    private $model;

    public function __construct(BankModelInterface $bankModel)
    {
        $this->model = $bankModel;
    }

    /**
     * return the bank list
     * @return Bank[]
     */
    public function getBankList()
    {
        $bankList = [];
        $bankListArray = $this->model->getBankList();

        foreach ($bankListArray as $bankArrayItem) {
            $bank = new Bank($bankArrayItem['bankCode'], $bankArrayItem['bankName']);
            $bankList[] = $bank;
        }

        return $bankList;
    }
}
