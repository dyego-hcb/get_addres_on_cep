# Meu CEP - Projeto de Consulta de Endereço por CEP

Este repositório contém duas versões de um projeto simples para consulta de endereço através do CEP, implementado em PHP e HTML.

## V1: get_addres_with_cep_v1

### Descrição
A versão V1 do projeto consiste em uma aplicação básica em PHP e HTML para consulta de endereço utilizando a API do ViaCEP. Esta versão inicial foi submetida como parte de um processo seletivo para uma vaga de backend, onde foram identificados diversos erros e problemas de implementação.

### Principais Erros e Correções Realizadas:
- Correção do atributo `action` no formulário para `index.php`.
- Fechamento correto da tag `<form>` após o botão de enviar.
- Melhorias na estrutura do HTML para seguir boas práticas de codificação.
- Correção na chamada da função `get_address` para utilizar a variável correta (`$cep`).
- Ajustes na exibição dos dados do endereço obtidos da API.

### Documentação
Na pasta `doc`, você encontrará documentações detalhadas dos erros identificados, suas soluções e sugestões de melhorias para a versão V1 do projeto.

## V2: get_addres_with_cep_v2

### Descrição
A versão V2 do projeto é uma refatoração da V1, introduzindo melhorias significativas no código e na apresentação visual utilizando CSS para estilização. Além disso, foi adicionada uma classe PHP (`Address`) para encapsular a lógica de obtenção de endereço.

### Funcionalidades Adicionais:
- Utilização de CSS para estilização e posicionamento dos elementos na página.
- Introdução da classe `Address` no namespace `Entities` para gerenciar a obtenção e apresentação dos dados do endereço.
- Melhorias na usabilidade e na apresentação dos resultados da consulta.

### Documentação
Na pasta `docs`, você encontrará um documento detalhado com as melhorias implementadas na versão V2, além de sugestões adicionais para futuras atualizações e refinamentos.

## Instruções de Uso

Para executar o projeto localmente:

1. Clone o repositório:
