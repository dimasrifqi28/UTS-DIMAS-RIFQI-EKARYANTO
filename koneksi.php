<?php
session_start(); // ini adalah kode untuk memulai session
        $host = "dimasrifqi28.my.id";
        $Username = "dimasrif_dimasrifqi28";
        $Password = "Minerva123";

        try{
            $conn = new PDO("mysql:host=dimasrifqi28.my.id; dbname=dimasrif_db_puasa", "dimasrif_dimasrifqi28", "Minerva123");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            if(isset($_POST['login'])) { // mengecek apakah form variabelnya ada isinya
                if (isset($_POST["login"])) {
                  if (empty($_POST["Username"]) || empty($_POST["Username"])) {
                    $message = '<label> isi dulu</label>';
                  }else{
                    $query = "SELECT * FROM login WHERE Username =:Username AND Password =:Password";
                    $statment = $conn->prepare($query);
                    $statment->execute(
                      array(
                        'Username' => $_POST["Username"],
                        'Password' => $_POST["Password"]
                      )

                    );
                    $count = $statment->rowCount();

                    if ($count > 0 ) {
                      $_SESSION["Username"] = $_POST["Username"];
                      header("location:loginpuasa.php ");
                    }else{
                      $message = '<label>wrong</label>';
                    }
                  }
                }
                
            }
            
        }catch (PDOException $e){
            echo "ERROR : " .$e->getMessage();
        }


?>