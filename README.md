# 🎬 Projeto de Gerenciamento de Filmes

Este é um sistema web para gerenciamento de filmes, desenvolvido em PHP utilizando a arquitetura MVC. O projeto permite cadastrar, editar, listar e excluir filmes, com suporte a autenticação de usuários, upload de imagens e integração com banco de dados.

## 🛠️ Tecnologias e Conceitos Utilizados

- **PHP** com orientação a objetos
- **Arquitetura MVC** (Model-View-Controller)
- **Superglobais** (`$_POST`, `$_GET`, `$_SESSION`, `$_FILES`, etc.)
- **Banco de Dados** (MySQL ou MariaDB)
- **Validações** (dados de entrada do usuário)
- **Autenticação e Criptografia** (senhas com `password_hash`)
- **Upload de Imagens** para os filmes
- **Partials** para reutilização de componentes HTML
- **Métodos HTTP** (GET, POST)
- **Componentes PHP** (como controllers, models, helpers)

## 📁 Estrutura de Pastas

<!-- 
<img src="https://raw.githubusercontent.com/PKief/vscode-material-icon-theme/ec559a9f6bfd399b82bb44393651661b08aaf7ba/icons/folder-github-open.svg" width="80" /> -->


```bash
/meu-projeto/
│
├── /app/
│ ├── /Controllers/
│ ├── /Models/
│ ├── /Views/
  |     ├── /partials/
│ └── /Helpers/
│
├── /public/
│ ├── index.php
│ ├── /css/
  ├── /js/
│ └── /img/
│
├── /config/
│ └── database.sqlite
│
├── composer.json
└── README.md
```

## ⚙️ Funcionalidades

- Cadastro e login de usuários
- CRUD completo de filmes
- Upload de imagem da capa do filme
- Validação de dados do formulário
- Hash de senhas com `password_hash()`
- Sessões para controle de login
- Separação clara entre Model, View e Controller

## 📦 Instalação

Clone o repositório:

git clone https://github.com/seu-usuario/seu-repo.git

## 🔐 Autenticação
- Cadastro de usuário com validação de e-mail e senha
- Login e logout com sessões
- Senhas criptografadas com password_hash() e verificadas com password_verify()

<br>
<br>

## 📤Upload de Imagens

As imagens são salvas na pasta /public/uploads

Validação do tipo e tamanho da imagem

Nome único gerado para evitar conflitos
<br>
<br>

### 🖥️ Interface do Sistema

## Detalhes do filme
<img style=" width: 600px; height: 400px" src="public/img/detalhes-filme.png">

## Cadastro de Filme
<img style=" width: 600px; height: 200px" src="public/img/cadastro-filme.png">

## Listagem de Filmes
<img style=" width: 600px; height: 200px" src="public/img/listagem.png">

## 🧑Autor Nome: Micael

Contato: [mw931991@gmail.com]

GitHub: https://github.com/Micael-William