<?php

declare(strict_types=1);

class Account {
  public $number;
  public $type;
  public $balance = 0.00; 


function __construct($number, $type, $balance) {
  $this->number = $number;
  $this->type = $type;
  $this->balance = $balance;

}


function deposit(float $amount): float {
  $this->balance += $amount;
  return $this->balance;
}

function withdraw(float $amount): float {
  $this->balance -= $amount;
  return $this->balance;
}
}

?>

<?php include 'includes/header.php'; ?>
<h2>Account Balances</h2>
<table>
  <tr>
    <th>Date</th>
    <td><?php echo $checkingAccount->balance; ?></td>
    <td><?php echo $savingsAccount->balance; ?></td>

  </tr>
  <tr>
    <td>23 June</td>
    <td><?php echo $checkingAccount->balance; ?></td>
    <td><?php echo $savingsAccount->balance; ?></td>

  </tr>
  <tr>
    <td>24 June</td>
    <td><?php echo $checkingAccount->deposit(2040); ?></td>
    <td><?php echo $savingsAccount->withdraw(3005); ?></td>
  </tr>
  <tr>
    <td>25 June</td>
    <td><?php echo $checkingAccount->deposit(2409); ?></td>
    <td><?php echo $savingsAccount->withdraw(3030); ?></td>

  </tr>
  <tr>
    <td>26 June</td>
    <td><?php echo $checkingAccount->withdraw(24093); ?></td>
    <td><?php echo $savingsAccount->withdraw(30303); ?></td>

  </tr>
</table>
<?php include 'includes/footer.php'; ?>

