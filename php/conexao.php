
<?php

    class conexao{
        private $con = null;

        function conect(){
            $servidor = 'localhost';
            $usuario = 'root';
            $senha = '';
            $banco = 'teste';
            $this->con = new mysqli($servidor, $usuario, $senha, $banco);

            if ($this->con->connect_error) {
                $arr["ERRO"] = "Error: Falha ao conectar-se com o banco de dados MySQL." .$this->con->connect_error;
                $arr["DEBUGIN"] =  "Debugging errno: " . mysqli_connect_errno() . $this->con->connect_error;
                return $arr;
                exit;
            }else{
                $arr["STATUS"] = "OK";
                return $arr;
            }
        }

        function close(){
            if($this->con != null){
                mysqli_close($this->con);
                $arr["STATUS"] = "FECHOU";
                return $arr;
            }
        }
    }

?>