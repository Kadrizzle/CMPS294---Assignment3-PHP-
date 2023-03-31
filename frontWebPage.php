<?php

        $title = $_POST['title'];
        $author = $_POST['author'];
        $isbn = $_POST['isbn'];
        $publisher = $_POST['publisher'];
        $year = $_POST['year'];
        $select = $_POST['main'];
        $dataFile = "data.txt";


        if(empty($title) || empty($author) || empty($isbn) || empty($publisher) || empty($year)){
            echo "Fill in the fields that are empty";
        }


        switch($select){
            case 1:

                $title = $_POST['title'];
                $author = $_POST['author'];
                $isbn = $_POST['isbn'];
                $publisher = $_POST['publisher'];
                $year = $_POST['year'];
                $select = $_POST['main'];
                $dataFile = "data.txt";

                $file = fopen($dataFile, 'a');  

                $stringedInputs = "$title%$author%$isbn%$publisher%$year%$select\n";                                                                        
                fwrite($file, $stringedInputs);
            
                fclose($file);
                
            echo "<a href='frontPage.html'>Go back to main page</a>";
    


                break;

            case 2:


                break;


            case 3:


                break;
        }
    

      ?>
