<?php
 

  if(!isset($_SESSION["email"]) && !isset($_SESSION["password"])){
    header("location:login.php");
  }


                      if(!isset($_SESSION['notes']) )
                      {
                              $_SESSION['notes']=array();
                      }

                      if($_SERVER["REQUEST_METHOD"]="post" && isset($_POST['title'])){
                        
                          $note=array("title"=>$_POST["title"],"content"=>$_POST["content"]);
                                              
                          array_push($_SESSION['notes'],$note); 
                      
                      }
  
                  
                  if(isset($_SESSION['notes']) && count($_SESSION["notes"])){
                    
                    foreach($_SESSION['notes'] as $note){
                      $i=array_search($note,$_SESSION['notes']) +1;
                    echo"
                    <tr>
                      <th >".$i."</th>
                      <td>".$note["title"]."</td>
                      <td>".$note["content"]."</td>
                      
                    </tr>";
                    echo  "<br>";
  
            
                    }

                  }        
                    
 ?>
