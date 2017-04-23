<?php
      ##Initial esan 108 fram work
      require_once("../includes/main-config.php"); #include system config
      $title = 'ไตเติล';                                #Set page title
      $desc = 'คำอธิบาย';                               #Set page description
      $keyword = 'คีย์เวิด1,คีย์เวิด2';                      #Set keyword
      $specail_tag = '';                               #Define special tag for page
      get_header($title,$desc,$keyword,$specail_tag);  #function get_header(Title , Desc , Keyword and Specail_tag);
?>
<h2>ตัวอย่างเมนูย่อยโสเหล่</h2>
<div class="w3-row">
  <div class="w3-col s12 m6 l12">
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">รวมกระทู้</a></div>
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">เว่านัวหัวม่วน</a></div>
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">ข่าวสารบ้านเฮา</a></div>
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">ตลาดซื้อขาย</a></div>
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">กฎและกติกา</a></div>
      <div class="w3-button w3-round w3-white w3-hover-red w3-margin-right w3-padding w3-hover-text-white w3-large"><a href="#" class="w3-hover-text-white">แท็ก</a></div>
  </div>
</div>

<div class="w3-bar-block w3-text-red">
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 3</a>
</div>

<div class="w3-bar-block">
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Home</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 1</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 2</a>
  <a href="#" class="w3-bar-item w3-button w3-hover-red">Link 3</a>
</div>

<?php
  #<!-- End of your content-->
  get_sidebar('topic'); //Show side bar  ==> user , dic , wiki , topic etc. (Define in ../includes/main-config.php)
  get_footer(); //Show footer //
?>
