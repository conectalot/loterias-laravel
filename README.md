# ConectaLot Loterias

## Descrição

Pacote que provê diversas funcionalidades das Loterias CAIXA para aplicações desenvolvidas em Laravel.


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
php artisan vendor:publish --provider="ConectaLot\Loterias\LoteriasServiceProvider"
```
