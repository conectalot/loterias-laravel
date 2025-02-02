<?php

namespace Conectalot\Loterias\Enums;

enum ModalidadeLoterica: string {
    case DiaDeSorte = 'diadesorte';
    case DuplaSena = 'duplasena';
    case Federal = 'federal';
    case Loteca = 'loteca';
    case Lotofacil = 'lotofacil';
    case Lotomania = 'lotomania';
    case MaisMilionaria = 'maismilionaria';
    case MegaSena = 'megasena';
    case Quina = 'quina';
    case SuperSete = 'supersete';
    case Timemania = 'timemania';

    public static function slugs(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function getClass()
    {
        return match ($this) {
            self::DiaDeSorte => \Conectalot\Loterias\Models\Modalidades\DiaDeSorte::class,
            self::DuplaSena => \Conectalot\Loterias\Models\Modalidades\DuplaSena::class,
            self::Federal => \Conectalot\Loterias\Models\Modalidades\Federal::class,
            self::Loteca => \Conectalot\Loterias\Models\Modalidades\Loteca::class,
            self::Lotofacil => \Conectalot\Loterias\Models\Modalidades\Lotofacil::class,
            self::Lotomania => \Conectalot\Loterias\Models\Modalidades\Lotomania::class,
            self::MaisMilionaria => \Conectalot\Loterias\Models\Modalidades\MaisMilionaria::class,
            self::MegaSena => \Conectalot\Loterias\Models\Modalidades\MegaSena::class,
            self::Quina => \Conectalot\Loterias\Models\Modalidades\Quina::class,
            self::SuperSete => \Conectalot\Loterias\Models\Modalidades\SuperSete::class,
            self::Timemania => \Conectalot\Loterias\Models\Modalidades\Timemania::class,
        };
    }

    public function getTitulo()
    {
        return $this->getClass()::TITULO;
    }

    public function getTitle()
    {
        return $this->getTitulo();
    }

    public function getName()
    {
        return $this->getTitulo();
    }

    public function getConcursoClass()
    {
        return $this->getClass()::CLASS_CONCURSO;
    }
}
