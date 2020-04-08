<?php
    require('db_connect.php');
    $query_students = 'SELECT * FROM students ORDER BY student_id';
    $student_statement = $db->prepare($query_students);
    $student_statement->execute();
    $students = $student_statement->fetchAll();
    $student_statement->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>PHP CRUD</title>
</head>
<body>
    <h2 class="mt-4">Student List</h2>
    <table class="mt-4 table table-bordered">
    <thead>
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Street</th>
        <th scope="col">City</th>
        <th scope="col">State</th>
        <th scope="col">Zip</th>
        <th scope="col">Phone</th>
        <th scope="col">DOB</th>
        <th scope="col">Sex</th>
        <th scope="col">Entered</th>
        <th scope="col">Launch</th>
        </tr>
    </thead>
    <tbody>
       
    <?php foreach($students as $student) : ?>
        <tr>
            <td><?php echo $student['student_id']; ?></td>
            <td><?php echo $student['first_name'] . ' ' . $student['last_name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['street']; ?></td>
            <td><?php echo $student['city']; ?></td>
            <td><?php echo $student['state']; ?></td>
            <td><?php echo $student['zip']; ?></td>
            <td><?php echo $student['phone']; ?></td>
            <td><?php echo $student['birth_date']; ?></td>
            <td><?php echo $student['sex']; ?></td>
            <td><?php echo $student['date_entered']; ?></td>
            <td><?php echo $student['lunch_cost']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Insert Student</h2>
<form action="add_student.php" method="post" id="add_student_form" class="ml-2">
  <div class="form-group">
    <label for="exampleInputEmail1"> First Name:</label>
    <input type="email" name="first_name" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Last Name:</label>
    <input type="email" name="last_name" class="form-control w-25">
  </div> 
  <div class="form-group">
    <label for="exampleInputEmail1">Email address:</label>
    <input type="email" name="email" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Street:</label>
    <input type="email" name="street" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">City:</label>
    <input type="email" name="city" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">State:</label>
    <input type="email" name="state" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Zip Code:</label>
    <input type="email" name="zip" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone:</label>
    <input type="email" name="phone" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date Of Birth:</label>
    <input type="email" name="birthdate" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Sex:</label>
    <input type="email" name="sex" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Entered:</label>
    <input type="email" class="form-control w-25">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lunch:</label>
    <input type="email" name="lunch" class="form-control w-25">
  </div>
  <input type="submit" class="btn btn-primary" value="Add Student">Add Student<br />
</form>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>