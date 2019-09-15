<?php


class ResponseData
{
    private $amountDue; //String
    private $rrr; //String

    /**
     * @return mixed
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @param mixed $amountDue
     */
    public function setAmountDue($amountDue)
    {
        $this->amountDue = $amountDue;
    }

    /**
     * @return mixed
     */
    public function getRrr()
    {
        return $this->rrr;
    }

    /**
     * @param mixed $rrr
     */
    public function setRrr($rrr)
    {
        $this->rrr = $rrr;
    }

}