  <?php

  /**
   * -------- Ejemplo                                Simbolo                          Resultado
   *          1 == "1"                               == (Igualdad)                    True
   *          10 == "10"                             === (Identico)                   False        
   *          7 != 7                                 != (Diferente)                   False                              
   *          21 <> "21"                             <> (Diferente)                   False
   *          19 !== 21                              <> (Diferente)                   True
   *          7 < 4                                  < (Menor que)                    False                                     
   *          7 > 4                                  > (Mayor que)                    True                                     
   *          2 <= 2                                 <= (Menor o igual que)           True
   *          3 >= 7                                 >= (Mayor o igual que)           False                                          
   */

   var_dump(2 == "2");
   echo"<br>";
   var_dump(2 === "2");
   echo"<br>";