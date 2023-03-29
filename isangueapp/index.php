<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/blood.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">
    <title>iSangue - Cadastro</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    <style>
       *, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Chakra Petch', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: rgb(228, 217, 217);
  border-radius: 30px;
  box-shadow: 0 5px 15px red;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="email"],
input[type="tiposang"],
input[type="peso"],
input[type="altura"],
input[type="idade"],

textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8f0fe;
  color: #7a7a7a;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}

input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color: rgb(143, 143, 143);
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 2rem;
  width: 100%;
  border: 0.2px solid #3d3a3a;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}



@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}
    </style>

</head>

<body>

    <?php include 'Header.php' ?>

    <form action="control/UsuarioController.php" method="post">
        
        <h1>Cadastro</h1>
        
        <fieldset>
          
          <legend></span>Seja um doador!</legend>
          
          <label for="nome">Nome:</label>
          <input type="text" id="nome" name="nome">
          
          <label for="email">Email:</label>
          <input type="email" id="email" name="email">
          
          <label for="tiposang">Tipo Sanguíneo:</label>
          <select id="tiposang" name="tiposang">
            <optgroup label="Selecione seu tipo sanguíneo">
              <option value="Apos">A+</option>
              <option value="Aneg">A-</option>
              <option value="ABpos">AB+</option>
              <option value="ABneg">AB-</option>
              <option value="Bpos">B+</option>
              <option value="Bneg">B-</option>
              <option value="Opos">O+</option>
              <option value="Oneg">O-</option>
            </optgroup>            </select>

          <label for="peso"> Peso:</label>
          <input type="peso" id="peso" name="peso">
          
          <label for="altura">Altura:</label>
          <input type="altura" id="altura" name="altura">
                    
          <label for="idade">Idade:</label>
          <input type="idade" id="idade" name="idade">
                    
          </fieldset> 
         
        <button type="submit" name="cadastrar">Cadastrar-se</button>
      </form>
</body>
</html>

