<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Cadastro Cliente</title>
    </head>
<body bgcolor="white">
   <font color="orange"> 
   <br><br><center><h1>Insere Dados - Cliente</h1> 
   <br><br><center>
    <?php 
        include "conecta.php";
        
        $Nome = $_POST["Nome"];
        $CPF = $_POST["CPF"];
        $CEP = $_POST["CEP"];
        $Telefone = $_POST["Telefone"];
        $Email = $_POST["Email"];
        $Senha = $_POST["Senha"];

        $sql="INSERT INTO Cliente (Nome, CPF, CEP, Telefone, Email, Senha) VALUES
        ('$Nome','$CPF','$CEP','$Telefone','$Email','$Senha')";
         
        if (mysqli_query($ligacao, $sql)) {
             echo "<br>Dados inseridos com sucesso.";
        }else {
            echo "Erro nao consegui inserir:" . $sql . "<br>" . mysqli_error($ligacao);
             } 
        mysqli_close($ligacao); 

    ?>
</body>
</html>
