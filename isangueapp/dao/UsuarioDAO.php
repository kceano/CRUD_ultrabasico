<?php

class UsuarioDAO
{

    //Crud - Create //
    public function create(Usuario $usuario)
    {
        try {
            $sql = "INSERT INTO isangue_app (nome, email, tiposang, peso, altura, idade) VALUES (:nome, :email, :tiposang, :peso, :altura, :idade)";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":tiposang", $usuario->getTipoSang());
            $p_sql->bindValue(":peso", $usuario->getPeso());
            $p_sql->bindValue(":altura", $usuario->getAltura());
            $p_sql->bindValue(":idade", $usuario->getIdade());

            return $p_sql->execute();
        } catch (Exception $e) {
            print 'Erro ao insirir o Usuário <br>' . $e . '<br>';
        }
    }
    public function read()
    {
        try {

            $sql = "SELECT * FROM isangue_app ORDER BY nome ASC";
            $result = Conexao::getConexao()->query($sql);

            $lista = $result->fetchAll(PDO::FETCH_ASSOC);

            $f_lista = array();

            foreach ($lista as $l) {
                $f_lista[] = $this->listaUsuarios($l);
            }
            return $f_lista;
        } catch (Exception $e) {
            print 'Erro ao tentar buscar resultados <br>' . $e . '<br>';
        }
    }

    public function update(Usuario $usuario)
    {
        try {
            $sql = "UPDATE isangue_app SET nome=:nome, email=:email, tiposang=:tiposang, peso=:peso, altura=:altura, idade=:idade WHERE id=:id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $usuario->getId());
            $p_sql->bindValue(":nome", $usuario->getNome());
            $p_sql->bindValue(":email", $usuario->getEmail());
            $p_sql->bindValue(":tiposang", $usuario->getTipoSang());
            $p_sql->bindValue(":peso", $usuario->getPeso());
            $p_sql->bindValue(":altura", $usuario->getAltura());
            $p_sql->bindValue(":idade", $usuario->getIdade());

            return $p_sql->execute();
        } catch (Exception $e) {
            print 'Erro ao insirir o Usuário <br>' . $e . '<br>';
        }
    }

    public function delete(Usuario $usuario)
    {
        try {
            $sql = "DELETE  FROM isangue_app WHERE id = :id";
            $p_sql = Conexao::getConexao()->prepare($sql);
            $p_sql->bindValue(":id", $usuario->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao excluir o usuário<br>" . $e . "<br>";
        }
    }

    private function listaUsuarios($row)
    {
        $usuario = new Usuario();
        $usuario->setId($row['id']);
        $usuario->setNome($row['nome']);
        $usuario->setEmail($row['email']);
        $usuario->setTipoSang($row['tiposang']);
        $usuario->setPeso($row['peso']);
        $usuario->setAltura($row['altura']);
        $usuario->setIdade($row['idade']);

        return $usuario;
    }
}

            // $sql = string sql
            // $resultado = mysqli_query($conexao, $sql);

            // $dados = mysqli_fetch_assoc($resultado);
