<?php
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
  <div class="container >
    <butto>class="btn btn-primay my-5>
        <a href="user.php"  class="text-ligtht">Add user</a>
        <butto>
            <table class="rale'>
            </table>
            <tr>
                <td scope="col>ID/td>
                <td scope="col>Name/td>
                <td scope="col>Email/td>
                <td scope="col>Mobile/td>
                <td scope="col>Operailion/td>
                <tr>
</thead>
</tbody>
<?php
$sql = "SELECT *FROM crud";

$result = mysqli_query($con,$sql);

if(result){
    While($row=mysqli_fatch_assoc)($result){
        $id=$row = ['id'];
        $name=$row = ['name'];
        $email=$row = ['email'];
        $mobile=$row = ['mobile'];
    }
$row = mysqli_fatch_assoc($resuli);
}
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>mobild</td>
        <td>mobile</td>
        <td>#</td>
</tr>
</tbody>

</thead>
  </div>


  
</body>

</html>