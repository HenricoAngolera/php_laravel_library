# JetBiblioteca Back-end

Aplicação de biblioteca pessoal onde os usuários podem adicionar livros que já leram, classificá-los e escrever uma breve resenha. Este projeto foi construído com PHP e Laravel.

## Rotas disponíveis na aplicação:

Essa aplicação é uma API Restful e respeita os protocolos HTTP:

- **`POST /livros`**: Para adicionar um novo livro.
- **`GET /livros`**: Para recuperar uma lista de todos os livros.
- **`GET /livros/:id`**: Para recuperar detalhes de um livro específico.
- **`PUT /livros/:id`**: Para atualizar detalhes de um livro específico.
- **`DELETE /livros/:id`**: Para deletar um livro específico.

### Dados necessários para cadastrar um livro:

- Título
- Autor
- Classificação ou nota para o livro (de 1 a 5)
- Resenha
- Data de adição

## Repositórios relacionados:

[JetBiblioteca Front-end](https://github.com/HenricoAngolera/laravel-library-front_end)

## Conclusão

Foi muito prazeroso e divertido desenvolver esse projeto. Foi interessante descobrir como desenvolver um projeto em PHP e Laravel. Eut tinha uma boa base de PHP por conta de um curso técnico integrado com o Ensino médio, mas descobrir como construir utilizar o Laravel, juntamente com a Eloquent ORM e o MySQL, foi divertido e desafiador. 
Meu maior aprendizado foi em configuração de ambiente, para tornar a conexão do banco de dados disponível em portas que não estavam sendo utilizadas anteriormente.

## Feedback

Qualquer feedback me deixe saber por meio de henrico.an@gmail.com
