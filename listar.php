<?php
$arquivo = "alunos.txt";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Lista de Alunos</title>
<link rel="stylesheet" href="style.css">

<style>

body{
    font-family: Arial, Helvetica, sans-serif;
    background:#f4f6f9;
    text-align:center;
}

h2{
    margin-top:30px;
}

table{
    margin:30px auto;
    border-collapse: collapse;
    width:70%;
    background:white;
    box-shadow:0px 0px 10px rgba(0,0,0,0.1);
}

th{
    background:#2c3e50;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    border-bottom:1px solid #ddd;
}

tr:nth-child(even){
    background:#f2f2f2;
}

tr:hover{
    background:#e8f4ff;
}

</style>

</head>

<body>

<div class="container">

<nav class="container-menu">
<ul>
    <li><a href="cadastrar.php">CADASTRAR</a></li>
    <li><a href="buscar.php">BUSCAR</a></li>
    <li><a href="listar.php">LISTAR</a></li>
    <li><a href="media.php">MEDIA</a></li>
    <li><a href="sair.php">SAIR</a></li>
    
</ul>
</nav>
</div>



<h2>Lista de Alunos Cadastrados</h2>

<?php

if(file_exists($arquivo))
{
    $linhas = file($arquivo);

    if(count($linhas) > 0)
    {

        echo "<table>";
        echo "<tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Curso</th>
                <th>Nota</th>
              </tr>";

        foreach($linhas as $linha)
        {
            $dados = explode("|", trim($linha));

            echo "<tr>";
            echo "<td>".$dados[0]."</td>";
            echo "<td>".$dados[1]."</td>";
            echo "<td>".$dados[2]."</td>";
            echo "<td>".$dados[3]."</td>";
            echo "</tr>";
        }

        echo "</table>";

    }
    else
    {
        echo "Nenhum aluno cadastrado.";
    }
}
else
{
    echo "Arquivo não encontrado.";
}

?>


<footer class="footer-paginas">
Realizado por: Camila Macedo Mendes | Juliana Nascimento dos Santos
</footer>

</body>
</html>