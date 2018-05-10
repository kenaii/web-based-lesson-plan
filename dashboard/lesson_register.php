<?php include('header.php'); ?>
<form method="GET">
      <div class="col-md-12 content-menu">      
        <ul>
          <li class="active"><a href="lesson_register.php">Хичээл бүртгэх</a></li>
          <li><a href="lesson_list.php">Хичээлийн жагсаалт</a></li>
          <li><a href="logout.php">Системээс гарах</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      </div>
            
      <div class="col-md-11 call-content">
        <div class="row">
        <div class="col-md-3">
          <span class="form-text">Хичээлийн нэр:</span>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="Name">
        </div>
        </div>

        <div class="row">
        <div class="col-md-3">
          <span class="form-text">Индекс:</span>
        </div>
        <div class="col-md-3">
          <input type="text" class="form-control" name="Index">
        </div>
        </div>

        <div class="row">
        <div class="col-md-3">
          <span class="form-text">Кредит:</span>
        </div>
        <div class="col-md-3">
          <input type="number" class="form-control" name="Credit">
        </div>
        </div>

        <div class="row">
        <div class="col-md-3">
          <span class="form-text">Орох төрлүүд:</span>
        </div>
        <div class="col-md-3">
            <input type="checkbox"  value="1" name="Lesson1"/>&nbsp;&nbsp;Лекц</br>
            <input type="checkbox"  value="2" name="Lesson2"/>&nbsp;&nbsp;Семинар</br>
            <input type="checkbox"  value="3" name="Lesson3"/>&nbsp;&nbsp;Дадлага</br>
        </div>
        </div>

        <div class="row">
          <input type="submit" value="Хичээл бүртгэх" name="register" class="call-btn" />
        </div>
      </br>
      <?php
      if ($_GET['register']) {
        if ($_GET['Name']==NULL || $_GET['Index']==NULL || $_GET['Credit']==NULL) {
        ?>
        <div class="error">Та дутуу мэдээлэл оруулсан байна!!!</div>
        <?php
        }
        else {
        if ($_GET['Lesson1']==NULL && $_GET['Lesson2']==NULL && $_GET['Lesson3']==NULL) {
        ?>
        <div class="error">Та төрөлөө сонгоогүй байна!!!</div>
        <?php
        }
        else
        {
        $type=$_GET['Lesson1'].$_GET['Lesson2'].$_GET['Lesson3'];
        mysql_query("INSERT INTO `_lesson`(`Name`, `Index`, `Credit`, `Type`) 
        VALUES ('".$_GET['Name']."','".$_GET['Index']."','".$_GET['Credit']."','".$type."')");
        ?>
        <div class="success">Хичээл амжилттай бүртгэлээ.</div>
        <?php 
        }
        }
      }
      ?>
      </div>

      </div>
    </div>

    </div>
</form>
<?php include('footer.php'); ?>