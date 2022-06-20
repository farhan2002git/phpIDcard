<?php 
       if (isset($_POST['btn'])) {

        $name = $_POST['name'];
        $roll = $_POST['roll'];
        $email = $_POST['email'];
        $phn = $_POST['number'];
        $cls = $_POST['cls'];
        $bld = $_POST['bld'];
    }



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>bio</title>
     <link rel="stylesheet"  href="css/bootstrap.min.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    
</head>
<body class="bg-dark">
<div class="container bg-light mt-3 py-3">
    <div class="border border-rounded ">
        <div class="row">
            <div class="col-lg-12 col-md-6">

                <div class="card bg-info" style="width: 18rem;">

                
                    <div class="row">
                        <div class="col-3">
                            <img class="img-fluid m-1 rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Roundel_of_Bangladesh_%E2%80%93_Army_Aviation.svg/1200px-Roundel_of_Bangladesh_%E2%80%93_Army_Aviation.svg.png">
                        </div>
                        <div class="col-9">
                           <p class="text-center h5 my-3">BANGLADESH ARMY</p> 
                        </div>
                    </div>    
                
                    
                  <img src="https://thumbs.dreamstime.com/b/flag-bangladesh-military-uniform-army-troops-soldiers-collage-163948010.jpg" class="card-img-top" alt="img">

                  <div class="card-body">
                    <h5 class="card-title text-center bg-light border border-rounded p-1">- ID CARD -</h5>

                    <table class="table table-borderless  table-hover text-center ">
                        <tr>
                            <td>Name </td>
                            <td>:</td>
                            <td><?php
                            if (isset($name)) {
                                 echo $name;
                             } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>class </td>
                            <td>:</td>
                            <td><?php
                            if (isset($cls)) {
                                 echo $cls;
                             } ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Roll </td>
                            <td>:</td>
                            <td>
                            <?php
                            if (isset($roll)) {
                                 echo $roll;
                             } ?></td>
                        </tr>
                        <tr>
                            <td>phone </td>
                            <td>:</td>
                            <td>
                            <?php
                            if (isset($phn)) {
                                 echo $phn;
                             } ?></td>
                        </tr>
                        <tr>
                            <td>blood </td>
                            <td>:</td>
                            <td><?php
                            if (isset($bld)) {
                                 echo $bld;
                             } ?></td>
                        </tr>
                         <tr>
                            <td>Email </td>
                            <td>:</td>
                            <td><?php
                            if (isset($email)) {
                                 echo $email;
                             } ?></td>
                        </tr>
                        
                    </table>

                    
                  </div>
                </div>
            </div>


            <div class="col-lg-12 col-md-6 mt-3 ">

                <h2>- welcom -</h2>

                <p class="bg-light">

                Assalamualaikum Md.<?php
                            if (isset($name)) {
                                 echo $name;
                             } ?> . welcome to Bangladesh Army!!.We are come to know that, you are a student of 
                             <?php
                            if (isset($cls)) {
                                 echo $cls;
                             } ?> 
                             and your roll is 
                             <?php
                            if (isset($roll)) {
                                 echo $roll;
                             } ?>
                             . <br><br>
                             Thank you for giving us your contact number . your contact number is 
                            <?php
                            if (isset($phn)) {
                                 echo $phn;
                             } ?> .<br> your personal Email - <?php
                            if (isset($email)) {
                                 echo $email;
                             } ?> .

                             your blood grup is <?php
                            if (isset($bld)) {
                                 echo $bld;
                             } ?> .




                </p>                


            </div>
            
        </div>
         
    </div>

        

</div>

</body>
</html>
