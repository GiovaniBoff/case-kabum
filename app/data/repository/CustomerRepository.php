<?php
class CustomerRepository
{
    public function create(Customer $customer)
    {
        try {
            $sql = "INSERT INTO customer (name,date_of_birth,cpf,rg,phone) 
                    VALUES (:name,:date_of_birth,:cpf,:rg,:phone)";

            $p_sql = DatabaseConnection::getInstance()->prepare($sql);

            $p_sql->bindValue(":name", $customer->getName());
            $p_sql->bindValue(":date_of_birth", $customer->getDateOfBirth());
            $p_sql->bindValue(":cpf", $customer->getCpf());
            $p_sql->bindValue(":rg", $customer->getRg());
            $p_sql->bindValue(":phone", $customer->getPhone());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao inserir usuario <br>" . $e . '<br>';
        }
    }

    public function read()
    {
        try {
            $sql = "SELECT * FROM customer order by id asc";
            $result = DatabaseConnection::getInstance()->query($sql);
            $users = $result->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($users as $user) {
                $list[] = $this->customerList($user);
            }
            return $list;
        } catch (Exception $e) {
            print "Ocorreu um erro ao listar." . $e;
        }
    }

    public function update(Customer $customer)
    {
        try {
            $sql = "UPDATE customer set name=:name, date_of_birth=:date_of_birth, cpf=:cpf, rg=:rg, phone=:phone WHERE id = :id";
            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $customer->getId());
            $p_sql->bindValue(":name", $customer->getName());
            $p_sql->bindValue(":date_of_birth", $customer->getDateOfBirth());
            $p_sql->bindValue(":cpf", $customer->getCpf());
            $p_sql->bindValue(":rg", $customer->getRg());
            $p_sql->bindValue(":phone", $customer->getPhone());

            return $p_sql->execute();
        } catch (Exception $e) {
            print "Ocorreu um erro ao atualizar<br> $e <br>";
        }
    }

    public function delete(Customer $customer)
    {
        try {
            $sql = "DELETE FROM customer WHERE id = :id";
            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $p_sql->bindValue(":id", $customer->getId());
            return $p_sql->execute();
        } catch (Exception $e) {
            echo "Erro ao Excluir usuario<br> $e <br>";
        }
    }
    private function customerList($row)
    {

        $user = new Customer();

        $user->setId($row["id"]);
        $user->setName($row["name"]);
        $user->setDateOfBirth($row['date_of_birth']);
        $user->setCpf($row['cpf']);
        $user->setRg($row['rg']);
        $user->setPhone($row['phone']);

        return $user;
    }
}