<?php

class dados{
	
public static function geraEmail(){

      $email = array('pedrohenriquemanoellima_@agen-pegeuot.com.br','.brenoanthonynovaes@santander.com.br',
    'mateusthalesaparicio@emayl.com','caiobenjaminfelipepires@carreira.com.br',
    'claudioaugustopinto@saopaulo10hotmail.com','tiagolucasgustavodamata@icloud.com',
    'ffelipemarioianbarbosa@artelazer.com','enzoandersonanthonydepaula92@leonardocordeiro.com',
    'heitornathandavimoraes-84@machina8.com.br','henryosvaldomiguelporto-99@yahoo.com .br',
    'bbrenohugodasneves@milimoveis.com.br','ttomashugoricardomonteiro@nogueiramoura.adv.br',
    'tomasbrunofilipebernardes-74@proshock.com.br','mmartinmiguelotaviodasilva@doucedoce.com.br',
    'thalesjuliodiegodarocha_@stembalagens.com.br','rafaelmanoelsantos__rafaelmanoelsantos@alway.com.br',
    'mateusthalesaparicio@emayl.com','caiobenjaminfelipepires@carreira.com.br',
    'claudioaugustopinto@saopaulo10hotmail.com','tiagolucasgustavodamata@icloud.com',
    'ffelipemarioianbarbosa@artelazer.com','enzoandersonanthonydepaula92@leonardocordeiro.com',
    'heitornathandavimoraes-84@machina8.com.br','henryosvaldomiguelporto-99@yahoo.com .br',
    'bbrenohugodasneves@milimoveis.com.br','ttomashugoricardomonteiro@nogueiramoura.adv.br',
    'tomasbrunofilipebernardes-74@proshock.com.br','mmartinmiguelotaviodasilva@doucedoce.com.br',
    'thalesjuliodiegodarocha_@stembalagens.com.br','rafaelmanoelsantos__rafaelmanoelsantos@alway.com.br',
    'pedrohenriquemanoellima_@agen-pegeuot.com.br','.brenoanthonynovaes@santander.com.br',
    'mateusthalesaparicio@emayl.com','caiobenjaminfelipepires@carreira.com.br',
    'claudioaugustopinto@saopaulo10hotmail.com','tiagolucasgustavodamata@icloud.com',
    'ffelipemarioianbarbosa@artelazer.com','enzoandersonanthonydepaula92@leonardocordeiro.com',
    'heitornathandavimoraes-84@machina8.com.br','henryosvaldomiguelporto-99@yahoo.com .br',
    'bbrenohugodasneves@milimoveis.com.br','ttomashugoricardomonteiro@nogueiramoura.adv.br',
    );

    $n = rand(1, 30);

    return $email[$n];

}

public static function geraSalario(){

     
    $n = rand(1200, 3000);

    return $n;

}

public static function geraAgencia(){

     
    $n = rand(1, 10);

    return $n;

}

public static function geraTelefone(){

        $telefone = array('59(118)932-54-43',
    '49(90)989-06-98','223(75)542-97-74',
    '0(6995)258-16-41','13(5540)950-92-73',
    '71(71)731-55-79','210(7627)224-15-25',
    '079(8542)074-04-61','58(86)090-24-28',
    '25(038)554-39-47)','08(090)647-28-20',
    '962(92)773-21-60','116(1599)364-18-50',
    '130(59)331-49-22','3(9438)520-03-95',
    '77(7837)608-09-02','4(18)020-22-15',
    '7(95)641-41-74','840(54)637-75-79',
    '950(5913)640-71-47',
    '49(90)989-06-98','223(75)542-97-74',
    '0(6995)258-16-41','13(5540)950-92-73',
    '71(71)731-55-79','210(7627)224-15-25',
    '079(8542)074-04-61','58(86)090-24-28',
    '25(038)554-39-47)','08(090)647-28-20',
    '962(92)773-21-60','116(1599)364-18-50',
    '130(59)331-49-22','3(9438)520-03-95',
    '77(7837)608-09-02','4(18)020-22-15',
    '7(95)641-41-74','840(54)637-75-79',
    '950(5913)640-71-47',
    '49(90)989-06-98','223(75)542-97-74',
    '0(6995)258-16-41','13(5540)950-92-73',
    '71(71)731-55-79','210(7627)224-15-25',
    '079(8542)074-04-61','58(86)090-24-28',
    '25(038)554-39-47)','08(090)647-28-20',
    '962(92)773-21-60','116(1599)364-18-50',
    '130(59)331-49-22','3(9438)520-03-95',
    '77(7837)608-09-02','4(18)020-22-15',
    '7(95)641-41-74','840(54)637-75-79',
    '950(5913)640-71-47');
    $n = rand(1, 50);

    return $telefone[$n];

}

	public static function geraFilmes(){

	$filmes = array(' O Mágico de Oz (1939)','Cidadão Kane (1941) ',
  'Um Sonho de Liberdade (1994)', 'Pulp Fiction (1994)', 
 ' Casablanca (1942)', 
 'O Poderoso Chefão 2 (1974) ',' E.T. (1982) ',
 '2001: Uma Odisseia no Espaço (1968) ', ' A Lista de Schindler (1993)', 
 ' Guerra nas Estrelas (1977) ','Forrest Gump (1994) ',
 ' De Volta Para o Futuro (1985) ', 'Os Caçadores da Arca Perdida (1981) ',
  ' E o Vento Levou (1939)', 'O Sol é Para Todos (1962)', 
  'Apocalypse Now (1979)', ' Noivo Neurótico, Noiva Nervosa (1977) ',
 ' Os Bons Companheiros (1990) ',' A Felicidade não se Compra (1946)', 
 ' Chinatown (1974) ', ' O Silêncio dos Inocentes (1991) ',
  'Lawrence da Arábia (1962) ',' Tubarão (1975) ',
  'A Noviça Rebelde (1965) ',' Cantando na Chuva (1952) ',
  'Clube dos Cinco (1985)', 'A Primeira Noite de um Homem (1967) ',
 'Blade Runner  O Caçador de Androides (1982) ', ' Um Estranho no Ninho (1975)',
' O Mágico de Oz (1939)','Cidadão Kane (1941) ',
  'Um Sonho de Liberdade (1994)', 'Pulp Fiction (1994)', 
 ' Casablanca (1942)', 
 'O Poderoso Chefão 2 (1974) ',' E.T. (1982) ',
 '2001: Uma Odisseia no Espaço (1968) ', ' A Lista de Schindler (1993)', 
 ' Guerra nas Estrelas (1977) ','Forrest Gump (1994) ',
 ' De Volta Para o Futuro (1985) ', 'Os Caçadores da Arca Perdida (1981) ',
  ' E o Vento Levou (1939)', 'O Sol é Para Todos (1962)', 
  'Apocalypse Now (1979)', ' Noivo Neurótico, Noiva Nervosa (1977) ',
 ' Os Bons Companheiros (1990) ',' A Felicidade não se Compra (1946)', 
 ' Chinatown (1974) ', ' O Silêncio dos Inocentes (1991) ',
  'Lawrence da Arábia (1962) ',' Tubarão (1975) ',
  'A Noviça Rebelde (1965) ',' Cantando na Chuva (1952) ',
  'Clube dos Cinco (1985)', 'A Primeira Noite de um Homem (1967) ',
 'Blade Runner  O Caçador de Androides (1982) ', ' Um Estranho no Ninho (1975)');
$n = rand(1, 50);

return $filmes[$n];
}

public static function geraVeiculo(){

 $veiculos= array("A4 3.2 FSI Cabriolet 24V 255cv Multitron",  "A4 Ambiente 2.0 TFSI 190cv S tronic", 
   "A4 Attraction 2.0 TFSI 190cv S tronic",  "A4 Launch Edition 2.0 TFSI 190cv S troni","A5 3.2 FSI 24V 269cv Multitronic", 
   "A5 3.2 FSI V6 24V 269cv Quattro Tiptroni", "A5 Cabriolet 2.0 TFSI Quattro Stronic","A5 Coupê 2.0 TFSI Quattro Stronic", 
   "A5 Sportb. 2.0 16V TFSI Quat. S-tronic", "A5 Sportback 1.8 TFSI 170cv Multi.","A5 Sportback 2.0 16V TFSI 180cv Multi.", 
  "A5 Sportback 2.0 16V TFSI 211cv Multi.","A6 2.0 TFSI 252cv S tronic 4p", "A6 2.4 30V Mec","A6 2.4 30V Tip./Multitronic", 
   "A6 2.4 Avant 30V Mec.", "A6 2.4 Avant 30V Tip./ Multitronic",  "A6 2.4 Avant V6 30V Quattro Mec.",
    "A6 2.4 Avant V6 30V Quattro Tiptronic", "A6 2.4 V6 30V Quattro Mec", "A6 2.4 V6 30V Quattro Tiptronic", 
   "A6 2.7 30V Avant Tiptronic", "A6 2.7 30V Mec.",  "A6 2.7 Avant Quattro Tiptronic", "A6 2.7 Quattro Tiptronic", 
 "A6 2.8", "A6 2.8 30V Mec","A6 2.8 30V Tiptronic", "A6 2.8 Avant", "A6 2.8 Avant 30V Mec",  "A6 2.8 Avant 30V Tiptronic",
"A4 3.2 FSI Cabriolet 24V 255cv Multitron",  "A4 Ambiente 2.0 TFSI 190cv S tronic", 
   "A4 Attraction 2.0 TFSI 190cv S tronic",  "A4 Launch Edition 2.0 TFSI 190cv S troni","A5 3.2 FSI 24V 269cv Multitronic", 
   "A5 3.2 FSI V6 24V 269cv Quattro Tiptroni", "A5 Cabriolet 2.0 TFSI Quattro Stronic","A5 Coupê 2.0 TFSI Quattro Stronic", 
   "A5 Sportb. 2.0 16V TFSI Quat. S-tronic", "A5 Sportback 1.8 TFSI 170cv Multi.","A5 Sportback 2.0 16V TFSI 180cv Multi.", 
  "A5 Sportback 2.0 16V TFSI 211cv Multi.","A6 2.0 TFSI 252cv S tronic 4p", "A6 2.4 30V Mec","A6 2.4 30V Tip./Multitronic", 
   "A6 2.4 Avant 30V Mec.", "A6 2.4 Avant 30V Tip./ Multitronic",  "A6 2.4 Avant V6 30V Quattro Mec.",
    "A6 2.4 Avant V6 30V Quattro Tiptronic", "A6 2.4 V6 30V Quattro Mec", "A6 2.4 V6 30V Quattro Tiptronic", 
   "A6 2.7 30V Avant Tiptronic", "A6 2.7 30V Mec.",  "A6 2.7 Avant Quattro Tiptronic", "A6 2.7 Quattro Tiptronic", 
 "A6 2.8", "A6 2.8 30V Mec","A6 2.8 30V Tiptronic", "A6 2.8 Avant", "A6 2.8 Avant 30V Mec",  "A6 2.8 Avant 30V Tiptronic");

 $n = rand(1, 50);

return $veiculos[$n];

  } 
   
public static function geraRua(){
	
$rua=array('RUA TRÊS - 1513','RUA UM - 1444','RUA B - 1380',
'RUA QUATRO - 1370','RUA PRINCIPAL - 1308','RUA A - 1299',
'RUA C - 1239','RUA CINCO - 1217','RUA SEIS - 1077',
'RUA D - 1026','RUA SETE - 1011','RUA OITO - 931',
'RUA E - 914','RUA F - 819','RUA NOVE - 806', 'RUA DEZ - 769',
'RUA G - 705','RUA SAO JOSE - 638','RUA ONZE - 637','RUA H - 627',
'RUA SAO PAULO - 619','RUA DOZE - 593','RUA TREZE - 585',
'RUA SANTO ANTONIO - 554','RUA TRÊS - 1513','RUA UM - 1444',
'RUA B - 1380','RUA QUATRO - 1370','RUA PRINCIPAL - 1308','RUA A - 1299',
'RUA C - 1239','RUA CINCO - 1217','RUA SEIS - 1077','RUA D - 1026',
'RUA TRÊS - 1513','RUA UM - 1444','RUA B - 1380',
'RUA QUATRO - 1370','RUA PRINCIPAL - 1308','RUA A - 1299',
'RUA C - 1239','RUA CINCO - 1217','RUA SEIS - 1077',
'RUA D - 1026','RUA SETE - 1011','RUA OITO - 931',
'RUA E - 914','RUA F - 819','RUA NOVE - 806', 'RUA DEZ - 769',
'RUA G - 705','RUA SAO JOSE - 638','RUA ONZE - 637','RUA H - 627',
'RUA SAO PAULO - 619','RUA DOZE - 593','RUA TREZE - 585',
'RUA SANTO ANTONIO - 554','RUA TRÊS - 1513','RUA UM - 1444',
'RUA B - 1380','RUA QUATRO - 1370','RUA PRINCIPAL - 1308','RUA A - 1299',
'RUA C - 1239','RUA CINCO - 1217','RUA SEIS - 1077','RUA D - 1026'
);

$n = rand(1, 50);

echo "<script>
	alert($rua[$n])
	</script>
";
return $rua[$n];

}



 public static function geraCidade(){

	$cidades= array("Moema",
  "Pinheiros","Perdizes","Jardim Paulista", "Alto de Pinheiros",
  "Itaim Bibi", "Vila Mariana","Consolação", "Santo Amaro",
  "Saúde","Lapa","Bela Vista","Morumbi","Tatuapé", "Liberdade",
  "Campo Belo", "Santa Cecília", "Butantã","Santana","Campo Grande",
  "Barra Funda","Mooca","Vila Leopoldina","Cambuci","República",
  "Belém","Socorro","Vila Sônia", "Tucuruvi","Carrão","Água Rasa","Mandaqui",
  "Cursino","Vila Formosa","Ipiranga","Casa Verde","Vila Guilherme","Brás","Vila Prudente",
  "Pinheiros","Perdizes","Jardim Paulista", "Alto de Pinheiros",
  "Itaim Bibi", "Vila Mariana","Consolação", "Santo Amaro",
  "Saúde","Lapa","Bela Vista","Morumbi","Tatuapé", "Liberdade",
  "Campo Belo", "Santa Cecília", "Butantã","Santana","Campo Grande",
  "Barra Funda","Mooca","Vila Leopoldina","Cambuci","República",
  "Belém","Socorro","Vila Sônia", "Tucuruvi","Carrão","Água Rasa","Mandaqui",
  "Cursino","Vila Formosa","Ipiranga","Casa Verde","Vila Guilherme","Brás","Vila Prudente"
  );

	$n = rand(1, 50);

return $cidades[$n];
}

	public static function geraEstados(){

  $estados = array("Acre","Alagoas", "Amapá",  "Amazonas", 
 "Bahia", "Ceará","Distrito Federal","Espírito Santo","Goiás", 
  "Maranhão", "Mato Grosso","Mato Grosso do Sul", "Minas Gerais", "Pará", 
  "Paraíba","Paraná", "Pernambuco", "Piauí", "Rio de Janeiro",
  "Rio Grande do Norte","Rio Grande do Sul", "Rondônia","Roraima","Santa Catarina","São Paulo", 
 "Sergipe", "Tocantins", "Acre","Alagoas", "Amapá", "Amazonas", "Bahia","Ceará","Distrito Federal",
"Espírito Santo","Goiás", "Maranhão",  "Mato Grosso","Mato Grosso do Sul", "Minas Gerais", "Pará"
);

  $n =  rand(1, 50);

return $estados[$n];
}

public static function geraCargos(){

  $cargos = array("analista de t.i","auxiliar administrativo","analiste de suporte",
    "auxiliar de marktig","faxineiro","diretor","supervisor"
);

  $n =  rand(1, 7);

return $cargos[$n];
}

	public static function geraNumero(){
		$n =  rand(1, 300);
	return $n;

	}


	public static function GerarNomes(){


	  $nomes=array("Miguel", "Davi","Arthur",
	  "Pedro","Gabriel","Bernardo", "Lucas",
	  "Matheus","Rafael","Heitor","Enzo","Guilherme","Nicolas","Lorenzo",
	  "Gustavo","Felipe", "Samuel", "João Pedro", "Daniel", "Vitor",
	  "Leonardo", "Henrique", "Theo", "Murilo", "Eduardo", "Pedro Henrique",
	  "Pietro", "Cauã", "Isaac", "Caio", "Vinicius", "Benjamin", "João",
	  "Lucca", "João Miguel", "Bryan","Joaquim","João Vitor","Thiago", "Antônio",
	  "Davi Lucas", "Francisco", "Enzo Gabriel", "Bruno", "Emanuel", "João Gabriel",
	  "Ian", "Davi Luiz", "Rodrigo", "Otávio", "Miguel", "Artur", "Gabriel", "Bernardo",
	  "Guilherme", "Pedro", "Lucas", "Gustavo", "Bryan", "Henrique", "Rafael", "David","Mateus","Theo",
	  "Enzo","Nicolas","Heitor","Caio","Felipe","Victor","Daniel","Yuri","Eduardo","Benjamim", "Bruno",
	  "Tiago", "João", "Samuel", "Lorenzo", "Leonardo", "Igor", "Diogo", "Hugo", "Vinicios", "Rodrigo","Miguel", 
	  "Davi","Arthur","Pedro","Gabriel","Bernardo", "Lucas",
	  "Matheus","Rafael","Heitor","Enzo","Guilherme","Nicolas","Lorenzo",
	  "Gustavo","Felipe", "Samuel", "João Pedro", "Daniel", "Vitor");

	    $n =  rand(1, 50);

		return $nomes[$n];
	}

	public static function cnpjRandom($mascara = "1") {
	    $n1 = rand(0, 9);
	    $n2 = rand(0, 9);
	    $n3 = rand(0, 9);
	    $n4 = rand(0, 9);
	    $n5 = rand(0, 9);
	    $n6 = rand(0, 9);
	    $n7 = rand(0, 9);
	    $n8 = rand(0, 9);
	    $n9 = 0;
	    $n10 = 0;
	    $n11 = 0;
	    $n12 = 1;
	    $d1 = $n12 * 2 + $n11 * 3 + $n10 * 4 + $n9 * 5 + $n8 * 6 + $n7 * 7 + $n6 * 8 + $n5 * 9 + $n4 * 2 + $n3 * 3 + $n2 * 4 + $n1 * 5;
	    $d1 = 11 - (self::mod($d1, 11) );
	    if ($d1 >= 10) {
	        $d1 = 0;
	    }
	    $d2 = $d1 * 2 + $n12 * 3 + $n11 * 4 + $n10 * 5 + $n9 * 6 + $n8 * 7 + $n7 * 8 + $n6 * 9 + $n5 * 2 + $n4 * 3 + $n3 * 4 + $n2 * 5 + $n1 * 6;
	    $d2 = 11 - (self::mod($d2, 11) );
	    if ($d2 >= 10) {
	        $d2 = 0;
	    }
	    $retorno = '';
	    if ($mascara == 1) {
	        $retorno = '' . $n1 . $n2 . "." . $n3 . $n4 . $n5 . "." . $n6 . $n7 . $n8 . "/" . $n9 . $n10 . $n11 . $n12 . "-" . $d1 . $d2;
	    } else {
	        $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $n10 . $n11 . $n12 . $d1 . $d2;
	    }
	    return $retorno;
	}

private static function mod($dividendo, $divisor) {

      return round($dividendo - (floor($dividendo / $divisor) * $divisor));

  }
	public static function rgRandom($mascara = "1") {
    $n1 = rand(0, 9);
    $n2 = rand(0, 9);
    $n3 = rand(0, 9);
    $n4 = rand(0, 9);
    $n5 = rand(0, 9);
    $n6 = rand(0, 9);
    $n7 = rand(0, 9);
    $n8 = rand(0, 9);
    $n9 = rand(0, 9);
    $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
    $d1 = 11 - (self::mod($d1, 11) );
    if ($d1 >= 10) {
        $d1 = 0;
    }
    $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
    $d2 = 11 - (self::mod($d2, 11) );
    if ($d2 >= 10) {
        $d2 = 0;
    }
    $retorno = '';
    if ($mascara == 1) {
        $retorno = '' . $n1 . $n2 . $n3 . "." . $n4 . $n5 . $n6 . "." . $n7 . $n8 . $n9 . "-" . $d1 . $d2;
    } else {
        $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
    }
    return $retorno;
	}

	public static function cpfRandom($mascara = "1") {
    $n1 = rand(0, 9);
    $n2 = rand(0, 9);
    $n3 = rand(0, 9);
    $n4 = rand(0, 9);
    $n5 = rand(0, 9);
    $n6 = rand(0, 9);
    $n7 = rand(0, 9);
    $n8 = rand(0, 9);
    $n9 = rand(0, 9);
    $d1 = $n9 * 2 + $n8 * 3 + $n7 * 4 + $n6 * 5 + $n5 * 6 + $n4 * 7 + $n3 * 8 + $n2 * 9 + $n1 * 10;
    $d1 = 11 - (self::mod($d1, 11) );
    if ($d1 >= 10) {
        $d1 = 0;
    }
    $d2 = $d1 * 2 + $n9 * 3 + $n8 * 4 + $n7 * 5 + $n6 * 6 + $n5 * 7 + $n4 * 8 + $n3 * 9 + $n2 * 10 + $n1 * 11;
    $d2 = 11 - (self::mod($d2, 11) );
    if ($d2 >= 10) {
        $d2 = 0;
    }
    $retorno = '';
    if ($mascara == 1) {
        $retorno = '' . $n1 . $n2 . $n3 . "." . $n4 . $n5 . $n6 . "." . $n7 . $n8 . $n9 . "-" . $d1 . $d2;
    } else {
        $retorno = '' . $n1 . $n2 . $n3 . $n4 . $n5 . $n6 . $n7 . $n8 . $n9 . $d1 . $d2;
    }
    return $retorno;
	}



}




?>