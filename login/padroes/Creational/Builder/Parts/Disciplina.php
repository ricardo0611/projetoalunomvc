<?php

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Disciplina
{
    /**
     * @var object[]
     */
    private $dados = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setPart($key, $value)
    {
        $this->dados[$key] = $value;
    }
}
