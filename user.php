<!-- Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online.

Ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.

Strutturare le classi gestendo l'ereditarietà dove necessario.

Ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, oppure diverse tipologie di prodotti.

BONUS: Provate a far interagire tra di loro gli oggetti: ad esempio, l'utente dello shop inserisce una carta di credito...
$c = new CreditCard(..);
$user->insertCreditCard($c);

Gestite eventuali eccezioni che si possono verificare (es: carta di credito scaduta). -->

<?php 
require_once(__DIR__ . '/credit_card.php');
require_once(__DIR__ . '/billing_adress.php');


class User extends CreditCard {
    public $name;
    public $surname;
    public $date_of_birth;
    public $registration_date;
    private $email;
    private $n_cell;
    use BillingAdress;

    function __construct($_name, $_surname,$_date_of_birth,$_email,$_n_cell)
        {
            $this->name = $_name;
            $this->surname = $_surname;
            $this->date_of_birth = $_date_of_birth;
            $this->email = $_email;
            $this->n_cell = $_n_cell;
            $this->registration_date = date('d/m/Y');
        }

        function setUserName($_name){
            $this->name = $_name;
        }
        function setSurname($_surname){
            $this->surname = $_surname;
        }
        
        function setDateBirth($_date_of_birth){
            $this->date_of_birth = $_date_of_birth;
        }
        function setEmail($_email){
            $this->email = $_email;
        }
        function setCellNumber($_n_cell){
            $this->n_cell = $_n_cell;
        }
        function setRegistrationDate(){
            $this->registration_date = date('d/m/Y');
        }

        function getUsername(){
            return $this->name;
        }
        function getSurname(){
            return $this->surname;
        }

        function getDateBirth(){
            return $this->date_of_birth;
        }
        function getEmail(){
            return $this->email;
        }
        function getCellNumber(){
            return $this->n_cell;
        }
        function getRegistrationDate(){
            return $this->registration_date;
        }

}

?>