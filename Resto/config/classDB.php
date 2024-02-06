<?php
    class koneksi{
        public $db;

        function __construct()
        {
            try{
                $this->db = new PDO('mysql:host=localhost;dbname=db_resto_kelas_aap',"root","");
                $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
                $this->db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            }catch(PDOException $e){
                echo $e->getMessage();

            }
        }
        function select($t, $f="*"){
            $sel = $this->db->prepare("select $f from $t");
            $sel->execute();
            $data = $sel->fetchAll();
            return $data;
        }

        function update($t, $f, $where){
            $up = $this->db->prepare("update $t set $f where $where");
            $up->execute();
            return $up;
        }

        function delete($t, $where){
            $del = $this->db->prepare("delete from $t where $where");
            $del->execute();
            return $del;
        }

        function insert($t, $val){
            $ins = $this->db->prepare(("insert into $t values($val)"));
            $ins->execute();
            return $ins;
        }

        function query($q){
            $query = $this->db->prepare($q);
            $query->execute();
            return $query;
        }
        function lastinsert(){
            return $this->db->lastInsertId();
        }
    }

    $dbo = new koneksi();
?>