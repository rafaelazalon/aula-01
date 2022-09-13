<?php

//Declaração das constantes
define( 'NOME', 'Alex Sander' ); //Declarada a constante NOME com o valor Alex Sander, do tipo String
define ('ALTURA', 1.76); //Declarada a constante ALTURA com o valor 1.76, do tipo float
define('ATIVO', true); //Declarada a constante ATIVO com o valor true, do tipo boolean

const ativo = true; //Declarada a constante ATIVO com o valor true, do tipo boolean

//Declaração da classe Empresa
class Empresa {
  const NOME_EMPRESA = 'DevMedia'; //Declarada a constante NOME_EMPRESA com o valor DevMedia, do tipo String
  const ANO = 2017; //Declarada a constante ANO com o valor 2007, do tipo int
}

echo __FILE__; //Impresso a constante mágica __FILE__ que exibirá o caminho completo do arquivo PHP utilizado

echo ATIVO; /* É impresso o valor 1, como ATIVO é do tipo boolean o PHP o
             converte o true para 1 e caso fosse false o valor seria 0 */
