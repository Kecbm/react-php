<h1 id="top" align="center">Boas vindas ao repositório do Desafio Técnico de Desenvolvedor PHP Full Stack da BR24 ⚡</h1>

<h2>Sumário:</h2>

- [O que foi desenvolvido](#summary)
- [Tecnologias utilizadas](#tech)
- [Executar o projeto](#execute)
- [Minhas considerações durante o desenvolvimento](#considerations)
- [Próximos passos](#nextSteps)

<h3>👉 Clique nos tópicos com seta a direita para expandir o conteúdo</h3>

---

<h2 id="summary">O que foi desenvolvido 👩‍💻</h2>

<br>

Um **CRUD** utilizando `Bitrix24`, `PHP` e `React`.

<br>

<details><summary>Desenvolvimento 🎯</summary>
<p>
Na aplicação desenvolvida é possível Criar, Visualizar, Editar e Deletar empresas. Todas as informações estão em um banco de dados, que foi desenvolvido e manipulado utilizando o phpMyAdmin e o MySQL.
</p>
</details>

<details><summary>CRUD com React e PHP 🗂</summary>
<p>
Clique nos links a seguir para acessar os vídeos de cada operação do CRUD desenvolvido com React e PHP:

📝 [Create (criação) de uma nova empresa](https://user-images.githubusercontent.com/67391952/230394032-fe27b7e9-0091-4203-8b4f-6724a11cb642.webm) <br />
📄 [Read (leitura) da lista de empresas](https://user-images.githubusercontent.com/67391952/230394087-f9f3609d-2a8c-43b0-8e04-79fc3a9ec2dd.webm) <br />
🔄 [Update (atualização) de uma empresa](https://user-images.githubusercontent.com/67391952/230394111-baa0eaa9-3445-48f9-9ce4-4c42d57c1c49.webm) <br />
❌ [Delete (exclusão) de uma empresa](https://user-images.githubusercontent.com/67391952/230394147-1fa4ed7a-07c9-460b-95ee-c036d1892aba.webm) <br />

</p>
</details>

<p align="right"><a href="#top">Voltar ao topo ☝</a></p>

---

<h2 id="tech">Tecnologias utilizadas 🛠</h2>

<br>

<img title="PHP" alt="PHP" height="80" width="80" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" /> <img title="React" alt="React" height="80" width="80" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/react/react-original.svg" /> <img title="MySQL" alt="MySQL" height="80" width="80" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/mysql/mysql-original.svg" /> <img title="HTML" alt="HTML" height="80" width="80" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" /> <img title="CSS" alt="CSS" height="80" width="80" src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" />

<p align="right"><a href="#top">Voltar ao topo ☝</a></p>

---

<h2 id="execute">Executar o projeto 💻</h2>

<br>

<details><summary>Aplicação React 🎉</summary>
<p>
Para instalar as dependências e iniciar a aplicação React, execute os comandos na ordem a seguir:

```bash
  cd src
```

```bash
  cd react-crud
```

```bash
  cd npm install
```

```bash
  cd npm start
```

</p>
</details>

<details><summary>API PHP 🐘</summary>
<p>

Para rodar o servidor `PHP` na máquina, utilizei a seguinte documentação: [Built-in web server](https://www.php.net/manual/en/features.commandline.webserver.php), onde acessamos a pasta na qual queremos rodar o servidor:

```bash
  cd src
```

```bash
  cd api
```

E rodamos o comando:

```bash
  php -S localhost:8000
```

Após rodar o comando obtemos a resposta a seguir no terminal:

```bash
  [Mon Apr  3 17:28:52 2023] PHP 7.4.33 Development Server (http://localhost:8000) started
```

Significa que o **servidor PHP** está funcionando corretamente. Assim, podemos acessar o endereço **http://localhost:8000/** e observar o funcionamento da API.
</p>
</details>

<p align="right"><a href="#top">Voltar ao topo ☝</a></p>

---

<h2 id="considerations">Minhas considerações durante o desenvolvimento 📝</h2>

<br>

<details><summary>Documentação 📌</summary>
<p>
Notas sobre o desenvolvimento do aplicativo Bitrix24 - https://training.bitrix24.com/rest_help/

Para ter como base de desenvolvimento, tentei ter acesso ao exemplo disponibilizado no tópico Aplicativos hospedados em servidores de terceiros, porém o link não deu acesso ao arquivo, como podemos observar no vídeo abaixo:

[Clique aqui para acessar o vídeo da documentação](https://github.com/Kecbm/desafio-BR-24/blob/main/src/docs/01.%20Exemplo%20da%20documenta%C3%A7%C3%A3o.webm?raw=true)

Assim, priorizando o desenvolvimento guiado pelo MVP (Produto Minimamente Viável), decidi desenvolver primeiro um CRUD utilizando React, PHP e MySQL. Como é meu primeiro contato com PHP, é um bom começo ter essa experiência inicial.
</p>
</details>

<details><summary>Integração da aplicação Full Stack com o Bitrix24 📲</summary>
<p>
A integração foi a etapa mais desafiadora do projeto, pois a plataforma Bitrix24 e o PHP são ferramentas novas para mim. Pesquisei arduamente e encontrei a biblioteca bitrix24-api-module - https://packagist.org/packages/oihso/php-bitrix24-api-module porém não consegui instalar ela no projeto. Obtive o erro a seguir, limpei o cache do Composer com o comando a seguir porém não solucionou o erro:

```bash
  composer clear-cache
```

![Erro na instalação da biblioteca](././src/docs/02.%20Biblioteca%20bitrix24-api-module.png)

Após incluir as requisições para o Bitrix24 via formulário React, a aplicação apresentou os seguintes erros:

![Erros React](././src//docs/03.%20Erros%20React.png)

Tentei solucionar com adição de tag's no index.php porém não teve efeito corretivo. Outra possível solução era adicionar o endereço http://localhost:3000 a lista de Origens Permitidas no aplicativo da Bitrix24. Porém não consegui realizar esse passo. 
</p>
</details>

<p align="right"><a href="#top">Voltar ao topo ☝</a></p>

---

<h2 id="nextSteps">Próximos passos 🚀</h2>

<br>
Visando oferecer um Software de melhoria continua, considerando o ciclo do desenvolvimento MVP onde é realizada a análise do retorno dos clientes a cada nova entrega e ajustes nas funcionalidades existentes ou desenvolvimentos de novas funcionalidades, a seguir listo uma série de etapas futuras a serem realizadas no projeto, o que forma um backlog inicial do produto. Sinta-se a vontade para contribuir com essa lista.
<br>
<br>

- [ ] Finalizar a integração com o Bitrix24;
- [ ] Refatorar a API PHP para a arquitetura MVC;
- [ ] Adicionar um framework PHP na API, como o Laravel;
- [ ] Refatorar o Banco de Dados e separar as informações em duas tabelas: empresas e contatos;
- [ ] Transportar o CSS para styled components;
- [ ] Implementar todos os métodos HTTP disponíveis no Bitrix24;
- [ ] Desenvolver a parte visual do aplicativo Bitrix24;
- [ ] Desenvolver novas rotas da aplicação;
- [ ] Adicionar mais informações as páginas (como link de contato);
- [ ] Tornar a aplicação responsiva;
- [ ] Desenvolver o tema escuro;
- [ ] Desenvolver a página Not Found;
- [ ] Publicar a aplicação;
- [ ] Desenvolver a parte mobile no Bitrix24;

<br>

<p align="right"><a href="#top">Voltar ao topo ☝</a></p>

---

Projeto desenvolvido por [Klecianny Melo](https://www.linkedin.com/in/kecbm/) 😁
