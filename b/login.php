<?php include "header.php";
    // if (isset($_POST['submit']))
    // {   
        if(isUserLogged()) {
            if(isset($_SESSION["id"])){
                unset($_SESSION["id"]);
                unset($_SESSION["name"]);
                unset($_SESSION["surname"]);
               // unset($_SESSION["pass"]);
            }
            session_destroy();
            session_start();
        }

        $_POST['pass']=md5($_POST['pass']);
      
        $sql = "SELECT name,surname,pass FROM person_information";
        $result = $conn->query($sql);
        if($result = mysqli_query($conn, $sql)){
            if(mysqli_num_rows($result) > 0){
         
                // echo "<table>";
               
                
                while($row = mysqli_fetch_assoc($result)){
               
               
                    if (($row['name']==$_POST['name']) and ($row['surname']==$_POST['surname']) and ($row['pass']==$_POST['pass'])){
                      
                    // echo "<tr>";
                    //     echo "<td>";
                    //     echo "Vardas: " . $row['name'] . "<br>";
                    //     echo "Pavardė: " . $row['surname'] . "<br>";                       
                    //     echo "Slaptažodis: " . $row['pass'] . "<br>";

                        $_SESSION=[
                            'id'=>'1',
                            'name'=>$row['name'],
                            'surname'=>$row['surname'],
                            
                        ];
                        echo "<br>Prisijungimas pavyko<br><a href='admin.php'>Vartotojo zona</a>";
                        
                    //     echo "</td>";
                    // echo "</tr>";
                    }
                    else {
                        "Neteisingi duomenys";
                    }
                 
                }
                // echo "</table>";
          
                // Free result set
                mysqli_free_result($result);
                

            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }


       //logIn($_POST['name'],$_POST['surname'],$_POST['pass']);


    // }
 include "footer.php";
?>