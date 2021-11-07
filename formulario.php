<!DOCTYPE html>
  <html lang="pt-BR">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" href="css/cadastro.css" media="screen"/>
      <title>Sign Up</title>
    </head>
  <body>
    <div class="box">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <legend>Sign Up</legend>
          <br><br>
            <div class="inputBox">
              <input type="text" name="name" id="nome" class="inputUser" required>
              <label for="nome" class="labelInput">Name</label>
            </div>
            <br><br>
            <div class="inputBox">
              <input type="text" name="email" id="email" class="inputUser" required>
              <label for="email" class="labelInput">Email</label>
            </div>
            <br><br>
            <div class="inputBox">
              <input type="text" name="password" id="senha" class="inputUser" required>
              <label for="senha" class="labelInput">Password</label>
            </div>
            <br><br>
            <div class="inputBox">
                <input type="tel" name="phoneNumber" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Phone number</label>
            </div>
            <br>
            <input type="submit" name="enviar" id="submit" value="Send">
      </form>
    </div>
  </body>
</html>
<?php
  $user_name = $_POST["name"];
  $user_email = $_POST["email"];
  $user_password = $_POST["password"];
  $user_phone_numer = $_POST["phoneNumber"];
  if ($user_name == "admin" && $user_email == "admin123@gmail.com" && $user_password == "123" &&
  $user_phone_numer == "(81) 99999-9999") {
    print "<script> type='text/javascript'>alert('Dados válidados com sucesso');</script>";
  } else { 
    print "<script> type='text/javascript'>alert('Dados inválidos. Tente novamente mais tarde.');</script>";
  }
?>