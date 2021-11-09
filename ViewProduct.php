<?php

include_once('conec/connect.php');

$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>

<div class="container">

    <h1 id="main-title">Minhas Receitas</h1>

        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Imagem</th>
                </tr>
            </thead>
        </table>
</div>