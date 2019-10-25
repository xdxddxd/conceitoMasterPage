<?php
include_once ('conexao.php');
include_once ('conConsulta.php');
include_once ('verificaSessao.php');
?>
<!DOCTYPE html>
<html>
<?php
    include_once ('resources/link.php');
 	//include_once ('resources/conexao.php');
?>
<head>
<style>
html{
	overflow-y:hidden;
	overflow-x:hidden;
}
</style>
	<title><?php if(isset($_GET['p']) && strlen($_GET['p']) >= 4){echo $_GET['p'];}else{echo 'Titulo do Site';} ?></title>
</head>
<body>
		<?php
        if(isset($_GET['p'])){
            $site = $_GET['p'];
        }
        if(isset($login)){
            include ('urls/menu.php');
                if(isset($site)){
                    if (file_exists('urls/'.$site.'.php')) {
                        include ('urls/'.$site.'.php');
                    }
                    else{
                        include ('erro.php');
                    }                    
                }
                else{
                    include ('urls/Inicio.php');
                }
        }
        else{
            if(!isset($_GET['action'])){
		    	include ('urls/login.php');
            }
            else{
                include ('urls/cadUsuario.php');
            }
        }
        include_once('resources/scripts.php');
		?>
</body>
</html>
