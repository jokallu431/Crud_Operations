<?php
$db = mysqli_connect("localhost","root","","phpcrud_db");
if(!$db){
    die('error in database'.mysqli_error($db));
}else{
    $id = $_GET['id'];
    $qry = "select * from user where user_id = $id";
    $run = $db -> query($qry);
    if($run -> num_rows>0){
        while($row = $run -> fetch_assoc()){
            $fname =$row['fname'];
            $lname =$row['lname'];
            $email =$row['email'];
            $mob =$row['mob'];
            $course =$row['course'];
            $year =$row['year'];
            $house =$row['house'];
            $street =$row['street'];
            $village =$row['village'];
            $country =$row['country'];
            $state =$row['state'];
            $district =$row['district'];
            $hobbies =$row['hobbies'];
        }
    }
}


?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<body>
<div class="container-fluid px-1 py-5 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center"> 
                <div class="card">
                    <h5 class="text-center mb-4">Student Registration Form</h5>
                    <form class="form-card" method="POST">
                        <div class="row justify-content-between text-left">
                          <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">First Name</label> 
                            <input type="text"  name="fname"  value="<?php echo $fname; ?>" required> 
                        </div>
                          <div class="form-group col-sm-6 flex-column d-flex"> 
                            <label class="form-control-label px-3">Last Name</label> 
                            <input type="text"  name="lname"  value="<?php echo $lname; ?>" required> 
                        </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Email</label> 
                                <input type="text"  name="email"  value="<?php echo $email; ?>" required > 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Phone number</label> 
                                <input type="text"  name="mob"  value="<?php echo $mob; ?>" required > 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Course</label> 
                                <input type="text" name="course"  value="<?php echo $course; ?>"required > 
                            </div>
                            <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Year</label> 
                            <select name="year" value="<?php echo $year; ?>">
                                    <option value="First Year">First Year</option>
                                    <option value="Second Year">Second Year</option>
                                    <option value="Third Year">Third Year</option>
                                </select>
                            
                        </div>
                        <h5 class="text-center mt-2">Address</h5>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-sm-3 flex-column d-flex"> 
                                <label class="form-control-label px-3">House Name</label> 
                                <input type="text" name="house"  value="<?php echo $house; ?>" required> 
                            </div>
                            <div class="form-group col-sm-6 flex-column d-flex"> 
                                <label class="form-control-label px-3">Street Name</label> 
                                <input type="text" name="street"  value="<?php echo $street; ?>" required> 
                            </div>
                            <div class="form-group col-sm-3 flex-column d-flex"> 
                                <label class="form-control-label px-3">Village/Town</label> 
                                <input type="text" name="village"  value="<?php echo $village; ?>" required > 
                            </div>
                        </div>
                        <div class="row justify-content-between text-left">
                          <div class="form-group col-sm-4 flex-column d-flex"> 
                            <label class="form-control-label px-3">District</label> 
                            <input type="text" name="district"  value="<?php echo $district; ?>" required> 
                        </div>
                          <div class="form-group col-sm-4 flex-column d-flex"> 
                            <label class="form-control-label px-3">State</label> 
                            <input type="text" name="state"  value="<?php echo $state; ?>" required> 
                        </div>
                        <div class="form-group col-sm-4 flex-column d-flex"> 
                            <label class="form-control-label px-3">Country</label> 
                            <input type="text" name="country"  value="<?php echo $country; ?>" required> 
                        </div>
                      </div>
                      <h5 class="text-center mt-2">Co-Curricular Info</h5>
                        <div class="row justify-content-between text-left">
                            <div class="form-group col-6 flex-column d-flex"> <label class="form-control-label px-3">Hobbies</label>
                            <select name="hobbies" value="<?php echo $hobbies; ?>" >
                                      <option value="Reading books">Reading books</option>
                                      <option value="programming">programming</option>
                                      <option value="Riding bike">Riding bike</option>
                                      <option value="Singing">Singing</option>
                                      <option value="Painting">Painting</option>
                            </select> 
                           
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="form-group col-sm-6">
                                <input type="submit" name="update" value="Update">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php 
    if(isset($_POST['update'])){
        $fname =$_POST['fname'];
        $lname =$_POST['lname'];
        $email =$_POST['email'];
        $mob =$_POST['mob'];
        $course =$_POST['course'];
        $year =$_POST['year'];
        $house =$_POST['house'];
        $street =$_POST['street'];
        $village =$_POST['village'];
        $country =$_POST['country'];
        $state =$_POST['state'];
        $district =$_POST['district'];
        $hobbies =$_POST['hobbies'];

        $qry = "update user set fname='$fname',lname='$lname',email='$email',mob='$mob',course='$course',year='$year',house='$house',street='$street',village='$village',district='$district',state='$state',country='$country',hobbies='$hobbies' where user_id=$id";

        if(mysqli_query($db, $qry)){
            header('location:edit.php');
        }else{
            echo mysqli_error($db);
        }
        
    }
    ?>
    <div class="container-fluid">
                    <h5 class="text-center mb-4">Users List</h5>
                    <table class="table-responsive table table-dark table-striped">
                        <thead>
                            <tr>
                            <th>FirstName</th>
                            <th>LastName</th>
                            <th>Email</th>
                            <th>Mobile No.</th>
                            <th>Course</th>
                            <th>Year</th>
                            <th>House</th>
                            <th>Street</th>
                            <th>Village</th>
                            <th>District</th>
                            <th>State</th>
                            <th>Country</th>
                            <th>Hobbies</th>
                            
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                           
                            $qry = "select * from user where user_id = $id";
                            $run = $db -> query($qry);
                            if($run -> num_rows>0){
                                while($row = $run -> fetch_assoc()){
                                    
                        ?>
                            <tr class="table-light">
                            <td><?php echo $row['fname'] ?></td>
                            <td><?php echo $row['lname'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['mob'] ?></td>
                            <td><?php echo $row['course'] ?></td>
                            <td><?php echo $row['year'] ?></td>
                            <td><?php echo $row['house'] ?></td>
                            <td><?php echo $row['street'] ?></td>
                            <td><?php echo $row['village'] ?></td>
                            <td><?php echo $row['district'] ?></td>
                            <td><?php echo $row['state'] ?></td>
                            <td><?php echo $row['country'] ?></td>
                            <td><?php echo $row['hobbies'] ?></td>
                             
                            
                            </tr>
                            <?php 
                                }
                            }
                            ?>
                        </tbody>
                    </table>
        </div>
</body>
</html>