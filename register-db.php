<?php


if($_SERVER["REQUEST_METHOD"]=="POST" && isset( $_POST["register"] )){
     require("db.php");

   
     $firstname = trim( $_POST["firstname"] );
     $lastname = trim( $_POST["lastname"] );
     $student_id = trim( $_POST["student_id"] );
     $department = trim( $_POST["department"] );
     $email = trim( $_POST["email"] );
     $username = trim( $_POST["username"] );
    $password = trim( $_POST["password"] );
    $confirm_password = trim( $_POST["confirm_password"] );

    if ($password !== $confirm_password) {
        $errorMessage = "Passwords do not match.";
        header("Location: register.php?status=error&message=" . urlencode($errorMessage));
        exit;
    }

    $hashpassword = password_hash($password,PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (firstname,lastname,student_id,department,email,username,password) VALUES(:firstname,:lastname,:student_id,:department,:email,:username,:password)";

     try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
                'firstname'=>$firstname,
                'lastname'=>$lastname,
                'student_id'=>$student_id,
                'department'=>$department,
                'email'=>$email,
                'username'=>$username,
                 'password'    => $hashpassword 

            ]);
           header("Location: register.php?status=success");
            exit;

    }catch (PDOException $e){
    $errorMessage = $e->getMessage();  // define it first!
    header("Location: register.php?status=error&message=" . urlencode($errorMessage));
    exit;
}

   
  }
?>