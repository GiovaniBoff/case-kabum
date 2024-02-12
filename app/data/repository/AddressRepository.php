<?php
class AddressRepository
{
    public function create(Address $address, $customerId)
    {
        try {
            $sql = "INSERT INTO address (customerId,street) 
                    VALUES (:customerId,:street)";

            $p_sql = DatabaseConnection::getInstance()->prepare($sql);

            $p_sql->bindValue(":customerId", $customerId);
            $p_sql->bindValue(":street", $address->getStreet());
            
            return $p_sql->execute();
        } catch (Exception $e) {
            print "Erro ao inserir endereço <br>" . $e . '<br>';
        }
    }

    public function read($customerId)
    {
        try {
            $sql = "SELECT * FROM address order by id asc WHERE customerId = :customerId";
            $p_sql = DatabaseConnection::getInstance()->prepare($sql);
            $p_sql->bindValue(":customerId", $this->$customerId);
            $result = $p_sql->execute();
            $address = $result->fetchAll(PDO::FETCH_ASSOC);
            $list = [];
            foreach ($address as $a) {
                $list[] = $this->addressList($a);
            }
            return $list;
        } catch (Exception $e) {
            print "Ocorreu um erro ao listar endereços." . $e;
        }
    }

    public function update(Address $address, $customerId)
    {

    }

    private function addressList($row)
    {

        $address = new Address();

        $address->setId($row["id"]);
        $address->setStreet($row["street"]);
        return $address;
    }

}