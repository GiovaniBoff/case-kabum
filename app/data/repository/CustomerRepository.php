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
            $customer = $p_sql->execute();

            $customerId = DatabaseConnection::getInstance()->lastInsertId();
            return $customerId;
        } catch (Exception $e) {
            print "Erro ao inserir usuario <br>" . $e . '<br>';
        }
    }

    public function find()
    {
        try {
            $sql = "SELECT C.*, A.street as address 
                    FROM customer C
                    INNER JOIN address A
                    ON C.id = A.customerId
                    ORDER BY C.id ASC
            ";
            $result = DatabaseConnection::getInstance()->query($sql);
            $customers = $result->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($customers as $customer) {
                $list[] = $this->toCustomerList($customer);
            }
            return $list;
        } catch (Exception $e) {
            print "Ocorreu um erro ao listar." . $e;
        }
    }

    public function findById($id)
    {
        try {
            $sql = "SELECT * FROM customer WHERE id = :id";
            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $result = $p_sql->execute();

            return $this->toCustomerList($result);
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
    private function toCustomerList($row)
    {
        $customer = new Customer();

        $customer->setId($row["id"]);
        $customer->setName($row["name"]);
        $customer->setDateOfBirth($row['date_of_birth']);
        $customer->setCpf($row['cpf']);
        $customer->setRg($row['rg']);
        $customer->setPhone($row['phone']);
        $customer->setAddress($row['address']);
        return $customer;
    }
}