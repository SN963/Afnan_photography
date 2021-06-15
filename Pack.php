<?php
  require_once('conn.php');
  class package extends dbConnect
  {
    public $price;
    public $city;
    public $desc;
    public $ID;
    public $IDp;
    public $Event;
    public function displayPackages($city,$packType)
    {
        $this->city=$city;
        $this->Event=$packType;
        echo $this->city;
        echo "<br>";
        echo $this->Event;
        echo "<br>";
        $sql="SELECT `ID` FROM `package type` WHERE `Package_Name`= '".$packType."'";
        $stmt=$this->connect()->query($sql);
        while($rows=$stmt->fetch())
        {
            $this->ID=$rows['ID'];
            //echo $this->ID;
            $this->IDp=$this->ID;
            echo $this->IDp;
        }

        $sql2="SELECT * FROM `packages` WHERE City ='$city' AND ID_Package_Type ='.$this->ID.' ";
        $stmt=$this->connect()->query($sql2);
 
        while($row=$stmt->fetch())
        {
            $this->price=$row['Price'];
            $this->desc=$row['Description'];
        }
         

 }
    public function ListOfCity()
  {
      $sql = "SELECT DISTINCT CityName FROM `city`";
      $stmt=$this->connect()->query($sql);
      while($row=$stmt->fetch())
      {
        echo '<option value="'.$row['CityName'].'">'.$row['CityName'].'</option>' ;
        echo $row['CityName'];
      }   
     
  }
  public function ListOfPack()
  {
      $sql = "SELECT DISTINCT Package_Name FROM `package type`";
      $stmt=$this->connect()->query($sql);
      while($row=$stmt->fetch())
      {
        echo '<option value="'.$row['Package_Name'].'">'.$row['Package_Name'].'</option>' ;
        echo $row['Package_Name'];
      }   
  }
    public function getprice()
    {
        echo $this->price;
    }
    public function getcity()
    {
        echo $this->city;
    }
    public function getdescription()
    {
        echo $this->desc;
    }

 }
 
  ?>  

<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
if(isset($_POST['insert']))
{
    $t=new package();
    $t->displayPackages($_POST['city'],$_POST['Pack']);
    echo $t->city;
    echo "<br>";
    echo $t->Event;
    echo "<br>";
    echo $t->price;
    echo "<br>";
    echo $t->ID;
    echo "<br>";
    echo $t->desc;

}
?>

<html>
<head>

    <link rel="stylesheet" type="text/css" href="pack.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald|Noto+Sans">
    <link rel="shortcut icon"  href="Images/LB_Editedb.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
  
<form action ="PackDraft.php" method="POST">
<lable>Select City</lable>
    <input list="City" name="city" style="margin-top: 150px;">
        <datalist id="City">
            <h2><?php $na=new package(); $na->ListOfCity();?></h2>
        </datalist>
        <lable>Select Type of Session</lable>
    <input list="Packages" name="Pack">
        <datalist id="Packages">
            <?php $n=new package(); $n->ListOfPack();?>
        </datalist>

<input type="submit" name="insert" id="myBtn" value="check" placeholder ="Add" style="margin-left: 100px;">
</form>

    <div class="pack">
    <div class="col">
        <div class="title"><h2><?php print $t->Event;?></h2></div>
    <img src="packphotos/3.jpeg">
    <div class="content">
        <ul>
            <li>
                <div class="dropdown">
                    <p><?php print $t->city; ?></p>
                    <p><?php print $t->price; ?></p>
                    <p><?php print $t->desc; ?></p>
                    <div class="dropdown-content">
                        <p>City:<?php $r=new package(); print $r->getcity(); ?></p>
                        <p>Price :</p><?php $r=new package();print $r->getprice();?><p>EGP</p>
                        <p>Description :</p><?php $r=new package();print $r->getdescription();?>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span></span>
                    <div class="dropdown-content">
                        <p></p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>

        
    </div>
    </div>

<div class="col">
    <div class="title"><h2>Engagment</h2></div>
    <img src="packphotos/1.jpeg">
    <div class="content">
        
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
            <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2>Casual</h2></div>
    <img src="packphotos/2.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div>
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
    </div>
</div>
    <div class="col">
    <div class="title"><h2 id="other">Other</h2></div>
    <img src="packphotos/4.jpeg">
    <div class="content">
        <ul>
            
            <li>
                <div class="dropdown">
                    <span>Cairo</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>ismailia</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>zagazig</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>
            <li>        
                <div class="dropdown">
                    <span>Alex</span>
                    <div class="dropdown-content">
                        <p>Start from 1000EG to 3000EG</p>
                    </div>
                </div>
            </li>

        </ul>
        <div class="triangle-up"></div> 
        <div class ="btn">
            <a class ="glow" href="BOOK.php">Book now</a>
        </div>
        
    </div>
    </div>
    </div>
</body>
</html>

