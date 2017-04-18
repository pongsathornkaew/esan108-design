
</div>
<!-- End esasn108 container -->
<!--Start main menu on top esan108.com-->
<script>
// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("nav-small-screen");
    var y = document.getElementById("apps-icon");
    var z = document.getElementById("nav-user-account");
    var a = document.getElementById("account-icon");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = y.className.replace(" w3-red", " w3-white");
        z.className = z.className.replace(" w3-show", "");
        a.className = a.className.replace(" w3-white", " w3-red");
    } else {
        x.className = x.className.replace(" w3-show", "");
        y.className = y.className.replace(" w3-white", " w3-red");
    }
}
function openAccountNav() {
    var x = document.getElementById("nav-user-account");
    var y = document.getElementById("account-icon");
    var z = document.getElementById("nav-small-screen");
    var a = document.getElementById("apps-icon");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        y.className = y.className.replace(" w3-red", " w3-white");
        z.className = z.className.replace(" w3-show", "");
        a.className = a.className.replace(" w3-white", " w3-red");
    } else {
        x.className = x.className.replace(" w3-show", "");
        y.className = y.className.replace(" w3-white", " w3-red");
    }
}
</script>
<div class="w3-top w3-red" >
  <div id="main-menu" class="w3-display-container">
 <ul class="w3-navbar w3-left-align w3-large">
<!-- Icons User -->
 <li class="w3-opennav w3-right">
   <a class="w3-padding-large w3-hover-white w3-red" title="My Account"  id="account-icon" href="javascript:void(0);" onclick="openAccountNav()" >
     <?php if (isset($_SESSION['UID'])){
       echo '<img class="w3-circle" style="max-height:30px;max-width:30px;" src="'.SITE_URL.'/user/img/'.$_SESSION['UID'].'.jpg?ver='.rand(1, 9999).'"/>';
     }else{
       echo '<i class="fa fa-user-circle"></i>';
     }
     ?>
    </a>
  </li>
 <!-- Icons All apps -->
 <li class="w3-hide-medium w3-hide-large w3-opennav w3-right w3-text-white"><a id="apps-icon" class="w3-padding-large w3-red w3-large" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-th"></i></a></li>
<!-- Navbar on Normal screens -->
  <li><a href="<?php echo SITE_URL.MAIN_APP;?>" class="w3-padding w3-hover-red w3-left" title="<?php echo SITE_TITLE;?>"><img src="<?php echo SITE_LOGO;?>" style="height:30px;" alt="<?php echo SITE_TITLE;?>"/> <?php echo SITE_TITLE;?></a></li>
  <li class="w3-hide-small"><a href="<?php echo SITE_URL;?>/user" class="w3-padding-large w3-hover-white" title="สมาชิก"><i class="fa fa-user-o"></i></a></li>
  <li class="w3-hide-small"><a href="<?php echo SITE_URL;?>/topic" class="w3-padding-large w3-hover-white" title="หม่องโสเหล่"><i class="fa fa-comments-o"></i></a></li>
  <li class="w3-hide-small"><a href="<?php echo SITE_URL;?>/dic" class="w3-padding-large w3-hover-white" title="ภาษาอีสาน"><i class="fa fa-language"></i></a></li>
  <li class="w3-hide-small"><a href="<?php echo SITE_URL;?>/gallery" class="w3-padding-large w3-hover-white" title="คลังภาพ"><i class="fa fa-photo"></i></a></li>
  <!--li class="w3-hide-small"><a href="<?php echo SITE_URL;?>/wiki" class="w3-padding-large w3-hover-white" title="วิกิอีสาน"><i class="fa fa-wpforms"></i></a></li-->
  <li class="w3-hide-small w3-dropdown-hover">
    <a href="#" class="w3-padding-large w3-hover-white" title="Notifications"><i class="fa fa-caret-down"></i></a>
    <div class="w3-dropdown-content w3-white w3-card-2">
      <a href="<?php echo SITE_URL;?>/wiki" class="w3-padding-large w3-hover-white" title="วิกิอีสาน"><i class="fa fa-wpforms"></i> วิกิอีสาน</a>
    </div>
  </li>
  <!-- Reserv for feture menu-->
 </ul>
 <!-- Navbar on small screens -->
 <div id="nav-small-screen" class="w3-hide w3-hide-large w3-hide-medium w3-top  " style="margin-top:50px;padding-right:65px">
   <ul class="w3-navbar w3-left-align w3-large w3-card-2 w3-light-gray">
     <li><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user" title="สมาชิก"><i class="fa fa-user-o"></i> สมาชิก</a></li>
     <li><a class="w3-padding-large" href="<?php echo SITE_URL;?>/topic" title="หม่องโสเหล่"><i class="fa fa-comments-o"></i> หม่องโสเหล่</a></li>
     <li><a class="w3-padding-large" href="<?php echo SITE_URL;?>/dic" title="ภาษาอีสาน"><i class="fa fa-language"></i> ภาษาอีสาน</a></li>
     <li><a class="w3-padding-large" href="<?php echo SITE_URL;?>/gallery" title="คลังภาพ"><i class="fa fa-photo"></i> คลังภาพ</a></li>
     <li><a class="w3-padding-large" href="<?php echo SITE_URL;?>/wiki" title="วิกิอีสาน"><i class="fa fa-wpforms"></i> วิกิอีสาน</a></li>
     <li><a class="w3-padding-large w3-text-red" href="javascript:void(0);" onclick="openNav()" title="ปิดเมนู"><i class="fa fa-close"></i> ปิดเมนู</a></li>
   </ul>
 </div>

 <!-- Navbar User acccount -->
 <div id="nav-user-account" class="w3-hide w3-display-topright" style="margin-top:50px;width:100%;max-width:250px;">
   <ul class="w3-navbar w3-left-align w3-large w3-card-2 w3-light-gray w3-right" style="max-width:250px">
     <?php if (isset($_SESSION['UID'])): //If is loged in เมนูสมาชิก ที่ล็อกอินแล้ว?>
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/profile.php?uid=<?php echo $_SESSION['UID'];?>" title="หน้าโปรไฟล์"><i class="fa fa-vcard"></i> หน้าโปรไฟล์</a></li>
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/profile-setting.php" title="ตั้งค่าโปรไฟล์"><i class="fa fa-gear"></i> ตั้งค่าโปรไฟล์</a></li>
     <!--li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/password-setting.php" title="เปลี่ยนรหัสผ่าน"><i class="fa fa-lock"></i> เปลี่ยนรหัสผ่าน</a></li-->
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/logout.php" title="ออกจากระบบ"><i class="fa fa-sign-out"></i> ออกจากระบบ</a></li>
   <?php else: //If not login เมนูสมาชิก ที่ยังไม่ล็อกอิน?>
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/regis.php" title="สมัครสมาชิก"><i class="fa fa-user-plus"></i> สมัครสมาชิก</a></li>
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/login.php" title="เข้าสู่ระบบ"><i class="fa fa-sign-in"></i> เข้าสู่ระบบ</a></li>
     <li style="width:100%"><a class="w3-padding-large" href="<?php echo SITE_URL;?>/user/forgot.php" title="ลืมรหัสผ่าน"><i class="fa fa-repeat"></i> ลืมรหัสผ่าน</a></li>

   <?php endif; ?>
     <li style="width:100%"><a class="w3-padding-large w3-text-red" href="javascript:void(0);" onclick="openAccountNav()" title="ปิดเมนู"><i class="fa fa-close"></i> ปิดเมนู</a></li>
   </ul>
 </div>
 </div>
</div>
<!--End main menu on top esan108.com-->
<!-- Start Footer -->
<footer class="w3-container w3-padding-8 w3-light-grey">
  <div id="main-footer">
    <div class="copyright">
              สงวนลิขสิทธิ์ © 2556
  <a rel="home" title="<?php echo SITE_TITLE;?>" href="<?php echo SITE_URL;?>"><?php echo SITE_TITLE;?></a>
  |
<a href="http://www.dmoz.org/World/Thai/ภูมิภาค/ทวีปเอเชีย/ประเทศไทย/ภาคตะวันออกเฉียงเหนือ/ขอนแก่น/" title="ขอนแก่น DMOZ">ขอนแก่น</a> |
<a href="https://esan108.com/about" title="เกี่ยวกับ">เกี่ยวกับ อีสานร้อยแปด</a> |
<a href="https://esan108.com/dic" title="ภาษาอีสาน">ภาษาอีสาน</a> |
<a href="https://esan108.com/gallery" title="คลังภาพ อีสานร้อยแปด">คลังภาพ</a> |
<a href="https://esan108.com/sitemap" title="แผนผังเว็บไซต์">แผนผังเว็บไซต์</a>| <a href="https://esan108.com/link" title="เพื่อนบ้าน">เพื่อนบ้าน</a> |
<a href="https://esan108.com/wiki/อาหารอีสาน.html" title="อาหารอีสาน">อาหารอีสาน</a> |
<a href="https://www.wordyguru.com/a/สำนวนไทย" title="สำนวนไทย">สำนวนไทย</a> |
นโยบายการใช้งาน |
<a href="https://esan108.com/contact" title="ติดต่อเรา">ติดต่อเรา</a> |
<a href="https://plus.google.com/118419920796245771453" rel="publisher">Google+</a>  |
<a href="https://esan108.com/user" title="สมาชิก อีสานร้อยแปด">สมาชิก </a>
  </div>
</footer>
<!-- Share Button   -->
<a class="w3-btn-floating-large w3-ripple w3-blue w3-card-2 w3-display-bottomright w3-margin-bottom w3-margin-right" style="position:fixed;" href="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>"><i class="fa fa-ellipsis-h w3-large"></i></a>
</body>
</html>
