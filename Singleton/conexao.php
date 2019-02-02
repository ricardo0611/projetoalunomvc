<?php

//------------------------------SINGLETON-----------------------------------------------------
class BancoDeDados
{
    // Instância da classe
    private static $instance = null;
    private $conn;

    // Construtor privado: só a própria classe pode invocá-lo
    private function __construct()
    {
        $host = "127.0.0.0";
        $user = "root";
        $pswd = "";
        $db = "playligas";

        try{
            $this->conn = mysqli_connect($host, $user, $pswd, $db);
            $this->conn->set_charset('utf8');
        } catch (Exception $e)
        {
            die("Erro na conexão com MySQL!" . $e->getMessage());
        }
    }

    // método estático
    public static function getInstance()
    {
        // Já existe uma instância?
        if (self::$instance == NULL)
        {
            self::$instance = new BancoDeDados();   // Não existe, cria a instância 
            echo "Instância foi criada! <br>";
        }else
        {
        	echo "Instância já foi criada<br>";
        }
        return self::$instance;                     // Já existe, simplesmente retorna
    }

    // Previne o uso de clone
    private function __clone() {}

    public static function getQuery(){
    	
    	echo "consultas ao banco de dados devem ser aqui";

    	$result_usuarios = "INSERT INTO usuarios(nome, email, senha, created) VALUES ('".$nome."', '".$email."', '".$senha."', NOW())";

		$resultado_usuario = mysqli_query($conn, $result_usuarios);

		if(mysqli_insert_id($conn))
		{
			$_SESSION['msg'] = "<p style='color: green;'> Usuário cadastrado com sucesso!</p>";
			header("Location: index.php");
			//Vai para tela de login

		}else{
			$_SESSION['msg'] = "<p style='color: red;'> Usuário não foi cadastrado :/</p>";
			header("Location: CadastrarUsuario.php");
			//Vai para realização do cadastro informando o erro
		}
    }
}

// Usando a classe
//$db = BancoDeDados::getInstance();

// Você não poderá fazer isso por causa do construtor privado:
//$db = new BancoDeDados();

?>