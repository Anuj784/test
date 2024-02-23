<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
    <header> <img src="sclogo.jpg" width="30%">
    <h1> <center> <b> <u>Future Education Group </u></b></center></h1>
</img>

    </header>

</head>
<body>
    
    <?php
        include("init.php");

        if(!isset($_GET['class']))
            $class=null;
        else
            $class=$_GET['class'];
        $rn=$_GET['rn'];

        // validation
        if (empty($class) or empty($rn) or preg_match("/[a-z]/i",$rn)) {
            if(empty($class))
                echo '<p class="error">Please select your Sub</p>';
            if(empty($rn))
                echo '<p class="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$rn))
                echo '<p class="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `name` FROM `students` WHERE `rno`='$rn' and `class_name`='$class'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $name = $row['name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `rno`='$rn' and `class`='$class'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>

    <div class="container">
        <div class="details">
            <span>Name:</span> <?php echo $name ?> <br>
            <span>Sub:</span> <?php echo $class; ?> <br>
            <span>Roll No:</span> <?php echo $rn; ?> <br>
        </div>

        <div class="main">
            <div class="s1">
                <td>
                <tr><p>Subjects</p></tr>
                <tr><p>Ms.office</p></tr>
                <tr><p>Tally Prime</p></tr>
                <tr><p>DTP</p></tr>
                <tr><p>Hardware</p></tr>
            </td>
            </div>
            <div class="s2">
                <td>
                <tr><p>Marks</p></tr>
                <tr><?php echo '<p>'.$p1.'</p>';?></tr>
                <tr><?php echo '<p>'.$p2.'</p>';?></tr>
                <tr><?php echo '<p>'.$p3.'</p>';?></tr>
                <tr><?php echo '<p>'.$p4.'</p>';?></tr>
               </td>
            </div>
        </div>
        </table>

        <div class="result">
            <?php echo '<p>Total Marks:&nbsp'.$mark.'</p>';?>
            <?php echo '<p>Percentage:&nbsp'.$percentage.'%</p>';?>
        </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>

    <footer>
  <p class="p-3 bg bg-dark text-white"> Copyright © 2023. All rights reserved FutureEducationGroup.
  
  </p>
</footer>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>   
</body>
</html>