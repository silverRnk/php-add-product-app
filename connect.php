<?php

class StorePDO extends PDO {

    public function __construct($file = 'my_setting.ini'){

        if (!$settings = parse_ini_file($file, TRUE)) throw new exeption('Unable to open ' . $file . '.');

        $dns = $settings['database']['driver'] .
        ':host=' . $settings['database']['host'] .
        ((!empty($settings['database']['port'])) ? (';port=' . $settings['database']['port']) : '') .
        ';dbname = ' . $settings['database']['schema'];

        parent::__construct($dns, $settings['database']['username'], $settings['database']['password']);
    }

}

class DataMapper {

    public static $db;

    public static function init($db){
        
        sefl::$db = $db;
    }
}

class ProductMapper extends DataMapper {

    public function create($product) {
        //TODO
    }

    public function getProduct($id) {
        //TODO
    }

    public function getProducts() {
        return $db->query('SELECT * FROM PRODUCTS');
    }

    public function update($id, $data) {
        //TODO
    }

    public function delete($id) {
        //TODO
    }
    
}