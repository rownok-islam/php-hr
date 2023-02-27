<?php

class Person{
    public $name;
    public $email;

    
    function set_name($name){
        $this->name = $name;
    }

    function set_email($email){
        $this->email = $email;
    }

    function get_name(){
        return $this->name ;
    }

    function get_email(){
        return $this->email;
    }

    function display_info(){
        echo("Name: ".$this->name);
        echo("\nEmail: ".$this->email);
    }
}

$obj = new Person();
$obj->set_name('Rownok');
$obj->set_email('rownokislam075@gmail.com');

/*echo("Name: ".$obj->get_name());
echo("Email: ".$obj->get_email());
echo("\n");*/


?>

<html>
<body>
<h1>OOP Input & Output</h1>
<ul>
  <li><?php echo("Name: ".$obj->get_name());?></li>
  <li><?php echo("Email: ".$obj->get_email());?></li>
  
</ul>

<h1>Input Form</h1>
<form action="assign5.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php

$obj2 = new Person();
$obj2->set_name($_POST["name"]);
$obj2->set_email($_POST["email"]);

?>

<h1>Output of Form Data</h1>
<ul>
  <li><?php echo("Name: ".$obj2->get_name());?></li>
  <li><?php echo("Email: ".$obj2->get_email());?></li>
  
</ul>


</body>
</html>