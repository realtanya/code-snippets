<?php

/**
 * PasswordGenerator
 */
class PasswordGenerator
{
    public $num;

    /**
     * requires number of  characters  you wish to generate
     *
     * @param  mixed $num
     * @return void
     */
    public function __construct($num)
    {
        $this->num = $num;
    }

    /**
     * generate a random password
     *
     * @return void
     */
    public function generate()
    {
        $chars = '_+():><@#%$&*!0123456789abcdefghijklmnopqrstvwZABCDEFGHIJKLMNOPQRSTVUXWz';
        $str = '';

        for ($i = 0; $i < $this->num; $i++) {
            $index = rand(0, strlen($chars) - 1);
            $str .= $chars[$index];
        }

        return $str;
    }
}
