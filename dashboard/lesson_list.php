<?php include('header.php'); ?>
      <div class="col-md-12 content-menu">      
        <ul>
          <li><a href="lesson_register.php">Хичээл бүртгэх</a></li>
          <li class="active"><a href="lesson_list.php">Хичээлийн жагсаалт</a></li>
          <li><a href="logout.php">Системээс гарах</a></li>
        </ul>
      </div>
      <div class="clear"></div>
      </div>

      <div class="col-md-11 call-search">
        <div class="row">
            <div class="col-md-3">
              <span class="search-title">жагсаалтаас хайлт хийх</span>
            </div>
            <div class="col-md-5" style="padding:0;">
              <input type="text" name="search" placeholder="ХАЙЛТ..." class="call-search-form" />
            </div>
            <div class="col-md-3">
              <select name="search-filter" class="call-search-filter">
                  <option>Нэр</option>
                  <option>Индекс</option>
              </select>
            </div>
            <div class="col-md-1">
              <input type="submit" name="search" class="call-search-btn" value="search" title="Хайлт"/>
            </div>
        </div>
      </div>

      <div class="col-md-12 call-list">
      <?php
      $query=mysql_query("SELECT * FROM _lesson WHERE 1");
      $t=0;
      while ($row=mysql_fetch_array($query))
      {
      $t++;
      ?>
          <div class="row list-cont">            
              <div class="col-md-1 page_no"><?php echo $t; ?></div>
                          <div class="col-md-11 call-list-content">
                              <div class="col-md-5">
                                <div class="user-title-pro">
                                  <span class="user-title-pro-s1"><?php echo $row['Name']; ?></span></br>
                                  <span class="user-title-pro-s3">Индекс: <?php echo $row['Index']; ?></span></br>
                                </div>
                              </div>
                              <div class="col-md-5">
                              <div class="user-title-pro">
                                  <span class="user-title-pro-s3">Кредит: <?php echo $row['Credit']; ?> Багц</span></br>
                                  <span class="user-title-pro-s3">Орох төрлүүд: 
                                  <?php
                                  $st=$row['Type'];
                                  for ($i=0; $i<strlen($st); $i++)
                                  {
                                    if ($st[$i]=='1') { echo 'Лекц'; if (strlen($st)-1!=$i) echo ', '; }
                                    if ($st[$i]=='2') { echo 'Семинар'; if (strlen($st)-1!=$i) echo ', '; }
                                    if ($st[$i]=='3') { echo 'Дадлага';  if (strlen($st)-1!=$i) echo ', '; }
                                  }
                                  ?>
                                  </span></br>
                              </div>
                              </div>
                              <div class="col-md-2">
                              <input type="submit" value="trash" class="btn-delete" title="Устгах" />
                            <input type="submit" value="edit" class="btn-edit" title="Засах" /></div>
                          </div>
          </div>
          <?php
          }
          ?>
          <div class="col-md-12 pagination">
            <center>              
                  <a class="active" href="#">1</a>
                  <a href="#">2</a>
                  <a href="#">3</a>
                  .......
                  <a href="#">10</a>
            </center>
          </div>
      </div>
    </div>

    </div>
<?php include('footer.php'); ?>