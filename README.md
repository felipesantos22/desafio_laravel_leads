# Desafio FullStack Laravel com phpUnit - Pixerama

## O que será desenvolvido.

Sistema de CRM para uma empresa comercial, onde o sistema deve permitir o gerenciamento de leads.

## Missão essencial

- Desenvolver Front e Backend até 02/02 com as melhores praticas possível.

## O que preciso saber para fazer o projeto?

-  Entender o conceito de Migrations
-  Entender o conceito de Camadas
-  Entender relacionamentos 1:N entre pacientes e consultas
-  Entender relacionamentos 1:N entre médicos e consultas
-  Autenticação JWT

## Requisitos obrigatórios do projeto

 1. Criar migrations para pacientes, médicos, consultas, especialidades e médicos_especialidades
 2. Endpoints de CRUD (Create, Read, Update e Delete) de pacientes com os campos (Nome, idade e Cpf)
 3. Endpoints de CRUD (Create, Read, Update e Delete) de médicos com os campos (Nome e Crm)
 4. Endpoints de CRUD (Create, Read, Update e Delete) de Consultas com os campos (Data, Paciente_Id e Médico_Id)
 5. Endpoints de CRUD (Create, Read, Update e Delete) de Login com os campos (NomeUsuário e Senha)
 6. Controle de acesso aos endpoints utilizando JWT - Os endpoints para cadastrar médicos e pacientes necessitam de autenticação
 7. Validações da informações enviadas - Foram feitas diversas validações, como agendamento com diferença de 30 min de um para o outro
 8. Testes de unidade e TDD - Foram testados as validações de cpf, crm e login
 9. Consultas com dapper - Implementado consulta por nome na classe DoctorRepository usando dapper

<img align="center" alt="felipe-CSS" height="30" width="40" img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" >  
