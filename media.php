<?php

$arquivo = "alunos.txt";
$somaNotas = 0;
$totalAlunos = 0;

if(file_exists($arquivo))
{
    $linhas = file($arquivo);

    foreach($linhas as $linha)
    {
        $dados = explode("|", trim($linha));

        $nota = $dados[3]; // posição da nota no cadastro - nome, idade, nota
        $somaNotas += $nota;
        $totalAlunos++;
    }

    if($totalAlunos > 0)
    {
        $media = $somaNotas / $totalAlunos;
    }
    else
    {
        $media = 0;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Média dos Alunos</title>
</head>

<body>

<h2>Média das Notas</h2>

<?php

if($totalAlunos > 0)
{
    echo "Total de alunos: " . $totalAlunos . "<br>";
    echo "Média das notas: " . number_format($media, 2);
}
else
{
    echo "Nenhum aluno cadastrado.";
}

?>


<footer class="footer-paginas">
Realizado por: Camila Macedo Mendes | Juliana Nascimento dos Santos
</footer>


</body>
</html>