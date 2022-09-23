<?php
require_once('init.php');
/*require_once('class.hash.php');*/

class Dao{

  protected $mysql;

  public function conexao()
  {
    //cria um objeto da classe Mysqli e efetua conexao com BD;
    $this->mysql = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
    if ($this->mysql->connect_error) {
      //se verdadeiro retorna o erro gerado no mysql
      die("Falha de conexão: " . $this->mysql->connect_error);
    }
  }
  public function getInfo(){
    //guarda o comando SQL na variavel $query
    $query = "SELECT * FROM informacoes";
    //$result recebe o retorno do metodo query do objeto $mysql
    //a variavel $query é passada como parametro no metodo query do objeto $mysql
    $result = $this->mysql->query($query);
    //num_rows analisa a quantidade de linhas retornadas na consulta SQL
    if ($result->num_rows > 0) {
      //Obtem a proxima linha do result $row recebe essa linha
      //cada linha $row se comporta como array
      while ($row = $result->fetch_array()) {
        //monta -se as linhas e colunas da tabela que sera exibida usando tags HTML
        echo 
        
        '<table>
        <tr>
        <td width=40% class="text-left">
        <p style="display: block"><a href="#modalExemplo" style="color: black" data-toggle="modal" data-target="#modalExemplo' . $row['id_camp'] . '">' . $row['camp1'] . '</a></p>
        </td>

        <th class="text-left">
        <p><a href="https://' . $row['camp2'] . '" style="color: #0087A5" target="blank">' . $row['camp2'] . '</a></p>
        </th>

        <td class="text-right">
        <p><a href="#modalExemplodel" style="color: red" data-toggle="modal" data-target="#modalExemplodel' . $row['id_camp'] . '">Apagar</a></p>
        </td>
        </tr>        
        </table>';

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
                Você tem Certeza que deseja apagar este cliente? <h3>  Nº ' . $row['id_camp'] . ' - ' . $row['camp1'] . '</h3>
              </div>

              <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                <a href="../controller/controllerInfo.php?id_camp=' . $row['id_camp'] . '" class="btn btn-danger font-weight-bold">APAGAR</a>
              </div>

            </div>

          </div>

        </div> 

        <!-- Modal alterar cliente -->
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
                      NOME DO CLIENTE <input type="text" class="form-control" id="camp1" name="camp1" value="' . $row['camp1'] . '">
                      </div>
                  </div>

                  <div class="form-group text-left">
                      <label class="control-label col-sm-4" for="cidade">DOMÍNIO </label>

                      <div class="col-sm-12">
                        <input type="textarea" class="form-control" id="camp2" name="camp2" value="' . $row['camp2'] . '">
                      </div>

                  </div>

                  <div class="form-group text-left">
                      <label class="control-label col-sm-4" for="descricao">DATA DE INIÇIO DO CLIENTE </label>

                      <div class="col-sm-12"> 
                        <input type="date" class="form-control" id="camp3" name="camp3" value="' . $row['camp3'] . '">
                      </div>

                  </div>

                  <div class="form-group text-left">
                  <h1>E-mails</h1><hr>
                      <label class="control-label col-sm-4" for="vaga">LINK DE ACESSO</label>
                      <div class="col-sm-12">
                        <input type="text" class="form-control" id="camp24" name="camp24" value="' . $row['camp24'] . '">
                      </div>
                      <label class="control-label col-sm-4" for="vaga">E-MAILS </label>
                      <div class="col-sm-12">
                        <textarea class="form-control" id="camp4" rows="10" name="camp4" value="">' . $row['camp4'] . '</textarea>
                      </div>

                  </div>

                  <div class="form-group text-left">
                  <h1>Loja Virtual</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">ENDEREÇO LOJA VIRTUAL </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp5" name="camp5" value="' . $row['camp5'] . '">
                        <input type="hidden" id="_update" name="_update" value="_update">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">FORMAS DE ACESSO </label>

                      <div class="col-sm-12">
                        <textarea class="form-control" id="camp6" rows="2" name="camp6" value="">' . $row['camp6'] . '</textarea> 
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <h1>Redes Sociais</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">DRIVE</label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp7" rows="2" name="camp7">' . $row['camp7'] . '</textarea> 
                        <input type="hidden" id="_update" name="_update" value="_update">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">YOUTUBE </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp8" rows="2" name="camp8">' . $row['camp8'] . '</textarea> 
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">FACEBOOK </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp9" rows="2" name="camp9">' . $row['camp9'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">LINKEDIN </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp20" rows="2" name="camp20">' . $row['camp20'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">GMAIL </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp21" rows="2" name="camp21">' . $row['camp21'] . '</textarea>
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
                        <textarea class="form-control" id="camp22" rows="2" name="camp22">' . $row['camp22'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">INFO ADICIONAIS </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp23" rows="5" name="camp23">' . $row['camp23'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <h1>Informações do Site</h1><hr>
                      <label class="control-label col-sm-4" for="remuneracao">DATA SITE NO AR </label>

                      <div class="col-sm-12"> 
                        <input type="date" class="form-control" id="camp11" name="camp11" value="' . $row['camp11'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DADOS DO REGISTRO BR </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp12" rows="5" name="camp12">' . $row['camp12'] . '</textarea>
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">LOCAL DE HOSPEDAGEM </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp13" name="camp13" value="' . $row['camp13'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DNS PRIMÁRIO </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp14" name="camp14" value="' . $row['camp14'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">DNS SECUNDÁRIO </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp15" name="camp15" value="' . $row['camp15'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">ENDEREÇO FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp16" name="camp16" value="' . $row['camp16'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">USUÁRIO FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp17" name="camp17" value="' . $row['camp17'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">SENHA FTP </label>

                      <div class="col-sm-12"> 
                        <input type="text" class="form-control" id="camp18" name="camp18" value="' . $row['camp18'] . '">
                      </div>

                  </div>
                  <div class="form-group text-left">
                  <label class="control-label col-sm-4" for="descricao">PAINEL DE CONTROLE DO SITE </label>

                      <div class="col-sm-12"> 
                        <textarea class="form-control" id="camp19" rows="5" name="camp19" value="">' . $row['camp19'] . '</textarea>
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
          
        </div>';
      }
    } else {
      //se não retornar nenhuma linha do consulta SQL exibe a mensagem abaixo.
      echo "<tr>Dados não encontrados</tr>";
    }
  }

  public function insertInfo($camp1, $camp2, $camp3, $camp4, $camp5)
  {
    $stmt = $this->mysql->prepare("INSERT INTO informacoes (camp1, camp2, camp3, camp4, camp5) VALUES (?,?,?,?,?)");
    $stmt->bind_param("sssss", $camp1, $camp2, $camp3, $camp4, $camp5);
    if ($stmt->execute() == TRUE) {
      header('Location: ../view/painel.php');
    } else {
      header('Location: ../view/error.php');
    }
  }
  public function insertAluno($nome, $sobrenome, $email, $telefone, $cidade, $curso, $curriculo, $senha, $rm, $data_nasc)
  {
    $stmt = $this->mysql->prepare("INSERT INTO aluno (nome, sobrenome, email, telefone, cidade, curso, curriculo, senha, rm, data_nasc) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssss", $nome, $sobrenome, $email, $telefone, $cidade, $curso, $curriculo, $senha, $rm, $data_nasc);
    if ($stmt->execute() == TRUE) {
      header('Location: ../view/login.php');
    } else {
      header('Location: ../view/erro.php');
    }
  }
  public function updateInfo($id_camp, $camp1, $camp2, $camp3, $camp4, $camp5, $camp6, $camp7, $camp8, $camp9, $camp10, $camp11, $camp12, $camp13, $camp14, $camp15, $camp16, $camp17, $camp18, $camp19, $camp20, $camp21, $camp22, $camp23, $camp24)
  {
    $stmt = $this->mysql->prepare("UPDATE informacoes SET camp1=?,  camp2=?, camp3=?, camp4=?, camp5=?, camp6=?, camp7=?, camp8=?, camp9=?, camp10=?, camp11=?, camp12=?, camp13=?, camp14=?, camp15=?, camp16=?, camp17=?, camp18=?, camp19=?, camp20=?, camp21=?, camp22=?, camp23=?, camp24=? WHERE id_camp=?");
    $stmt->bind_param("sssssssssssssssssssssssss", $camp1, $camp2, $camp3, $camp4, $camp5, $camp6, $camp7, $camp8, $camp9, $camp10, $camp11, $camp12, $camp13, $camp14, $camp15, $camp16, $camp17, $camp18, $camp19, $camp20, $camp21, $camp22, $camp23, $camp24, $id_camp);
    /*var_dump ($camp1);
    var_dump ($camp2);
    var_dump ($camp3);
    var_dump ($camp4);
    var_dump ($camp5);
    var_dump ($camp6);
    var_dump ($camp7);
    var_dump ($camp8);
    var_dump ($camp9);
    var_dump ($camp10);
    var_dump ($camp11);
    var_dump ($camp12);
    var_dump ($camp13);
    var_dump ($camp14);
    var_dump ($camp15);
    var_dump ($camp16);
    var_dump ($camp17);
    var_dump ($camp18);
    var_dump ($camp19);
    var_dump ($camp20);
    var_dump ($camp21);
    var_dump ($camp22);
    var_dump ($camp23);
    var_dump ($camp24);*/
    if ($stmt->execute() == TRUE) {
      header('Location: ../view/painel.php');
    } else {
      header('Location: ../view/erro.php');
    }
  }

  public function getFuncId($id_camp)
  {
    $result = $this->mysql->query(
      "SELECT * FROM informacoes WHERE id_camp = '" . $id_camp . "'"
    );
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_array()) {
        $array[] = $row;
      }
      return $array;
    } else {
      return $erro = false;
    }
  }
  public function delete_Info($id_camp)
  {
    if ($this->mysql->query("DELETE FROM informacoes WHERE id_camp = '" . $id_camp . "'")) {
      header('Location: ../view/painel.php');
    }
  }
}
