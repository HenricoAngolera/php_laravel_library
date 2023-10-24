<?php

namespace App\Http\Controllers;

class LivrosController {

  public function store() {
    echo "<h1>Criando livro</h1>";
  }

  public function index() {
    echo "<h1>Mostrando todos os livros</h1>";
  }

  public function show($id) {
    echo "<h1>Mostrando livro $id</h1>";
  }

  public function edit($id) {
    echo "<h1>Editando o livro $id</h1>";
  }

  public function destroy($id) {
    echo "<h1>Apagando o livro $id</h1>";
  }
}
?>