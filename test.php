
<?php



                    $connection = mysqli_connect('localhost', 'root', '', 'cms');

                    if($connection){
                        echo "We are connected!!!";
                    }

                    $query = "SELECT * FROM cetegories";
                    echo  $query;
                  
                    $select_all_categories_query  = mysqli_query($connection, $query);
                 
                  
                    while($row = mysqli_fetch_assoc($select_all_categories_query))
                    {
                            $name = $row["cat_title"];
                            echo "<br>".$name;
                        
                    }

?>