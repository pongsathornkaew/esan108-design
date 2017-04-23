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
<html>
  <title>W3.CSS</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<body>
  <div class="w3-bar-block w3-red">
    <a href="#" class="w3-bar-item w3-button w3-text-white">รวมกระทู้</a>
    <a href="#" class="w3-bar-item w3-button w3-text-white">เว่านัวหัวม่วน</a>
    <a href="#" class="w3-bar-item w3-button w3-text-white">ข่าวสารบ้านเฮา</a>
    <a href="#" class="w3-bar-item w3-button w3-text-white">ตลาดซื้อขาย</a>
    <a href="#" class="w3-bar-item w3-button w3-text-white">กฎและกติกา</a>
    <a href="#" class="w3-bar-item w3-button w3-text-white">แท็ก</a>
  </div>
</body>
</html>

<?php
  #<!-- End of your content-->
  get_sidebar(''); //Show side bar  ==> user , dic , wiki , topic etc. (Define in ../includes/main-config.php)
  get_footer(); //Show footer //
?>
