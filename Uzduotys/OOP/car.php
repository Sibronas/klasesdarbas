<?php

class Car
{
    public string $spalva;
    public string $greitis;
    public int $duruKiekis;
    private float $rida = 0;

    /**
     * Car constructor.
     * @param string $spalva
     * @param int $duruKiekis
     * @param float|int $rida
     */
    public function __construct(string $spalva, int $duruKiekis = 2,float $rida = 0)
    {
        $this->spalva = $spalva;
        $this->duruKiekis = $duruKiekis;
        $this->rida = $rida;
    }


    public function vaziuoti(string $greitis, float $laikas = 1): void
    {
        $this->greitis = $greitis;

        echo "{$this->gautiSpalva()} automobilis vaziuoja ".$this->greitis." greiciu";

        $this->rida += (float)$this->greitis * $laikas;
    }

    public function gautiSpalva(): string
    {
        return $this->spalva;
    }

    public function gautiDuruKieki(): int
    {
        return $this->duruKiekis;
    }

    public function gautiRida(): float
    {
        return $this->rida;
    }

}

