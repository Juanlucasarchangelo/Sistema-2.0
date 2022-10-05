<?php
require_once('init.php');
/*require_once('class.hash.php');*/

class Dao{

  protected $mysql;

  public function conexao()
  {
    $this->mysql = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    if ($this->mysql->connect_error) {
      die("Falha de conexão: " . $this->mysql->connect_error);
    }
  }
  public function getInfo(){
    $query = "SELECT * FROM informacoes";
    $result = $this->mysql->query($query);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_array()) {
        echo 
        '<!-- Informação da tela Painel.php -->
        <tr class="unread">
        <td class="view-message">
        <p><a href="#modalExemplo" style="color: black" data-toggle="modal" data-target="#modalExemplo' . $row['id_camp'] . '">' . $row['nome_cliente'] . '</a></p>
        </td>

        <td class="view-message"><a href="https://'. $row['dominio'] .'" target="blank" style="color: black">
        ' . $row['dominio'] . '
        </td>

        <td class="view-message">
        <p><a href="#modalExemplodel" style="color: red" data-toggle="modal" data-target="#modalExemplodel' . $row['id_camp'] . '">Apagar</a></p>
        </td>
        </tr>        
        <!-- End Informação da tela Painel.php -->';

        echo ' <hr>     
        <!-- Modal deletar cliente-->
        <div class="modal fade bd-exemple-modal-xl" id="modalExemplodel' . $row['id_camp'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-xl" role="document">

            <div class="modal-content">

              <div class="modal-header">

                <h5 class="modal-title" bg-success id="exampleModalLabel">ATENÇÃO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>

              </div>

              <div class="modal-body">
                Você tem Certeza que deseja apagar este cliente? <h3>  Nº ' . $row['id_camp'] . ' - ' . $row['nome_cliente'] . '</h3>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                <a href="../controller/controllerInfo.php?id_camp=' . $row['id_camp'] . '" class="btn btn-danger font-weight-bold">APAGAR</a>
              </div>

            </div>

          </div>

        </div> 
        <!-- End Modal deletar cliente-->

        <!-- Modal Produto -->
        <div class="modal fade modal fade bd-exemple-modal-xl" id="modalExemplo' . $row['id_camp'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

          <div class="modal-dialog modal-xl" role="document">

            <div class="modal-content">

              <div class="modal-header">
                <h5 class="modal-title" bg-success id="exampleModalLabel">Alterar Informações</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>

              <div class="modal-body">
                <form class="form-horizontal" action="../controller/controllerInfo.php" method="POST">

                  <div class="form-group text-left">
                    <h1>Informações do Cliente</h1><hr>
                      <label class="control-label col-sm-4" for="id_emp">ID CLIENTE </label>

                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="id_camp" name="id_camp" value="' . $row['id_camp'] . '">
                      </div>

                  </div>

                  <div class="form-group text-left">
                      <div class="col-sm-12">
                      NOME DO CLIENTE
                      <input type="text" class="form-control" id="nome_cliente" name="nome_cliente" value="' . $row['nome_cliente'] . '">
                      </div>
                  </div>

                  <div class="form-group text-left">
                      <label class="control-label col-sm-4" for="cidade">DOMÍNIO </label>

                      <div class="col-sm-12">
                        <input type="textarea" class="form-control" id="dominio" name="dominio" value="' . $row['dominio'] . '">
                      </div>

                  </div>

                  <div class="form-group text-left">
                      <label class="control-label col-sm-4" for="descricao">DATA DE INIÇIO DO CLIENTE </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="data_inicio" name="data_inicio" value="' . $row['data_inicio'] . '">
                      </div>

                  </div>

                  <div class="form-group text-left">
                  <h1>E-mails</h1><hr>
                      <label class="control-label col-sm-4" for="vaga">LINK DE ACESSO</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="camp1" name="camp1" value="' . $row['camp1'] . '">
                      </div>
                      <label class="control-label col-sm-4" for="vaga">E-MAILS </label>
                      <div class="col-sm-12">
                        <textarea class="form-control" id="camp2" rows="10" name="camp2" value="">' . $row['camp2'] . '</textarea>
                      </div>

                  </div>

                  <div class="form-group text-left">
                  <h1>Loja Virtual</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">ENDEREÇO LOJA VIRTUAL </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp3" name="camp3" value="' . $row['camp3'] . '">
                        <input type="hidden" id="_update" name="_update" value="_update">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">FORMAS DE ACESSO </label>

                      <div class="col-sm-12">
                        <textarea class="form-control" id="camp4" rows="2" name="camp4" value="">' . $row['camp4'] . '</textarea> 
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <h1>Redes Sociais</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">DRIVE</label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp5" rows="2" name="camp5">' . $row['camp5'] . '</textarea> 
                        <input type="hidden" id="_update" name="_update" value="_update">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">YOUTUBE </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp6" rows="2" name="camp6">' . $row['camp6'] . '</textarea> 
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">FACEBOOK </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp7" rows="2" name="camp7">' . $row['camp7'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">LINKEDIN </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp8" rows="2" name="camp8">' . $row['camp8'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">GMAIL </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp9" rows="2" name="camp9">' . $row['camp9'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">INSTAGRAM </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp10" rows="2" name="camp10">' . $row['camp10'] . '</textarea> 
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">LINKETREE </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp11" rows="2" name="camp11">' . $row['camp11'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">INFO ADICIONAIS </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp12" rows="5" name="camp12">' . $row['camp12'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <h1>Informações do Site</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">DATA SITE NO AR </label>

                      <div class="col-sm-12"> 
                        <input type="date" class="form-control" id="camp13" name="camp13" value="' . $row['camp13'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DADOS DO REGISTRO BR </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp14" rows="5" name="camp14">' . $row['camp14'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">LOCAL DE HOSPEDAGEM </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp15" name="camp15" value="' . $row['camp15'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DNS PRIMÁRIO </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp16" name="camp16" value="' . $row['camp16'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DNS SECUNDÁRIO </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp17" name="camp17" value="' . $row['camp17'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">ENDEREÇO FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp18" name="camp18" value="' . $row['camp18'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">USUÁRIO FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp19" name="camp19" value="' . $row['camp19'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">SENHA FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp20" name="camp20" value="' . $row['camp20'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">PAINEL DE CONTROLE DO SITE </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp21" rows="5" name="camp21" value="">' . $row['camp21'] . '</textarea>
                        <input type="hidden" id="_update" name="_update" value="_update">
                      </div>

                  </div>

                  <div class="form-group"> 

                      <div class="col-sm-offset-2 col-sm-12 text-center">

                        <a href="painel.php">
                          <button class="btn btn-info">Voltar</button>
                        </a>
                        <button type="submit" class="btn btn-success font-weight-bold">Atualizar</button>

                      </div>

                  </div>

                </form>

              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
              </div>

            </div>

          </div>
          
        </div>
        <!-- End Modal Produto -->';
      }
    } else {
      echo "<tr>Dados não encontrados</tr>";
    }
  }

  public function insertInfo($nome_cliente, $dominio, $data_inicio)
  {
    $stmt = $this->mysql->prepare("INSERT INTO informacoes (nome_cliente, dominio, data_inicio) VALUES (?,?,?)");
    $stmt->bind_param("sss", $nome_cliente, $dominio, $data_inicio);
    if ($stmt->execute() == TRUE) {
      header('Location: ../view/painel.php');
    } else {
      header('Location: ../view/error.php');
    }
  }
  public function delete_Info($id_camp)
  {
    if ($this->mysql->query("DELETE FROM informacoes WHERE id_camp = '" . $id_camp . "'")) {
      header('Location: ../view/painel.php');
    }
  }
  
  public function insertUser($nome,$email,$senha){
    $senha = md5($senha);
  $stmt = $this->mysql->prepare("INSERT INTO usuario (nome, email, senha) VALUES (?,?,?)");
    $stmt->bind_param("sss",$nome,$email,$senha);
    if( $stmt->execute() == TRUE){
        header('Location: ../index.php');
    }else{
        header('Location: ../view/index.php');
    }
}
}
