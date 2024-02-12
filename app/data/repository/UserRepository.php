<?php

class UserRepository
{

    public function find(User $user)
    {
        try {
            $sql = "SELECT * FROM user WHERE username = :username && password = :password";

            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $p_sql->bindValue(":username", $user->getUsername());
            $p_sql->bindValue(":password", $user->getPassword());
            $p_sql->execute();
            $result = $p_sql->fetch();
            // $user = DatabaseConnection::getInstance()->lastInsert();
            return $this->toUser($result);
        } catch (Exception $e) {
            print "Ocorreu um erro ao buscar." . $e;
        }

    }

    public function update(User $user)
    {
        try {
            $sql = "UPDATE user 
            SET token=:token
            WHERE id=:id";
            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $user->getId());
            $p_sql->bindValue(":token", $user->getToken());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao atualizar<br> $e <br>";
        }

    }



    private function toUser($row)
    {
        $user = new User();

        $user->setId($row["id"]);
        $user->setUsername($row["username"]);
        $user->setPassword($row["password"]);
        $user->setToken($row["token"]);

        return $user;
    }
}