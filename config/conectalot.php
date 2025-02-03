<?php

return [

    /**
     * Se o pacote não usar a conexão de banco de dados padrão do Laravel, você pode definir a conexão
     * Não esqueça de adicionar a conexão no arquivo de configuração do banco de dados do Laravel
     */
    'conectalot_db_conection' => env('CONECTALOT_DB_CONNECTION', env('DB_CONNECTION', 'mysql')),

    'modalidades' => [
        'megasena' => [
            'nome' => 'Mega Sena',
            'tabela_resultados' => "resultados_megasena",
            'tabela_premiacoes' => "ganhadores_megasena",
        ],
        'quina' => [
            'nome' => 'Quina',
            'tabela_resultados' => "resultados_quina",
            'tabela_premiacoes' => "ganhadores_quina",
        ],
        'lotofacil' => [
            'nome' => 'Lotofácil',
            'tabela_resultados' => "resultados_lotofacil",
            'tabela_premiacoes' => "ganhadores_lotofacil",
        ],
        'lotomania' => [
            'nome' => 'Lotomania',
            'tabela_resultados' => "resultados_lotomania",
            'tabela_premiacoes' => "ganhadores_lotomania",
        ],
        'timemania' => [
            'nome' => 'Timemania',
            'tabela_resultados' => "resultados_timemania",
            'tabela_premiacoes' => "ganhadores_timemania",
        ],
        'diadesorte' => [
            'nome' => 'Dia de Sorte',
            'tabela_resultados' => "resultados_diadesorte",
            'tabela_premiacoes' => "ganhadores_diadesorte",
        ],
        'duplasena' => [
            'nome' => 'Dupla Sena',
            'tabela_resultados' => "resultados_duplasena",
            'tabela_premiacoes' => "ganhadores_duplasena",
        ],
        'federal' => [
            'nome' => 'Federal',
            'tabela_resultados' => "resultados_federal",
            'tabela_premiacoes' => "ganhadores_federal",
        ],
        'supersete' => [
            'nome' => 'Super Sete',
            'tabela_resultados' => "resultados_supersete",
            'tabela_premiacoes' => "ganhadores_supersete",
        ],
        'loteca' => [
            'nome' => 'Loteca',
            'tabela_resultados' => "resultados_loteca",
            'tabela_premiacoes' => "ganhadores_loteca",
        ],
        'maismilionaria' => [
            'nome' => '+Milionária',
            'tabela_resultados' => "resultados_maismilionaria",
            'tabela_premiacoes' => "ganhadores_maismilionaria",
        ],
    ],
];
