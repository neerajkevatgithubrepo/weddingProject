<!--- school code searching code --->
<?php
include('databaseConnection.php');
$code = $_GET['schoolCode'];
$fetchdata = "SELECT * FROM `schoolCode` `WHERE` diseCode='$code'";
$data = mysqli_query($connection, $fetchdata);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <!-- Registration 13 - Bootstrap Brain Component -->
<section class="bg-light py-3 py-md-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">
          <div class="card border border-light-subtle rounded-3 shadow-sm">
            <div class="card-body p-3 p-md-4 p-xl-5">
              <div class="text-center mb-3">
              <?php while ($result = mysqli_fetch_assoc($data)) { ?>
                <h5><?php echo $result['schoolName']; } ?></h5>
              </div>
              <h2 class="fs-6 fw-normal text-center text-secondary mb-4">Enter your details to register this school</h2>
              <form method="POST" action="idRegistrationBackend.php" enctype="multipart/form-data">
                <div class="row gy-2 overflow-hidden">
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="sname" name="sName" placeholder="Full Name" required>
                      <label for="" class="form-label">Full Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="father-name" name="fatherName" placeholder="Father Name" required>
                      <label for="" class="form-label">Father Name</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="ssmId" name="ssmId" type="number" placeholder="Samagra id" required>
                      <label for="" class="form-label">Samagra id</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input class="form-control" id="pen-number" name="pen-number" type="number" placeholder="PEN/APAAR ID" required>
                      <label for="" class="form-label">PEN/APAAR ID</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                        <select name="class" class="form-control" id="clas" onchange="courseSet()" required>
                            <option value="">Select Class</option>
                            <option value="NURSERY">NURSERY</option>
                            <option value="KG-1" >KG-1</option>
                            <option value="KG-2">KG-2</option>
                            <option value="1st" >1st</option>
                            <option value="2nd" >2nd</option>
                            <option value="3rd" >3rd</option>
                            <option value="4th" >4th</option>
                            <option value="5th" >5th</option>
                            <option value="6th" >6th</option>
                            <option value="7th" >7th</option>
                            <option value="8th" >8th</option>
                            <option value="9th" >9th</option>
                            <option value="10th" >10th</option>
                            <option value="11th" >11th</option>
                            <option value="12th" >12th</option>
                        </select>
                        <label for="" class="form-label">Class</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                     <select name="section" class="form-control" id="section" required>
                     <option value="">select your section</option>
                     <option value="">None</option>
                     <option value="A">A</option>
                     <option value="B">B</option>
                     <option value="C">C</option>
                     <option value="D">D</option>
                     <option value="E">E</option>
                     <option value="F">F</option>
                     <option value="G">G</option>
                     <option value="H">H</option>
                 </select>
                      <label for="" class="form-label">Section</label>
                    </div>
                  </div>
                  <div class="col-12">
                     <div class="form-floating mb-3">
                      <select name="course" class="form-control" id="course" >
                        <option value="">select your Course Stream</option>
                        <option value="Arts">Arts</option>
                        <option value="Biology">Biology</option>
                        <option value="Commerce">Commerce</option>
                        <option value="Maths">Maths</option>
                    </select>
                    <label for="" class="form-label">Course</label>
                     </div>
                  </div>
  
                  <div class="col-12">
                    <div class="form-control" > 
                      <label style="width: 100%;font-size:15px;text-align:center;margin-bottom:5px">Select Your Date of birth</label>
                       <div class="dob" style="display:flex;justify-content:center; width: 100%;">
                        <div class="">
                           <label style="font-size:16px">Day</label>
                            <select name="day" id="day" class="form-control"  required>
                             <option value="">select</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>
                 <option value="13">13</option>
                 <option value="14">14</option>
                 <option value="15">15</option>
                 <option value="16">16</option>
                 <option value="17">17</option>
                 <option value="18">18</option>
                 <option value="19">19</option>
                 <option value="20">20</option>
                 <option value="21">21</option>
                 <option value="22">22</option>
                 <option value="23">23</option>
                 <option value="24">24</option>
                 <option value="25">25</option>
                 <option value="26">26</option>
                 <option value="27">27</option>
                 <option value="28">28</option>
                 <option value="29">29</option>
                 <option value="30">30</option>
                 <option value="31">31</option>
                          </select></div>
                        <div class="">
                           <label style="font-size:16px">Month</label>
         <select name="month" class="form-control" id="month"  required>
                 <option value="">select</option>
                 <option value="01">01</option>
                 <option value="02">02</option>
                 <option value="03">03</option>
                 <option value="04">04</option>
                 <option value="05">05</option>
                 <option value="06">06</option>
                 <option value="07">07</option>
                 <option value="08">08</option>
                 <option value="09">09</option>
                 <option value="10">10</option>
                 <option value="11">11</option>
                 <option value="12">12</option>               
         </select></div>
          <div class="">
          <label style="font-size:16px">Year</label>
         <select name="year" class="form-control" id="year"  required>
                 <option value="">select</option>
                 <option value="2001">2001</option>
                     <option value="2002">2002</option>
                     <option value="2003">2003</option>
                     <option value="2004">2004</option>
                     <option value="2005">2005</option>
                     <option value="2006">2006</option>
                     <option value="2007">2007</option>
                     <option value="2008">2008</option>
                     <option value="2009">2009</option>
                     <option value="2010">2010</option>
                     <option value="2011">2011</option>
                     <option value="2012">2012</option>
                     <option value="2013">2013</option>
                     <option value="2014">2014</option>
                     <option value="2015">2015</option>
                     <option value="2016">2016</option>
                     <option value="2017">2017</option>
                     <option value="2018">2018</option>
                     <option value="2019">2019</option>
                     <option value="2020">2020</option>
                     <option value="2021">2021</option>
                     <option value="2022">2022</option>
                     <option value="2023">2023</option>
                     <option value="2024">2024</option>
                     <option value="2025">2025</option>
                     <option value="2026">2026</option>
                     <option value="2027">2027</option>
                     <option value="2028">2028</option>
                     <option value="2029">2029</option>
                     <option value="2030">2030</option>            
                    </select></div>
                    </div> <!--dob div close-->
                    </div><!--dob-section div close-->
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input  class="form-control" id="mobile" name="sMobile" type="number" value="" placeholder="Mobile" required>
                      <label for="mobile" class="form-label">Mobile</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating mb-3">
                      <input type="text" class="form-control" id="address" name="sAdd" value="" placeholder="Address" required>
                      <label for="address" class="form-label">Address</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <input type="text" id="photo" name="sPic" required hidden/>
                      <?php while ($result1 = mysqli_fetch_assoc($data)) { ?>
                      <input type="text" id="school" name="schoolCode" value="<?php echo $result1['diseCode']; }?>" required hidden/>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="d-grid my-3">
                      <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>