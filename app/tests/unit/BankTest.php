<?php


class BankTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    public function testShouldGetBankListWithItems()
    {
        $bankRepo = new \b3nkos\PlaceToPayClient\Bank\BankRepo(new BankModelMock());
        $bankList = $bankRepo->getBankList();

        $this->assertGreaterThan(0, count($bankList));
        $this->assertContainsOnlyInstancesOf(\b3nkos\PlaceToPayClient\Bank\Bank::class, $bankList);
    }
}

final class BankModelMock implements \b3nkos\PlaceToPayClient\Bank\BankModelInterface
{

    /**
     * Return the bank list
     * @return array
     */
    public function getBankList()
    {
        $bankList = [
            ['bankCode' => 123, 'bankName' => 'Bank1'],
            ['bankCode' => 123223, 'bankName' => 'Bank2'],
            ['bankCode' => 122882, 'bankName' => 'Bank3'],
            ['bankCode' => 177553, 'bankName' => 'Bank4']
        ];

        return $bankList;
    }
}