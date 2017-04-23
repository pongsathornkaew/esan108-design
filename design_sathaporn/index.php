<?php
      ##Initial esan 108 fram work
      require_once("../includes/main-config.php"); #include system config
      $title = 'ไตเติล';                                #Set page title
      $desc = 'คำอธิบาย';                               #Set page description
      $keyword = 'คีย์เวิด1,คีย์เวิด2';                      #Set keyword
      $specail_tag = '';                               #Define special tag for page
      get_header($title,$desc,$keyword,$specail_tag);  #function get_header(Title , Desc , Keyword and Specail_tag);
?>
<h3 class="w3-large"> <i class="fa fa-comments-o"></i> หน้ารวมกระทู้</h3>
Start coding here
<?php
  #<!-- End of your content-->
  get_sidebar(''); //Show side bar  ==> user , dic , wiki , topic etc. (Define in ../includes/main-config.php)
  get_footer(); //Show footer //
?>
