<h2> Question 1 </h2>

<?php 

//calcul TVA et affichage de son prix

$tva = 20/100;

$prixHT = rand(0 , 1500);

$prixTTC = (1+$tva) * $prixHT ; 

echo "Le prix TTC est de $prixTTC<br>le prix H.T est de : $prixHT";

?>

<h2> Question 2 </h2>

<?php

//verification si chiffre + , - ou neither

$chiffre = rand(-5 , +5);

if ($chiffre>0){
    echo ("Chiffre positif");
}
if ($chiffre<0){
    echo ("Chiffre negatif");
}
if ($chiffre==0){
    echo ("Chiffre neutre");
}

?>

<h2> Question 3 </h2>

<?php

$a = "42" ;

var_dump($a) ;

?>

<h2> Question 4 </h2>

<?php

$heure = rand(0 , 24);

if ($heure<8)
{
    echo ("Matin");
}
elseif ($heure<16)
{
    echo ("Aprem");
}
else
{
    echo ("Soir");
}

?>

/////////

<?php
/*
$Pays = array(
    'pays' =>
        ['France' =>
            ['nbrHab' => 67000000, 'capital'=>
                ['paris' =>
                    ['nbrHab' => 2188000]],
                'Monnaie' => 'Euro', 'Langue' => 'Français'],
        'Allemagne' =>
            ['nbrHab' => 83020000, 'capital'=>
                ['berlin' =>
                    ['nbrHab' => 3669000]],
                'Monnaie' => 'Euro' , 'Langue' => 'Allemand'],
        'Québec' =>
            ['nbrHab' => 8484000, 'capital'=>
                ['Québec' =>
                    ['nbrHab' => 531000]],
            'Monnaie' => 'Canadian Dollars', 'Langue' => 'Français']],
);

foreach ($Pays as $pays => $donnees) {
    echo $pays . '=>' . $donnees['capital'][key($donnees['capital'])]['nbrHab']. " ";
    var_dump($donnees);
}

echo count($pays);
echo ' ';

echo array_key_exists('France' , $pays);
*/?>
for ($i=1 ; $i<=5 ; $i++){
    for ($j=0 ; $j<$i ; $j++){
        echo $i;
    }
    echo '</br>';
}

?>

<h2> Question 6 </h2>

<?php

  $array = array(
      "France"=> "Paris",
      "Allemagne"=> "Berlin",
      "Portugal"=> "Lisbone",
      "Angleterre"=> "Londres",
      "Italie"=> "Rome",
      "Espagne"=> "Madrid"
  );
  
  var_dump($array);
  foreach($array as $indice => $valeur);
  {
      echo "$indice sa capile est $valeur <br/>";
}

?>

<h2> Question 7 </h2>

<?php

$treizePresent=false;
$iTableSize=25;
$aTableSize = [];

for ($i=0; $i<$iTableSize ; $i++) {
    $aTableSize[]= rand(0,20) ;
}

in_array(13, $aTableSize);

var_dump($aTableSize);

if (in_array(13, $aTableSize)) {
    echo "13 est présent";
}
else{
    echo "13 est absent";
}

?>

<h2> Question 1 Jour 2 </h2>

<?php

function check_mdp_format($mdp)
{
  //Regex ou Expression régulière

  //strlen = verifie la
  
	$majuscule = preg_match('@[A-Z]@', $mdp);
	$minuscule = preg_match('@[a-z]@', $mdp);
	$chiffre = preg_match('@[0-9]@', $mdp);
	
	if(!$majuscule || !$minuscule || !$chiffre || strlen($mdp) < 8)
	{
		return false;
	}
	else 
		return true;
}

if (check_mdp_format("1Formatsik") != true)
{
    echo "<br/>";
    echo "<br/>";
	echo "Format non correct";	
}
else{
    echo "<br/>";
    echo "<br/>";
    echo "Format correct";
    echo "<br/>";
    echo "<br/>";
}


?>
<?php

$pays = [
    'France'    =>  [ 'Habitant Pays' => 66000000,
                      'Capital' => array('paris',2100000),
                      'Monnaie' => '€', 
                      'Langue' => 'Francais']
//    'Espagne'   =>  [ 'Habitant Pays' => 66000000,
//                      'Capital' => array('madrid',2100000),
//                      'Monnaie' => '€', 
//                      'Langue' => 'Espagnol']]
];


var_dump($pays);
echo $pays['France']['Capital'][0];
// $sous_pays = $pays['France'];
// echo $sous_pays['Monnaie'];


<?php

class Pays
{
    public $nom;
    public $capital;
    public $nbrHab;
    public $devise;
    public $langue;

//public permet l'acces depuis l'extérieur

    public function __construct($newName ,$newCapital, $newNrbHab, $newDevise, $newLangue)
    {
        $this->nom = $newName;
        $this->capital = $newCapital;
        $this->nbrHab = $newNrbHab;
        $this->devise = $newDevise;
        $this->langue = $newLangue;
    }

    public function changeDevise($newDevise)
    {
        $this->devise = $newDevise;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setCapital($newCapital)
    {
        $this->capital = $newCapital;
        return $this->capital;
    }
}    

$france = new Pays('France','Paris',67000000,'Euro','Français')


/*  
*/
/*    function __Construct ( $sNewType , $rNewDamage , $rNewRange , $rNewMoveSpeed , $rNewHealth )
    {
        $this->sType = $sNewType ;
        $this->rDamage = $rNewDamage ;
        $this->rRange = $rNewRange ;
        $this->rMoveSpeed = $rNewMoveSpeed ;
        $this->rHealth = $rNewHealth ;
    }

    $Minions = new Minions ( "Mage" , "35" , "450" , "325" , "200" )
    $Minions = new Minions ( "Sword" , "20" , "50" , "325" , "350" )
    $Minions = new Minions ( "Canon" , "60" , "500" , "325" , "500" )
    $Minions = new Minions ( "Super" , "120" , "25" , "325" , "1000" )
}
*/
?>

<?php

class Ordinateur {

    public $cpu;
    public $gpu;
    public $ram;
    public $stockage;
    public $nom;

    public function __construct ($Ngpu,$Ncpu,$Nram,$Nstockage,$Nnom)
    {
        $this->cpu = $Ncpu;
        $this->gpu = $Ngpu;
        $this->ram = $Nram;
        $this->stockage = $Nstockage;
        $this->nom = $Nnom;
    }

    public function setCPU($Ncpu)
    {
        $this->cpu = $Ncpu;
    }

    public function setGPU($Ngpu)
    {
        $this->gpu = $Ngpu;
    }

    public function setRAM($Nram)
    {
        $this->ram = $Nram;
    }

    public function setSTOCKAGE($Nstockage)
    {
        $this->stockage = $Nstockage;
    }

    public function setNOM($Nnom)
    {
        $this->nom = $Nnom;
    }

    public function getRAM()
    {
        return $this->ram;
    }

    public function getDoubleRAM()
    {
        getRAM()
        {
            $this->ram = $ram * 2
        };
        return $this->ram;
    }
}



$aurora = new Ordinateur('NVIDIA GeForce RTX 3090, 24 Go de mémoire GDDR6X','Intel® Core™ i9-10900KF','64 Go de mémoire DDR4','2To SSD','ALIENWARE AURORA');
$stirx = new Ordinateur('NVIDIA® GeForce® RTX 2080 Ti, 11 Go de mémoire GDDR6X','Intel® Core™ i9-10900KF 3,7 GHz','32Go de mémoire DDR4','HDD de 2 To','ROG Strix GT35');
var_dump($stirx);
var_dump($aurora);
echo 'ram de stirx =>'.$stirx->getRAM();
echo 'ram x2 de strix =>'.$stirx->getDoubleRAM();
?>
