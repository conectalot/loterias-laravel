# ConectaLot Loterias

Esse pacote foi desenvolvido pela ConectaLot e provê diversas funcionalidades das Loterias CAIXA para aplicações desenvolvidas em Laravel.


## Instalação

Para instalar o pacote, execute o comando abaixo:

```bash
composer require conectalot/loterias-laravel
```

Atenção: Este pacote ainda está privado, então será necessário incluir previamente no seu composer.json o repositório do pacote:

```json
{
    "repositories": [
        {
            "type": "vcs",
            "url": "git@github.com:conectalot/loterias-laravel.git"
        }
    ]
}
```

Tenha a certeza de que você possui acesso a esse repositório com uma chave SSH válida.

## Configuração

Para publicar o arquivo de configuração, execute o comando abaixo:

```bash
php artisan vendor:publish --provider="Conectalot\Loterias\LoteriasServiceProvider" --tag=config
```

Se o banco de dados de Loterias for diferente do banco de dados principal da sua aplicação, altere a configuração no arquivo `config/loterias.php`:

```php
return [
    'conectalot_db_conection' => 'mysql_conectalot',
    //...
];
```

## Utilização

### Consultar resultados

Para consultar o resultado de um **concurso específico** de uma modalidade lotérica, use o método `concurso($numero)` do facade correspondente. 

```php
use ConectaLot\Loterias\Facades\MegaSena;

//Retorna o resultado do concurso 2550 da Mega-Sena
$resultado = MegaSena::concurso(2550);
```

Para obter o resultado do **último concurso**, use o método `ultimoConcurso()`:
```php
use ConectaLot\Loterias\Facades\Lotofacil;

//Retorna o resultado do último concurso da Lotofácil
$resultado = Lotofacil::ultimoConcurso();
```

Tabela de facades disponíveis:

| Modalidade Lotérica | Facade                                     |
|---------------------|--------------------------------------------|
| Mega Sena           | Conectalot\Loterias\Facades\MegaSena       |
| Lotofácil           | Conectalot\Loterias\Facades\Lotofacil      |
| Quina               | Conectalot\Loterias\Facades\Quina          |
| Lotomania           | Conectalot\Loterias\Facades\Lotomania      |
| Timemania           | Conectalot\Loterias\Facades\Timemania      |
| Dupla Sena          | Conectalot\Loterias\Facades\DuplaSena      |
| Dia de Sorte        | Conectalot\Loterias\Facades\DiaDeSorte     |
| Super Sete          | Conectalot\Loterias\Facades\SuperSete      |
| Federal             | Conectalot\Loterias\Facades\Federal        |
| Loteca              | Conectalot\Loterias\Facades\Loteca         |
| +Milionária         | Conectalot\Loterias\Facades\MaisMilionaria |
