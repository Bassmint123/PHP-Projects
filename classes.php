<?php
// Checking account example
class CheckingAccount {

  public $balance = 0;
  const pi = 3.14159;    // creates a constant
  private $fun_money = 200;
  protected $extra_money = 100;

  public function DisplayBalance(){
     return $this->balance;
  }

  public function Withdraw($money){
    if ($money > $this->balance){
        echo 'There is not enough money.';
    } else {
        $this->balance = $this->balance - $money;
        return $this->balance;
    }
  }

  public function Deposit($cash){
     $this->balance = $this->balance + $cash;
     return $this->balance;
  }

  public function Area($radius){
     return self::pi * ($radius * $radius);
  }
  
  public function Welcome(){
     echo 'Welcome to our bank!<br>';
  }
}

class SavingsAccount extends CheckingAccount {

}

$brad = new CheckingAccount;
$dianne = new CheckingAccount;
$greeting = new CheckingAccount;

$bradley = new SavingsAccount;

// Display welcome message
$greeting->Welcome();

// Brad's account activity
echo 'Brad\'s initial balance is: '.$brad->DisplayBalance().'<br>';
echo 'Brad\'s deposited balance is: '.$brad->Deposit(500).'<br>';
echo 'Brad\'s balance after withdraw is: '.$brad->Withdraw(50).'<br>';
echo 'Brad\'s new current balance is: '.$brad->DisplayBalance().'<br>';
echo '<br>';
echo 'Brad\'s initial savings balance is: '.$bradley->DisplayBalance().'<br>';
echo 'Brad\'s deposited savings balance is: '.$bradley->Deposit(500).'<br>';
echo '<br>';

// Dianne's account activity
echo 'Dianne\'s initial balance is: '.$brad->DisplayBalance().'<br>';
echo 'Dianne\'s deposited balance is: '.$dianne->Deposit(1500).'<br>';
echo 'Dianne\'s balance after withdraw is: '.$dianne->Withdraw(423).'<br>';
echo 'Dianne\'s new current balance is: '.$dianne->DisplayBalance().'<br>';
echo '<br>';

echo 'The area of Brad\'s circle is: '.$brad->Area(5).'<br>';
echo 'The area of Dianne\'s circle is: '.$brad->Area(25);
echo '<br>';
echo "The year is ".date("Y");


?>
