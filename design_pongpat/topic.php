<?php
      ##Initial esan 108 fram work
      require_once("../includes/main-config.php"); #include system config
      $title = 'ไตเติล';                                #Set page title
      $desc = 'คำอธิบาย';                               #Set page description
      $keyword = 'คีย์เวิด1,คีย์เวิด2';                      #Set keyword
      $specail_tag = '';                               #Define special tag for page
      get_header($title,$desc,$keyword,$specail_tag);  #function get_header(Title , Desc , Keyword and Specail_tag);
?>
<div class="w3-card-2">
  <header class="w3-container w3-light-grey">
    <h1 class="w3-xlarge w3-text-brown">เมษานี้ ขอนแก่นจัดเทศกาลโคมไฟไดโนเสาร์ ร่ายยาวไปจนถึง พฤษภาคม</h2>
  </header>

  <div class="w3-container w3-large">
    <p>ในฐานะที่เป็นชาวขอนแก่น รู้สึก “ห่าวอีหลี่” ค่ะ หลังจากได้ทราบข่าวว่าจะมีการจัดเทศกาลโคมไฟ ไดโน่ ขอนแก่น ปี 2560 ที่เขาจะนำ “น้องไดโน่” ไดโนเสาร์มาสคอตประจำจังหวัดขอนแก่น และไดโนเสาร์สายพันธุ์ไทยพันธุ์ต่างๆ ที่พบใน อ.ภูเวียง มาหล่อเป็นโคมไฟตั้งประดับไว้ใน สวนเรืองแสง (สวนสาธารณะประตูเมืองขอนแก่น) และโคมไฟลายสัตว์ต่างๆ ให้ถ่ายรูปเล่นได้อีกด้วย</p>
    <p>ซึ่งเขาจะเปิดให้มาชมกันทุกวันเสาร์อาทิตย์ ตั้งแต่วันเสาร์ที่ 8 เมษายนนี้ ไปถึง 14 พฤษภาคม เลยค่ะ</p>
    <p>ว่างๆ ก็ว่าจะพาเจ้าตัวดื้อที่บ้านไปถ่ายรูปเล่น และให้เขารู้จักไดโนเสาร์ที่เคยพบในประเทศไทยบ้างค่ะ จะได้สอนความรู้นอกห้องเรียนให้เขาไปในตัวด้วย
    <img alt="" src="http://image.goosiam.com/imgupload/upload29/2qytQWADVl0G.jpg"></p>
  </div>

  <footer class="w3-container">
    <h5>Footer</h5>
  </footer>
</div>

<div class="w3-card-2 w3-sand w3-margin-top">
  <div class="w3-container">
    <p>เวลามีเทศกาลอย่างนี้ ปกติผมก็ชอบไปถ่ายรูปแสงไฟต่างๆ ที่สวนเรืองแสงอยู่แล้วครับ เขาจัดสวยดีทุกปีอยู่แล้ว ได้ฝึกทักษะการถ่ายรูปของตัวเองไปในตัวด้วย ใครอยากเป็นนางแบบให้ผม เดี่ยวมาเจอกันที่งานนี้นะ อิอิ</p>
  </div>
  <footer class="w3-container">
    <h5>Footer</h5>
  </footer>
</div>

<?php
  #<!-- End of your content-->
  get_sidebar('dic'); //Show side bar  ==> user , dic , wiki , topic etc. (Define in ../includes/main-config.php)
  get_footer(); //Show footer //
?>
