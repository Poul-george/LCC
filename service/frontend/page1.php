<?php
//セッションで値をほじ/// 
session_start();
$_SESSION["array"] = "";
$_SESSION["URL"] = $_SERVER['REQUEST_URI'];

if (isset($_POST["answer_send"])) {
    $_SESSION["array"] = $_POST;
    header("Location: http://co-19-246.99sv-coco.com/lcc/service/frontend/page2.php");
    exit;
}
if ($_SESSION["computer"]  === null || $_SESSION["computer"]  === "" || $_SESSION["computer"]  === "undefined") {
  header("Location: http://co-19-246.99sv-coco.com/lcc/user_judge.php");
  exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php if ($_SESSION["computer"] === "pc") { ?>
    <link rel="stylesheet" href="page1_pc.css">
    <?php } elseif ($_SESSION["computer"] === "phone") { ?>
      <link rel="stylesheet" href="page1_phone.css">
  <?php } ?>


  <title>front-end</title>
</head>
<body>

  <!-- 説明文等 -->
  <div class="description_div">
    <div class="cover_box">
      <?php if ($_SESSION["computer"] === "pc") { ?>
        <h1 class="description_h1 effect-fade">フロントエンドエンジニアを、目指すための自己分析<hr class="h1_hr"></h1>
      <?php } elseif ($_SESSION["computer"] === "phone") { ?>
        <h1 class="description_h1 effect-fade">フロントエンドエンジニアを<br>目指すための自己分析<hr class="h1_hr"></h1>
      <?php } ?>
      <h2 class="description_h2 effect-fade">全１５問<span>　</span>約５分</h2>
      <h3 class="description_h3 effect-fade">フロントエンドエンジニアに必須なスキルをあなたは持っていますか？
        この質問はフロントエンドエンジニアになる上で、あなたの不足したスキルを特定するものです。
        周りから一歩前進し、あなたも優秀な人材に！</h3>
      <h3 class="description_h3 effect-fade">--使用法--<hr class="h4_hr"></h3>
      <?php if ($_SESSION["computer"] === "pc") { ?>
        <p class="description_h3_p effect-fade">Q１-- Q１５の質問に答え、結果を送信を押してください。</p>
      <?php } elseif ($_SESSION["computer"] === "phone") { ?>
        <p class="description_h3_p effect-fade">Q１-- Q１５の質問に答え<br>結果を送信を押してください。</p>
      <?php } ?>
      <p class="description_h3_p effect-fade">(全ての質問に回答するようにお願いします)</p>
    </div>
  </div>
  


  <?php if ($_SESSION["computer"] === "pc") { ?>
    <header> 
      <div class="header_div">
        <div class="div_ul">
          <ul class="header_ul">
            <li class="logo_url">
              <div class="logo_url_div">
                <a  href="" class="logo_a">
                  <img class="img_lcc"src="../../img/4040.png">
                  <p class="header_text">LCC</p>
                </a>
              </div>
            </li>
            <li class=""><a  href="http://co-19-216.99sv-coco.com/lcc/service/home.php" class=""><p class="header_text">Service</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">Blog</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">Summary</p></a></li>
            <li class=""><a  href="" class=""><p class="header_text">SNS</p></a></li>
          </ul>
        </div>
      </div>
    </header>
  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
    <div class="phone_header">
      <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
      </div>
  
      <nav class="globalMenuSp">
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="http://co-19-216.99sv-coco.com/lcc/service/home.php">Service</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Summary</a></li>
            <li><a href="#">SNS</a></li>
        </ul>
      </nav>
  
      <header> 
        <div class="header_div">
          <div class="div_ul">
            <ul class="header_ul">
              <li class="logo_url">
                <div class="logo_url_div">
                  <a  href="" class="logo_a">
                    <img class="img_lcc"src="../../img/4040.png">
                    <p class="header_text">LCC</p>
                  </a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </header>
    </div>
  <?php } ?>



  



<!-- 質問表示div -->
  <div class="questions_div">
    <!-- formのようい -->
    <form method="post" action="http://co-19-246.99sv-coco.com/lcc/service/frontend/page1.php" name="form" onsubmit="return formCheck()">

      <!-- 問題解決能力の質問 div -->
      <div class="questions_answer_div">
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q1</span>.&nbsp;&nbsp;スポーツ/勉強で行き詰まったことはありますか？</p>
            <dt class="choices">
                  <input type="radio", name="answer1", value="yes", >はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer1", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q2</span>.&nbsp;&nbsp;Q1ではいと答えた方は、その壁を乗り越える事はできましたか？<br>（&thinsp;Q1でいいえと答えた方はいいえを選択してください&thinsp;）</p>
              <dt class="choices">
                  <input type="radio", name="answer2", value="yes", >はい<br>
              </dt>
              <dt class="choices">   
                  <input type="radio", name="answer2", value="no">いいえ<br>
              </dt>
            </dl>
        </div>

        <!-- コミュニケーション能力の質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q3</span>.&nbsp;&nbsp;あまり親しくない人といるときでも間を持たずに話が出来ますか？話を続けられますか？</p>
            <dt class="choices">
                  <input type="radio", name="answer3", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer3", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q4</span>.&nbsp;&nbsp;他人の言っていることをきちんと理解できないことがありますか？</p>
            <dt class="choices">
                  <input type="radio", name="answer4", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer4", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q5</span>.&nbsp;&nbsp;自分の言っていることが他人に伝わらないことがありますか？</p>
            <dt class="choices">
                  <input type="radio", name="answer5", value="yes">はい<br>
            </dt>
            <dt class="choices">
                  <input type="radio", name="answer5", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <!-- 必須スキル・知識の質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q6</span>.&nbsp;&nbsp; HTML/CSSの基礎知識があるか？</p>
            <dt class="choices">
                <input type="radio", name="answer6" value="yes" style="font-size: 50px">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer6" value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q7</span>.&nbsp;&nbsp; JavaScriptの知識はあるか？/扱えるか？</p>
            <dt class="choices">
                  <input type="radio", name="answer7" value="1">未経験<br>
              </dt>
              <dt class="choices">
                  <input type="radio", name="answer7" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
              </dt>
              <dt class="choices">
                  <input type="radio", name="answer7" value="3">基礎的な部分は学習済<br>
              </dt>
              <dt class="choices">
                  <input type="radio", name="answer7" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
              </dt>
              <dt class="choices">
                  <input type="radio", name="answer7" value="5">実務レベル<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q8</span>.&nbsp;&nbsp;  jQueryの知識はあるか？/扱えるか？</p>
            <dt class="choices">
                <input type="radio", name="answer8" value="1">未経験<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer8" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
              <dt class="choices">
                  <input type="radio", name="answer8" value="3">基礎的な部分は学習済<br>
              </dt>
              <dt class="choices">
                  <input type="radio", name="answer8" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
              <dt class="choices">
                  <input type="radio", name="answer8" value="5">実務レベル<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q9</span>.&nbsp;&nbsp;  Vue.jsの知識はあるか？/扱えるか？</p>
            <dt class="choices">
              <input type="radio", name="answer9" value="1">未経験<br>
            </dt>
            <dt class="choices">
              <input type="radio", name="answer9" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
            <dt class="choices">
              <input type="radio", name="answer9" value="3">基礎的な部分は学習済<br>
            </dt>
            <dt class="choices">
              <input type="radio", name="answer9" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
            <dt class="choices">
              <input type="radio", name="answer9" value="5">実務レベル<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q10</span>.&nbsp;&nbsp;  Reactの知識はあるか？/扱えるか？</p>
            <dt class="choices">
                <input type="radio", name="answer10" value="1">未経験<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer10" value="2">学校の授業で習った程度/軽く触ったことがある程度<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer10" value="3">基礎的な部分は学習済<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer10" value="4">自分の作りたいもの/簡単なポートフォリオがある程度作成可能<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer10" value="5">実務レベル<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q11</span>.&nbsp;&nbsp;  SEOの知識があるか？</p>
            <dt class="choices">
                <input type="radio", name="answer11", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer11", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q12</span>.&nbsp;&nbsp;  UI/UXなどの知識はあるか？</p>
            <dt class="choices">
                  <input type="radio", name="answer12", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer12", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q13</span>.&nbsp;&nbsp;  デザインフレームワークBootstrapなどの知識があるか？</p>
            <dt class="choices">
                <input type="radio", name="answer13", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer13", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q14</span>.&nbsp;&nbsp;  CMS（コンテンツマネジメントスキル）の理解はありますか？</p>
            <dt class="choices">
                <input type="radio", name="answer14", value="yes">はい<br>
            </dt>
            <dt class="choices">        
                <input type="radio", name="answer14", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <!-- 最後のフロントエンドエンジニアに対しての質問 div -->
        <div class="questions_button_div">
          <dl class="question"><p class="q_p"><span class="q">Q15</span>.&nbsp;&nbsp;  フロントエンドエンジニアに関してもっと知りたいか</p>
            <dt class="choices">
                <input type="radio", name="answer15", value="yes">はい<br>
            </dt>
            <dt class="choices">
                <input type="radio", name="answer15", value="no">いいえ<br>
            </dt>
          </dl>
        </div>

        <!-- 送信ボタン -->
        <div class="submit">
          <input type="submit" class="button" name="answer_send" value="結果を送信">
          <br><br>
        </div>
      </div>

    </form>
  </div>
  
<!-- footer用div -->
  <div class="footer_div"> 
    <div class="Instagram_div">
      <div class="Instagram_icon_div">
        <a target="_blank" class="Instagram_icon_a" href="https://www.instagram.com/lcc_it/">
          <img class="Instagram_icon" src="https://img.icons8.com/nolan/64/instagram-new.png"/>
        </a>
        <p class="Instagram_icon_p">Instagram [@LCC_IT]</p>
      </div>
    </div>
    <p class="footer_p">©︎ Life Can Change 2021</p>
  </div>



  <script>
    $(function(){
      $(window).scroll(function (){
        $('.effect-fade').each(function(){
            var elemPos = $(this).offset().top;
            var scroll = $(window).scrollTop();
            var windowHeight = $(window).height();
            if (scroll > elemPos - windowHeight){
                $(this).addClass('effect-scroll');
            }
        });
      });
    });
    window.onload = function() {
      scroll_effect();
    
      $(window).scroll(function(){
        scroll_effect();
      });
      function scroll_effect(){
        $('.effect-fade').each(function(){
        var elemPos = $(this).offset().top;
        var scroll = $(window).scrollTop();
        var windowHeight = $(window).height();
        if (scroll > elemPos - windowHeight){
          $(this).addClass('effect-scroll');
        }
        });
      }
    };

    function formCheck(){
      flag=0;
      if((document.form.answer1.value == "")||(document.form.answer2.value == "")||(document.form.answer3.value == "")||(document.form.answer4.value == "")||(document.form.answer5.value == "")
      ||(document.form.answer6.value == "")||(document.form.answer7.value == "")||(document.form.answer8.value == "")||(document.form.answer9.value == "")||(document.form.answer10.value == "")
      ||(document.form.answer11.value == "")||(document.form.answer12.value == "")||(document.form.answer13.value == "")||(document.form.answer14.value == "")||(document.form.answer15.value == ""))
      {
          flag = 1;
      }

      if(flag == 1) {
          alert("未入力の項目があります");
          return false;
      }
      else{
          return true;
      }
    }


    $(function() {
      $('.hamburger').click(function() {
          $(this).toggleClass('active');
   
          if ($(this).hasClass('active')) {
              $('.globalMenuSp').addClass('active');
          } else {
              $('.globalMenuSp').removeClass('active');
          }
      });
    });

  </script>
</body>
</html>

