<?php 
include './inc/db.php';

include './inc/form.php';
include './inc/select.php';

mysqli_free_result($result);
mysqli_close($conn);
?>

  <?php include_once './parts/header.php'; ?>


 
        <div class ="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
            <div class="col-md-5 p-lg-5 mx-auto my-5">
                <img src ="images/kotibah.jpg " style ="width:300px ; height:300px;border-radius:50%">
                <h1 class= " display-4 fw-normal"> اربح مع kotibah_4_IT </h1>
                <p class=" lead fw-normal"> باقي على فتح التسجيل </p>
                <h3 id="countdown"> </h3>
                <p class=" lead fw-normal">للسحب توقع معنا  </p>
                
            </div>
           <div class="container">
            <h3>  للدخول بالسحب اتبع مايلي :</h3>
            <ul class = "list-group list-group-flush ">
            <li class = "list-group-item" style=" background-color: transparent;"> تابع البث المباشر على صفحتنا على الفيسبوك </li>
            <li class = "list-group-item" style=" background-color: transparent;"> سنقوم بعرض فقرة للأسئلة والأجوبة بكل مايتعلق بالسوشال ميديا </li>
            <li class = "list-group-item" style=" background-color: transparent;"> سيتم فتح التسجيل عن طريق اسمك</li>
            <li class = "list-group-item" style=" background-color: transparent;"> سيتم اختيار رابح فقط</li>
            <li class = "list-group-item" style=" background-color: transparent;"> الرابح يحصل على قسيمة مالية  </li>
        </ul>
</div>


            
        </div>

       




          <div class="container">
        <div class ="position-relative  text-center ">
            <div class="col-md-5 p-lg-5 mx-auto my-5">

        <form   action="<?php $_SERVER['PHP_SELF']?>" method="POST" >
  <div class="mb-3">
    <h3> الرجاء أدخل معلوماتك </h3>

    <label for="firstName" class="form-label"> *الاسم الأول</label>
    <input  name=" firstName" type="text" class="form-control" id="firstName" >
    <div  class="form-text error "><?php echo  $errors['firstNameError'] ?></div>
  </div>

  <label for="lastName" class="form-label">*الكنية</label>
    <input name=" lastName"  type="text" class="form-control" id="lastName" >
    <div  class="form-text error "><?php echo  $errors['lastNameError'] ?> </div>
  </div>
 
 
  
  <button name="submit"  type="submit" class="btn btn-primary">ارسال المعلومات</button>
</form>

    </div>
    </div>
    </div>
</div>

<!-- <form> 
        <input type="text" name=" firstName" id="firstName" placeholder="first name">
        <input type="text" name=" lastName" id="lastName" placeholder="last name">
       
        <input type="submit" name="submit" value="send">

    </form> -->
   
    <div class="loader-con">
    <div id="loader">
	<canvas id="circularLoader" width="200" height="200"></canvas>
</div>
</div>

    <!-- Button trigger modal -->
    <div class="d-grid gap-2 col-6 mx-auto my-5">
<button  id="winner" type="button" class="btn btn-primary" >
اختيار الرابح
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
      
        <h1 class="modal-title fs-5" id="modalLabel">الرابح في المسابقة </h1>
       
        <button  type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="margin-left: 10px;"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user): ?>
        <h1 class=" display-3 text-center modal-title fs-5" id="modalLabel"> <?php echo htmlspecialchars( $user['firstName']) .' '. htmlspecialchars( $user['lastName']) ;?> </h1>
        <?php endforeach;?>
      </div>
      
    </div>
  </div>
</div>
<!--
    <div id="cards" class="row mb-5 pb-2">
     

    <div class ="col-sm-6" >
        <div class="card my-2 bg-light">
            <div class="card-body">
    <h5 class="card-title">  </h5>
    
</div>
</div>
</div>

</div>
      -->
   
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> 
    <script src="js/script.js"></script>
    <script src="js/loader.js"></script>
</body>
</html>