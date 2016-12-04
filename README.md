## Teste de avaliação

#### Questão 1

Arquivo questao_1.php presente no diretório testebdr.

#### Questão 2

Arquivo questao_2.php presente no diretório testebdr.

#### Questão 3

Arquivo questao_3.php presente no diretório testebdr.

#### Questao 4

Diretório questao_4 presente no diretorio testebdr.

A Api em REST utiliza principalmente as classes TarefaModel e TarefasController. Para testar basta configurar a aplicação:

```
// Banco de dados
App/Config/database.php

// URL - App.fullBaseUrl
App/Config/core.php
```
Também é necessário rodar o SQL presente no arquivo **questao_4/schema.sql**.

A aplicação pode ser copiada para um servidor com o php 5.3 instalado para que sejam efetuados os testes. A rota criada para a API é:

```
IP_SERVIDOR/tarefas
```

Foi disponibilizado também neste diretório um provisionamento com a estrutura de um servidor para a aplicação. Ele utiliza o Vagrant, então é necesário que sejam instalados os softwares necessários para utilização. Se esta opção for utilizada basta subir a máquina, rodar os SQL's e alterar o arquivo **hosts** do hospedeiro adicionando o dominio e IP correspondente a máquina. Esta máquina esta com a versão 5.5 do php, mas todas questões abordadas foram feitas pensando na versão 5.3.

```
200.200.1.3    testebdr.dev    www.testebdr.dev
```

Por fim, foi disponibilizado também um arquivo com possíveis testes para a API utilizando Postman ( **questao_4/Testes API Tarefas - BDR.postman_collection.json** ).
