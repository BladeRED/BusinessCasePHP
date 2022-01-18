<?php $adressesMail = [
'aureliendelorme1@gmail.com',
'welcome@gmail.com',
'hello@supinfo.com',
'aurelien.delorme@orange.fr',
'test@yahoo.com',
'bonjour@msn.com',
'adelorme@humanbooster.com',
];

$listeMails = array(
'c1' => 'aureliendelorme1@gmail.com',
'c2' => 'welcome@gmail.com',
'c3' => 'hello@supinfo.com',
'c4' => 'aurelien.delorme@orange.fr',
'c5' => 'test@yahoo.com',
'c6' => 'bonjour@msn.com',
'c7' => 'adelorme@humanbooster.com',
'c8' => 'adelorme@humanbooster.com',
'c9' => 'adelorme@humanbooster.com',
);

$listeUnique = implode('@',$listeMails);
$nomDeDomaine = explode('@',$listeUnique);
$count_mails = array_count_values($adressesMail);
$count_domaine = array_count_values($nomDeDomaine);
$value = strstr($listeUnique, "@");
echo $value;

var_dump($adressesMail);
var_dump($listeMails);
var_dump($listeUnique);
var_dump(array_unique($nomDeDomaine));
var_dump(array_search('gmail', $adressesMail));
var_dump($count_mails);
var_dump($count_domaine);?>

