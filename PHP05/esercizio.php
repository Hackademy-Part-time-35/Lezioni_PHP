<?php
/*
1. Crea una classe Company che abbia i seguenti attributi pubblici:

 	a. name: nome dell’azienda; 
	b. location: stato in cui e' ubicata la sede dell’azienda; 
	c. tot_employees: numero di dipedenti assunti in quella sede (di default, 0); 

2. Crea 5 istanze di 5 aziende diverse 

3. Crea un metodo che permetta di stampare a terminale la seguente frase: “L’ufficio Aulab con sede in Italia ha ben
 50 dipendenti“; se la sede non ha dipendenti, allora stampa: “L’ufficio Aulab con sede in Italia non ha dipendenti“; 

4. Aggiungi un nuovo attributo chiamato $avg_salary nella Classe Company. Aggiorna poi le aziende che hai gia' creato nel punto 2. 

5. Implementa un metodo che calcoli la spesa per un numero variabile di mesi (praticamente il metodo deve accettare come parametro N mesi) e poi uno che stampi a schermo l’informazione (sono due metodi diversi); 

6. Implementa un attributo statico che tenga traccia di quante aziende sono state create;

 7. Implementa un metodo statico che stampi a schermo quante aziende sono state create.

 Extra: 
1. Implementa un attributo statico che, in un array, salvi il costo medio annuale relativo ai dipendenti di ogni azienda;
2. Implementa un metodo statico che stampi la seguente frase a schermo: “Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di 40000 all’anno”. 
*/

class Company{
    //attributi all'inizio
    public static $count;
    public static $avgCostForCompany = [];

    public $name;
    public $location;
    public $tot_employees;

    public $avg_salary;

    //metodi alla fine
    public function __construct($name,$location,$tot_employees,$avg_salary = 3000)
    {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->avg_salary = $avg_salary;

        self::$count++;
        self::$avgCostForCompany[] = $this->calculateAvgCostForNMonths(12);
    }

    public function printPhrase(){
        if($this->tot_employees>0){
            echo "L’ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti";
        }else{
            echo "L’ufficio $this->name con sede in $this->location non ha dipendenti";
        }
    }

    public function calculateAvgCostForNMonths($months){
        return $this->avg_salary * $this->tot_employees * $months;
    }

    public function printAvgCostForNMonths($months){
        echo $this->calculateAvgCostForNMonths($months);
    }

    public static function printCompanyCount(){
        echo self::$count;
    }

    public static function printTotCompaniesCosts(){

        $totalCost = array_sum(self::$avgCostForCompany);
        echo "Considerando tutte le aziende nel nostro Gruppo, spendiamo in media un totale di $totalCost all’anno";
    }

}



$company1 = new Company('Aulab','Bari',100,3500);
$company2 = new Company('Ford','Milano',1020,1309);

Company::printTotCompaniesCosts(); 

$company3 = new Company('Cocacola','Torino',160);
$company4 = new Company('Pepsi','Firenze',230);
$company5 = new Company('Google','Washington',10000);


// $company4->printAvgCostForNMonths(2);
// Company::printCompanyCount();
// $company1::printCompanyCount();

// $company3->printPhrase();

// Company::printTotCompaniesCosts();

