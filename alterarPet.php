<?php



?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Editar Pet</title>
</head>
<body>


<main>
    <section>
    <form action="logica_pet.php" method="post">
    <p><label for="nomepet">Nome: </label><input type="text" name="nomepet" id="nomepet" value=" <?php echo $pet['nomepet']; ?>"></p>
      <p><label for="raça">Raça: </label><input type="text" name="raça" id="raça"  value=" <?php echo $pet['raça']; ?>"></p>
      <p><label for="sexo">Sexo: </label><input type="text" name="sexo" id="sexo"  value=" <?php echo $pet['sexo']; ?>"></p>
      <p><label for="cidadepet">Cidade: </label> <input type="text" name="cidadepet" id="cidadepet"  value=" <?php echo $pet['cidadepet']; ?>"></p>
      <p><label for="porte">Porte: </label> <input type="text" name="porte" id="porte"  value=" <?php echo $pet['porte']; ?>"></p>
      <p><label for="idade">Idade: </label> <input type="text" name="idade" id="idade" value=" <?php echo $pet['idade']; ?>"></p>
      <input type="hidden" id='codpet' name='codpet' value="<?php echo $pet['codpet']; ?>">
      <p> <input type="submit" id='alterar' name='alterar' value="Alterar">   
    </form>
    </section>
</main>
<!-- <?php require('includes/componentes/footer.php');?> -->
</body>
</html>