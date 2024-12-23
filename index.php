
<?php
include 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="nom">
        <input type="text" name="email">
        <select name="role" id="">
            <?php
                $sql="SELECT id,name FROM role";
                $result=mysqli_query($conn,$sql);
                
                $row=mysqli_fetch_assoc($result);
                
            ?>
            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
            
        </select>
        <button type="submit" name="save">save</button>
    </form>
    <?php
        if(isset($_POST["save"])){
            $name=$_POST["nom"];
            $email=$_POST["email"];
            $role=$_POST["role"];
            $sql="INSERT INTO users ('name','email','role_id') VALUES (?,?,?)";
            

        }
    ?>
</body>
</html>