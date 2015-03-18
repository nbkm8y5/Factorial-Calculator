<?php

class Factorial
{

    /**
     * @var
     */
    private $userNumber;

    /**
     * @return mixed
     */
    public function getUserNumber()
    {
        return $this->userNumber;
    }

    /**
     * @param $number
     * @return int
     */
    public function calculate($number)
    {
        $this->userNumber = $number;

        if ($this->userNumber < 2) {
            return 1;
        } else {
            return ($this->userNumber * $this->calculate($this->userNumber - 1));
        }
    }
}