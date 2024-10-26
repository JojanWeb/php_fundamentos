
<head>
      <style>
        body{
          display: flex;
          flex-wrap: wrap;
          background-color: rgb(0, 0, 0)  ;
        }
        td{
          text-align: center;
          border:  1px solid #ffffff;
          padding: 5px 20px;
          filter: drop-shadow()
        }
        table{
          margin: 20px;
          align-self: start;
          width: auto;
          height: auto;
          /* border:  1px solid #000; */
          /* background-color: #000; */
          color: #00ff0d;
          font-size: 30px;
        }
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        *{
          padding: 0;
          margin: 0;
          box-sizing: border-box;
          font-family: "Poppins", sans-serif;
        }
        
  </style>
</head>
<body>
<?php
// $numero = $_REQUEST['numero'];

function tabla($numero){
  ?>
  <table>
  <?php
  for ($i=0; $i <= 10; $i++) { 
    ?>
        <tr>
          <td> <?php echo $numero; ?> </td>
          <td> x </td>
          <td> <?php echo $i; ?> </td>
          <td> =</td>
          <td> <?php echo $numero * $i; ?> </td>
      </tr>
    <br>
    <?php
    // echo $numero." x $i = ".$numero * $i."<br>";
  }
  ?>
  </table>
  </body>
  <?php
}

for ($i=0; $i < 10; $i++) { 
  # code...
  tabla($i);
}

// crea una funcion que calcula la longitud de una palabra, si es corta o es larga, las palabras cortas son menores de 5 caracteres

