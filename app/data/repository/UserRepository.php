<?php

class UserRepository
{
    public function create(User $user)
    {
        try {
            $sql = "INSERT INTO user (name,date_of_birth,cpf,rg,phone) 
                    VALUES (:name,:date_of_birth,:cpf,:rg,:phone)";

            $p_sql = databaseConnection::getdatabaseConnection()->prepare($sql);

            $p_sql->bindValue(":name", $user->getName());
            $p_sql->bindValue(":date_of_birth", $user->getDateOfBirth());
            $p_sql->bindValue(":cpf", $user->getCpf());
            $p_sql->bindValue(":rg", $user->getRg());
            $p_sql->bindValue(":phone", $user->getPhone());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao inserir usuario <br>" . $e . '<br>';
        }
    }

    public function read()
    {
        try {
            $sql = "SELECT * FROM user order by name asc";
            $result = databaseConnection::getdatabaseConnection()->query($sql);
            $users = $result->fetchAll(PDO::FETCH_ASSOC);
            $usersList = array();
            foreach ($users as $user) {
                $usersList[] = $this->listaUsuarios($user);
            }
            return $usersList;
        } catch (Exception $e) {
            print "Ocorreu um erro ao listar." . $e;
        }
    }

    public function update(User $user)
    {
        try {
            $sql = "UPDATE user set
                
                  name=:name,
                  date_of_birth=:date_of_birth,
                  cpf=:cpf,
                  rg=:rg,
                  phone=:phone,                  
                                                                       
                  WHERE id = :id";
            $p_sql = databaseConnection::getdatabaseConnection()->prepare($sql);
            $p_sql->bindValue(":id", $user->getId());
            $p_sql->bindValue(":name", $user->getName());
            $p_sql->bindValue(":date_of_birth", $user->getDateOfBirth());
            $p_sql->bindValue(":cpf", $user->getCpf());
            $p_sql->bindValue(":rg", $user->getRg());
            $p_sql->bindValue(":phone", $user->getPhone());
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao atualizar<br> $e <br>";
        }
    }

    public function delete(User $user)
    {
        try {
            $sql = "DELETE FROM user WHERE id = :id";
            $p_sql = databaseConnection::getdatabaseConnection()->prepare($sql);
            $p_sql->bindValue(":id", $user->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }




    private function listaUsuarios($row)
    {
        $user = new User(
            $row['id'],
            $row['name'],
            $row['date_of_birth'],
            $row['cpf'],
            $row['rg'],
            $row['fone'],
            '',
        );

        return $user;
    }
}