<?php

class StorePDO extends PDO {

    public function __construct($file = 'my_setting.ini'){

        if (!$settings = parse_ini_file($file, TRUE)) throw new exeption('Unable to open ' . $file . '.');

        $dsn = "mysql:host=localhost;dbname=product_database;";
        // $dns = $settings['database']['driver'] .
        // ':host=' . $settings['database']['host'] .
        // ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        // ';dbname = ' . $settings['database']['schema'];

        // parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
        parent::__construct($dsn, 'root', 'Oyasumi21');

    }

}

class DataMapper {

    public static $db;

    public static function init($db){
        
        self::$db = $db;
    }

    public function __destruct(){
        self::$db = null;
    }
}

class ProductMapper extends DataMapper {

    public function create($product) {
        $sth = parent::$db->prepare('INSERT INTO PRODUCT (product_name, unit, price, date_expiry, available_inventory) values '.
        '(:product_name, :unit, :price, :date_expiry, :available_inventory);');

        $sth->execute($product);

        return parent::$db->lastInsertId();
    }

    public function getProduct($id) {

         $stm = parent::$db->query('SELECT * FROM PRODUCT WHERE id ='. $id);
         return $stm->fetchAll()[0];
    }

    public function getProducts() {
        return parent::$db->query('SELECT * FROM PRODUCT');
    }

    public function update($id, $data) {
        //TODO
    }

    public function delete($id) {

        $status = 0;
        $sql = 'DELETE FROM product
        WHERE id = :product_id';

        $statement = parent::$db->prepare($sql);
        $statement->bindParam('product_id', $id, PDO::PARAM_INT);

        if ($statement->execute()) {
            $status = 1;
        }

        return $status;
    }

    public function __destruct(){
        parent::__destruct();
    }
    
}