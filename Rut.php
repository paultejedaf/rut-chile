<?php

class Rut{
  
  // Calcula el digito verificador de un RUT
  // Obtenido desde https://www.wikiwand.com/es/Anexo:Implementaciones_para_algoritmo_de_rut#/PHP
  //
  public static function calcular_digito( $rut )
  {
    $s=1;
     for($m=0;$rut!=0;$rut/=10)
         $s=($s+$rut%10*(9-$m++%6))%11;
    return chr($s?$s+47:75);
  }
  
  // Compara un RUT con un digito verificador
  //
  public static function es_valido( $rut, $digito )
  {
    if( Rut.calcular_digito( $rut ) == $digito )
      return TRUE;
    return FALSE;
  }
  
  // Crea un RUT aleatorio valido
  //
  public static function crear_aleatorio( $inicio = 1000000, $fin = 25000000 )
  {
    $rut = random_int( $inicio, $fin );
    $digito = Rut.calcular_digito( $rut );
    return $rut . '-' $digito;
  }

}


