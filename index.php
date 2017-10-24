<?php 
class PersonOne {
  protected $mobile;
  private $age = 20;
}
class Person extends PersonOne {
  public $first_name = 'abdullah';
  public $last_name = 'mamun';
  public $email = 'abdullahmamun@gmail.com';
  public static $city = 'feni';
  public function full_name () {
    return $this->first_name . ' ' . $this->last_name;
    return "{$this->first_name}  {$this->last_name}";
  }
  public function mobile () {
    return $this->mobile;
  }
  public function __construct ($first_name, $last_name, $email, $mobile='01867225608') {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->email = $email;
    $this->mobile = $mobile;
  }
}
$people = [
 new Person('Sumon', 'hasan', 'sumonhasan@gmail.com', '183729186'),
 new Person('nijam', 'haydar', 'nijamhaydar@gmail.com', '7896435'),
 new Person('tanisa', 'akter', 'tanisaakter@gmail.com', '7512622412'),
 new Person('mimi', 'islam', 'mimiislam@gmail.com')
];
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Hello world in php</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>

  <table class="table">
    <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Full Name</th>
      <th>Emails</th>
      <th>Mobile</th>
    </tr>

    <?php foreach ($people as $person): ?>
      <tr>
        <td><?= $person->first_name ; ?></td>
        <td><?= $person->last_name ; ?></td>
        <td><?= $person->full_name() ; ?></td>
        <td><?= $person->email ; ?></td>
        <td><?= $person->mobile() ; ?></td>
      </tr>
    <?php endforeach; ?>


  </table>
  <?= Person::$city ; ?>

</body>
</html>