<?php

/*

 * example of basic @param usage
 * @param bool $baz
 * @return mixed
 * @author pablogas
 * @version 0.1
 * @internal Para acceder a los requerimientos de la empresa,
 * vaya a {@link http://www.empresa.com/requerimientos}, o contacta
 * con tu supervisor.

 */

function function1($baz)
{
   if ($baz)
   {
      $a = 5;
   } else
   {
      $a = array(1,4);
   }
   return $a;
}

/*

 * @param integer even or odd integer
 * @return Parser|false phpDocumentor Parser object or error
 * @author pablogas
 * @version 0.0.5

 */

function &factory($number)
{
   $returnval = true;
   if ($number % 2)
   {
       $returnval = new Parser;
   } else
   {
       $returnval = false;
   }
   return $returnval;
}

?>
