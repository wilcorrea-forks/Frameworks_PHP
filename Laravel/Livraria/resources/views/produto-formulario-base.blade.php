@extends('cabecalho')
@section('conteudo')
  <table class="table table-striped table-bordered table-hover">
          <tr>
              <th>Nome</th>
              <td>

                   <input class="form-control" type="text" name="nome">

              </td>
          </tr>
          <tr>
              <th>Preço</th>
              <td>

                  <input  class="form-control" type="number" step="0.01" name="preco">
              </td>

          </tr>
          <tr>
              <th>Descrição</th>
                <td>

                  <textarea class="form-control" name="descricao"></textarea>
                </td>
            </tr>
            <tr>
              <th>Categoria</th>
              <td>
                <select name="categoria" class="form-control">
                  <option>Terror</option>
                  <option>Aventura</option>
                  <option>Ação</option>
                  <option>Suspense</option>
                  <option>Drama</option>
                  <option>Comédia</option>
                  <option>Biografia</option>
                  <option>Didático</option>
                  <option>Anime/Quadrinhos </option>
                </select>

            </td>
          </tr>
          <tr>
              <th>Tipo do produto</th>
              <td>
                <select name="tipoProduto" class="form-control">
                  <optgroup label="Livros">
                    <option>Livro Fisico</option>
                    <option>Ebook</option>
                  </optgroup>
                 </select>
             </td>
          </tr>
          <tr>
              <th>ISBN (caso seja um Livro)</th>
              <td>
                <input type="text" class="form-control" name="isbn">
            </td>
          <tr>
          </tr>
            <th>Taxa de Impressão (caso seja um Livro Físico)</th>
              <td>
                  <input type="text" class="form-control" name="taxaImpressao">

              </td>

          </tr>
          <tr>
              <th>WaterMark (caso seja um Ebook)</th>
              <td>

                <input type="text" class="form-control" name="WaterMark">
              </td>
            </tr>
            @yield('outros')

  @stop
