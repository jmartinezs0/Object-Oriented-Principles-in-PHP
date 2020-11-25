<?php 

class pharmacy
{
    protected $pacient = ['pacient_id', 'name', 'medicine list', 'status'];

    public static function generate(pacientlist $pacientlist)
    {
        return new static([
            'pacient_id' => $pacient->id,
            'medicine list' => 'Acetaminofen', 'ibuprofeno',

        ]);
    }

    protected function name()
    {

    }

    protected function status()
    {
        
    }

}