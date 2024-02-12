# Case Kabum - CRUD PHP

Crud desenvolvido base no seguinte case:
1 - Uma área administrativa onde o(s) usuário(s) devem acessar através de login e senha.

2 - Criar um gerenciador de clientes (Listar, Incluir, Editar e Excluir)

    2.1 - O cadastro do Cliente deve conter: Nome; Data Nascimento;CPF; RG; Telefone.
    2.2 - O Cliente pode ter 1 ou N endereços.

## 🚀 Começando

Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.


### 📋 Pré-requisitos

- [Composer](https://getcomposer.org/)

- [ Docker: Necessário para rodar o container com a aplicação](https://docs.docker.com/get-docker/)

- [docker-compose: Necessário para subir o container](https://docs.docker.com/compose/install/)


### 🔧 Instalação

Clone o repositório:


```
 git clone https://github.com/GiovaniBoff/case-kabum.git
```

Instalando dependecias:

```
 composer update
```

Para executar a aplicação é necessário subir os containers com a aplicaçao e o banco de dados.

Subindo os containers:

```
 docker-composer up -d ou docker compose up -d
```

<!-- ## ⚙️ Executando os testes

Explicar como executar os testes automatizados para este sistema.

Para rodar os testes unitarios da aplicação, rode o seguinte comando:
```
 composer test
``` -->

## 🛠️ Construído com

* [PHP](https://www.php.net/) - Linguagem utilizada.
* [Composer](https://getcomposer.org/) - Gerenciador de dependencias.
* [BootStrap](https://getbootstrap.com/) - Framework de estilizaçao utilizado.
* [Mysql](https://www.mysql.com/) - Banco de dados utilizado.
* [Docker](https://docs.docker.com/get-docker) - Utilizado para gereciar containers.


---
⌨️ com ❤️ por [Giovani Boff](https://github.com/GiovaniBoff) 😊