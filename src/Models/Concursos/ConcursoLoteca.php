<?php

namespace Conectalot\Loterias\Models\Concursos;

use Conectalot\Loterias\Models\ConcursoLoterico;
use Conectalot\Loterias\Models\Modalidades\Loteca;
use Conectalot\Loterias\Utils\DezenasCollection;

class ConcursoLoteca extends ConcursoLoterico
{
    protected $table = Loteca::DB_TABLE_RESULTADOS;

    public function getDezenasAttribute()
    {
        $dezenas = [];

        foreach ($this->resultado_equipe_esportiva as $key => $partida) {
            $dezena = $key + 1; // As partidas começam do índice 0, mas as dezenas começam do 1

            if($partida["nuGolEquipeUm"] == $partida["nuGolEquipeDois"]) {
                $dezenas[] = ($dezena * 3) - 1; // Empate
            } else if($partida["nuGolEquipeUm"] > $partida["nuGolEquipeDois"]) {
                $dezenas[] = ($dezena * 3) - 2; // Vitória do time 1
            } else {
                $dezenas[] = $dezena * 3; // Vitória do time 2
            }
        }

        return new DezenasCollection($dezenas);
    }
}
