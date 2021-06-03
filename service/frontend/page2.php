<?php
session_start();
// var_dump($_SESSION["array"]);
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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>front-end</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
  <?php if ($_SESSION["computer"] === "pc") { ?>
    <link rel="stylesheet" href="page2_pc.css">
  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
    <link rel="stylesheet" href="page2_phone.css">
  <?php } ?>
</head>
<body>

  <!-- ////////////////////////////////  LCC header  -->
  <?php if ($_SESSION["computer"] === "phone") { ?>
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

  <div class="body_div">
    <!-- / フロントエンドエンジニアの見出し / -->
    <div class="midashi_div">
      <h1 class="midashi_h1">
        Front-End Engineer
      </h1>
    </div>

    <!-- / 接絵明文 画像 / -->
    <div class="guide_div">
      <div class="cover_box_guide">
        <div class="guide_p_div">
          <div class="guide_p_1_div">
            <p class="guide_p_1 white_p">
              あなたがフロントエンドエンジニアになる上で、力不足な項目に対して、
            </p>
            <p class="guide_p_1 white_p">
              本・動画・その他コンテンツ（記事、Webサービス等）をおすすめしています。
            </p>
          </div>
          <div class="guide_p_2_div">
            <p class="guide_p_2 white_p">
              ※ 以下の『問題解決能力』/『コミュニケーション能力』/『必須スキル・専門知識』
            </p>
            <p class="guide_p_2 white_p">
              は押すとページが切り替わります！
            </p>
          </div>
        </div>
      </div>
    </div>

    
    <!-- //////////////// 回答結果切替 //////////////////  -->
    <div class="change_div">
      <div class="hr_25"></div>
      <ul class="change_ul">
        <li class="change_li active" data-id="monndai">
          <p class="change_li_p">問題解決能力</p>
        </li>
        <li class="change_li www" data-id="komini">
          <p class="change_li_p">コミュニケーション力</p>
        </li>
        <li class="change_li" data-id="gizyutu">
          <p class="change_li_p">必須スキル・専門知識</p>
        </li>
      </ul>
      <div class="hr_25"></div>
    </div>


    <!-- /////////////////////// 回答結果表示 answers //////////////////////////  -->
    <div class="answers_div">
      <?php if($_SESSION["array"] !== "") {?>

        <!-- 問題解決 -->
        <div class="answers active" id="monndai" >

          <!-- No.1-2 -->
          <div class="monndai">
            <h2 class="answer_h2">問題解決能力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
            <?php if($_SESSION["array"]["answer2"] === "no") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=12062570&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0496%2F9784478000496.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F99c5e54f674295f56ff57e551881dc1f%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >世界一やさしい問題解決の授業 [ 渡辺健介 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>

                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">世界一やさしい問題解決の授業 [ 渡辺健介 ]</h4>
                      <p class="answer_text_p"> ロジカルシンキング・問題解決の考え方を中高生にもわかるように解説した本です。薄くてわかりやすいく、内容的には十分で、10年以上支持され続けている本でもあります。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/aL2KGPuDLQ4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">一生モノの問題解決メソッド｜<br/>あとから条件が整ってくる『宇宙の法則』</h4>
                      <p class="answer_text_p"> YouTube講演家 鴨頭嘉人（かもがしら よしひと）さんの経験から話す、問題解決への行動力やそのやり方、条件いついての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer2"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは問題解決能力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

        </div>

        <!-- コミュニケーション -->
        <div class="answers" id="komini" >

          <!-- No.3 -->
          <div class="monndai">
            <h2 class="answer_h2">コミュニケーション(雑談力)
            </h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer3"] === "no") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=18228021&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3550%2F9784905073550.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力「超・実践編」 [ 安田正 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F2a7ba79f8887efcbc8e3d67fcf8d00de%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <div class="phone_answer_style">
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ff81d6231ca0da74f56bdd05503e43aeb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17453006&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F3154%2F9784905073154.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Ff81d6231ca0da74f56bdd05503e43aeb%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >超一流の雑談力 [ 安田正 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">超一流の雑談力「超・実践編」 [ 安田正 ]</h4>
                      <p class="answer_text_p"> この本は、ビジネスマン向けコミュニケーション(雑談力)の実践型本になります。そして本書の中で会話例がたくさん出てきますので分かりやすい本になっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/-SMVyQAu8XM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【一流の雑談力①】<br/>コミュ力を身につければ仕事も人間関係も良くなる</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者360万人を超える、オリエンタルラジオ中田敦彦さんが話す「雑談の一流、二流、三流」という本を参考にした【一流の雑談力】についての動画です。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer3"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは雑談力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.4-5 -->
          <div class="monndai">
            <h2 class="answer_h2">コミュニケーション(伝える力)</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer5"] === "yes") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=16270527&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7210%2F9784478017210.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F5578b0f03d6433a83b59de76e11f7767%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >伝え方が9割 [ 佐々木圭一 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">伝え方が9割 [ 佐々木圭一 ]</h4>
                      <p class="answer_text_p"> この本は、仕事から日常生活、恋愛などの伝えるコミュニケーション全般に適している本です。ノーをイエスに変える技術を、「３つのステップ」と「7つの切り口」で紹介しています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/lLHGUlMbti0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【話し方の極意】<br/>なぜあなたの話は分かりにくいのか</h4>
                      <p class="answer_text_p"> YouTubeチャンネル登録者80万人を超える、マコなり社長が話す「話し方の極意」なぜ伝わらないかを深掘りしていき、伝わる改善方法を知ることができる内容です。非常に聴きやすく、分かりやすい動画になっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer5"] === "no") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたは伝える力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

        </div>

        <!-- 技術 -->
        <div class="answers" id="gizyutu" >

          <!-- No.6 -->
          <div class="monndai">
            <h2 class="answer_h2">HTML/CSS コーディング力</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer6"] === "no") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17617615&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1572%2F9784798141572.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >HTML5/CSS3モダンコーディング フロントエンドエンジニアが教える3つの本格レイアウト スタンダード・グリッド・シングルページレイアウトの作り方 フロントエンドエンジニアが教える3つの本格レイアウ （WEB　Engineer’s　Books） [ 吉田真麻 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1fa9f4a3.76adc2c9.1fa9f4a4.75ff0a97/?me_id=1207018&item_id=12234524&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fguruguru2%2Fcabinet%2Fb%2F1%2F572%2F9784798141572.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fc8f3c523ca581a14032d25a69d8abce6%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >HTML5／CSS3モダンコーディング フロントエンドエンジニアが教える3つの本格レイアウト スタンダード・グリッド・シングルページレイアウトの作り方</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">HTML5/CSS3 モダンコーディング</h4>
                      <p class="answer_text_p"> 本書は、HTML5/CSS3を使ってモダンなサイトを制作するためのコーディングテクニックをハンズオン形式で学ぶ書籍です。制作現場の実践的なテクニックなども学ぶことができます。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_html_v5">
                          <p class="answer_image_a_p dot_pro">(無料) はじめてのHTML (全14回)</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_css_v5">
                          <p class="answer_image_a_p dot_pro">(無料) はじめてのHTML (全14回)</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール HTML/CSS</h4>
                      <p class="answer_text_p"> 一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、HTML/CCSの基礎文法編から、実際に簡単なWebページを作ったりするレッスンもあります。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer6"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはコーディング力が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.7 -->
          <div class="monndai">
            <h2 class="answer_h2">JavaScriptの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer7"] === "1") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19734346&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1577%2F9784815601577.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >確かな力が身につくJavaScript「超」入門 第2版 [ 狩野 祐東 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19734346&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F1577%2F9784815601577.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F6abe91a3fc35b76d7f9b9ffc5c83f408%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >確かな力が身につくJavaScript「超」入門 第2版 [ 狩野 祐東 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">確かな力が身につくJavaScript「超」入門 </h4>
                      <p class="answer_text_p"> 本書は、JavaScriptの入門レベルの内容になります。初めてプログラムに触れる方などにもお勧めできる優しい内容になっています。JavaScriptの基本的な操作は、この本で充分身につきます。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_javascript_v4">
                          <p class="answer_image_a_p dot_pro">(無料) はじめてのJavaScript (全11回)</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/omikuji_js_v5">
                          <p class="answer_image_a_p dot_pro">(無料) JavaScriptでおみくじ (全9回)</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール JavaScript</h4>
                      <p class="answer_text_p"> 一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、JavaScriptに関しては、豊富なレッスンが揃っており、基礎的なものから応用的な内容もあります。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer7"] === "2") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=18177978&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4111%2F9784774184111.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >JavaScript本格入門改訂新版 モダンスタイルによる基礎から現場での応用まで [ 山田祥寛 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=18177978&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4111%2F9784774184111.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fcee397024509668419498c38e943713b%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >JavaScript本格入門改訂新版 モダンスタイルによる基礎から現場での応用まで [ 山田祥寛 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">JavaScript本格入門 モダンスタイルによる基礎から現場での応用</h4>
                      <p class="answer_text_p"> 本書は、JavaScriptの中級者レベルの内容になります。モダンスタイルによる基礎から現場での応用までを実践しながら学べるものになっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/quiz_js_v3">
                          <p class="answer_image_a_p dot_pro">(有料) JavaScriptで三択クイズを作ろう (全20回)</p>          
                        </a>
                        <?php if ($_SESSION["computer"] === "pc") { ?>
                          <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/numbers_js_v6">
                            <p class="answer_image_a_p dot_pro">(有料) JavaScriptで数字タッチゲームを作ろう (全18回)</p>          
                          </a>
                        <?php } ?>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール JavaScript</h4>
                      <p class="answer_text_p"> 一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、JavaScriptに関しては、豊富なレッスンが揃っており、基礎的なものから応用的な内容もあります。</p>
                    </div>
                  </div>
                </li>
                
              <?php } elseif($_SESSION["array"]["answer7"] === "3") {?>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/B1iabPM69vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="answer_mov_text">
                        <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                        <hr class="text_h3_hr">
                        <h4 class="answer_text_h4_2">【バイクゲーム】1時間で作れる！<br>Javascriptゲームプログラミング</h4>
                        <p class="answer_text_p"> この動画は、JavaScriptの知識がある程度ある方向けの動画になります。JavaScriptでの動的な動きや、基礎を応用した内容を学ぶことができます。</p>
                      </div>
                  </div>
                </li>
               
              <?php } elseif($_SESSION["array"]["answer7"] === "4" || $_SESSION["array"]["answer7"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはJavaScriptの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.8-->
          <div class="monndai">
            <h2 class="answer_h2">jQueryの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer8"] === "1") {?> 
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/kELD557sfsU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">jQueryとは何か?<br/>（はじめてのjQuery）</h4>
                      <p class="answer_text_p"> この動画は、全15本の構成で、jQueryの初級レベルの解説動画になります。jQueryとは何かというところから解説してくれるので、初めてjQueryに触れる方でも問題なく勉強できます。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス progate</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/">
                          <p class="answer_image_a_p dot_pro">プロゲートのホームページ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/languages/jquery">
                          <p class="answer_image_a_p dot_pro">(一部有料) jQueryのレッスン</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/courses">
                          <p class="answer_image_a_p dot_pro">プロゲートで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">プロゲート jQuery</h4>
                      <p class="answer_text_p"> 一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。jQueryに関しては最初の初級編のみが無料で、そのほかのコースは有料になります。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "2") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f1d2525.88b595ec.1f1d2526.b5068bc0/?me_id=1275488&item_id=11683479&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F2199%2F0016698407l.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 jQueryデザインブック 仕事で絶対に使うプロのテクニック ／MdN編集部【編】 【中古】afb</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1f1d2525.88b595ec.1f1d2526.b5068bc0/?me_id=1275488&item_id=11683479&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbookoffonline%2Fcabinet%2F2199%2F0016698407l.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fe22dc2c89c4e1622bc7e215a25ad3dba%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >【中古】 jQueryデザインブック 仕事で絶対に使うプロのテクニック ／MdN編集部【編】 【中古】afb</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">jQueryデザインブック 仕事で絶対に使うプロのテクニック</h4>
                      <p class="answer_text_p"> 本書は、jQueryの中級者レベルの内容になります。jQueryの基礎的なところから実戦でも使えるような技術まで幅広く学ぶことができます。基礎は勉強したから、そろそろ実践的なテクニックを覚えたいという方におすすめです。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/e0vzaLGnCtY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      <div class="answer_mov_text">
                        <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                        <hr class="text_h3_hr">
                        <h4 class="answer_text_h4_2">jQuery入門 2020<br>#01：セレクターと Vanilla JS</h4>
                        <p class="answer_text_p"> この動画は、全8本の動画から構成されるjQueryの初学者向けの動画になります。セレクターや、DOM操作、非同期通信などの技術も学べるので、jQueryを触ったことがある人にはおすすめの動画になります。</p>
                      </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "3") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=13850307&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4682%2F9784873114682.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >jQueryクックブック [ jQuery　Community　Exp ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>   
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=13850307&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F4682%2F9784873114682.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F60e0b5acdc77e000ef0d0b40f7194339%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >jQueryクックブック [ jQuery　Community　Exp ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">jQueryクックブック (日本語) 大型本</h4>
                      <p class="answer_text_p"> 本書は、jQueryの中上級者向けの本になります。jQueryを使う一流の開発者たちのノウハウが盛り込まれており、基礎的なテクニックや、問題解決のためのテクニックやアイデアを身につけることができます。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer8"] === "4" || $_SESSION["array"]["answer8"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはjQueryの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.9 -->
          <div class="monndai">
            <h2 class="answer_h2">Vue.jsの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer9"] === "1") {?>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/cL3Al628mLE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">Vue.js入門<br/>#01： 一番最初のプログラム</h4>
                      <p class="answer_text_p">この動画は、全8本から構成される、Vue.jsの入門レベルの解説動画になります。Vue.jsについて初めての方でも、充分取り組めるくらいの内容になっています。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_vuejs_v2">
                          <p class="answer_image_a_p dot_pro"> (有料) Vue.js 入門</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Vue.js</h4>
                      <p class="answer_text_p"> 一部有料（月額1080円）のドットインストールはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。Vue.js入門でVue.jsの基礎知識などを学ぶことは十分にできます。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "2") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19288344&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0919%2F9784297100919.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Vue．js入門 基礎から実践アプリケーション開発まで [ 川口和也 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19288344&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0919%2F9784297100919.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F13b4ce7a6706b86b8f44ed460bfa7a86%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >Vue．js入門 基礎から実践アプリケーション開発まで [ 川口和也 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">Vue．js入門 基礎から実践アプリケーション開発まで</h4>
                      <p class="answer_text_p"> 本書は、Vue.jsの中級者以上の内容になります。Vue.jsの基礎的なところから実戦でも使えるような技術まで幅広く学ぶことができます。基礎は勉強したから、そろそろ実践的なテクニックを覚えたいという方におすすめです。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/iUSHDmv81nw" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">vue入門<br>お金を計算するwebアプリを作る</h4>
                      <p class="answer_text_p">この動画は、Vue.js入門の実践解説動画になります。Vue.jsには少し触ったことがある、Vue.jsを使って何か作成してみたいという方におすすめの動画になります。内容もそこまで難しくありません。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "3") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19350696&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8431%2F9784844398431.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >OD＞現場で使えるVue．Js　tips集 （技術の泉シリーズ（NextPublishing）） [ 渋田達也 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19350696&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F8431%2F9784844398431.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fd74ce95c18f618c5521e0389a06f60e9%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >OD＞現場で使えるVue．Js　tips集 （技術の泉シリーズ（NextPublishing）） [ 渋田達也 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">現場で使える Vue.js tips集</h4>
                      <p class="answer_text_p">本書は、Vue.jsの中上級者向けの本になります。Vue.jsをより使いこなすためのテクニックがまとめられております。Vue.js書画草yの方には少し難しい内容となっていますので、基礎レベルを理解している方におすすめの本です。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer9"] === "4" || $_SESSION["array"]["answer9"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはVue.jsの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.10 -->
          <div class="monndai">
            <h2 class="answer_h2">React.jsの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer10"] === "1") {?>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/Otrc2zAlJyM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">日本一わかりやすいReact入門<br>#1...Reactの基礎知識</h4>
                      <p class="answer_text_p">この動画は、全9本から構成される、React.jsの入門レベルの解説動画になります。React.jsについて初めての方でも、充分取り組めるくらいの内容になっています。基礎編の他にも実践編があります。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス progate</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/">
                          <p class="answer_image_a_p dot_pro">プロゲートのホームページ</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/languages/react">
                          <p class="answer_image_a_p dot_pro">(一部有料) React.jsのレッスン</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://prog-8.com/courses">
                          <p class="answer_image_a_p dot_pro">プロゲートで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">プロゲート jQuery</h4>
                      <p class="answer_text_p"> 一部有料（月額980円）のプロゲートはオンライン形式のサービスで、ゲーム感覚で楽しみながら勉強できるサービスとなっています。jQueryに関しては最初の初級編のみが無料で、そのほかのコースは有料になります。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "2") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17402396&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7195%2F9784873117195.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >入門React コンポーネントベースのWebフロントエンド開発 [ フランキー・バグナルディ ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>   
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=17402396&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F7195%2F9784873117195.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F8e1306295c56fe485fc1753604a434d0%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >入門React コンポーネントベースのWebフロントエンド開発 [ フランキー・バグナルディ ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">入門React コンポーネントベース Webフロントエンド開発</h4>
                      <p class="answer_text_p"> 本書は、React.jsの中級者以上の内容になります。要点が簡潔にまとまっていて、Reactの本質が理解するのに最適な書籍です。入門というタイトルにはなっていますが、アンチパターンを学ぶなど、実践に近い知識を得られます。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "3") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19012330&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0490%2F9784839960490.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >React開発　現場の教科書 [ 石橋啓太 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>      
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19012330&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F0490%2F9784839960490.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2Fdec758d5ee46f0242e13ae52cd7c7b3e%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >React開発　現場の教科書 [ 石橋啓太 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">React開発 現場の教科書</h4>
                      <p class="answer_text_p"> 本書は、React.jsの上級者向けの書籍になります。ボリュームが400ページを超えているというボリュームの多さで、Reac.jsを使った設計から実装まで、開発現場のノウハウがつまっています。</p>
                    </div>
                  </div>
                </li>

              <?php } elseif($_SESSION["array"]["answer10"] === "4" || $_SESSION["array"]["answer10"] === "5") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはReact.jsの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.11 -->
          <div class="monndai">
            <h2 class="answer_h2">SEOの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer11"] === "no") {?>
                <li class="answer_li book">
                  <div class="phone_answer_style">
                  <?php if ($_SESSION["computer"] === "pc") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:504px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:240px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19075865&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6930%2F9784774196930.jpg%3F_ex%3D240x240&s=240x240&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:248px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >1時間でわかるSEO対策 （スピードマスター） [ 遠藤聡 ]</a></p><div style="margin:10px;"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://static.affiliate.rakuten.co.jp/makelink/rl.svg" style="float:left;max-height:27px;width:auto;margin-top:0"></a><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F%3Fscid%3Daf_pc_bbtn&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIyNDB4MjQwIiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ==" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><div style="float:right;width:41%;height:27px;background-color:#bf0000;color:#fff!important;font-size:12px;font-weight:500;line-height:27px;margin-left:1px;padding: 0 12px;border-radius:16px;cursor:pointer;text-align:center;">楽天で購入</div></a></div></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } elseif ($_SESSION["computer"] === "phone") { ?>
                    <table border="0" cellpadding="0" cellspacing="0"><tr><td><div style="border:1px solid #95a5a6;border-radius:.75rem;background-color:#FFFFFF;width:280px;margin:0px;padding:5px;text-align:center;overflow:hidden;"><table><tr><td style="width:128px"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  ><img src="https://hbb.afl.rakuten.co.jp/hgb/1eefc254.addff69e.1eefc255.3a98a9ec/?me_id=1213310&item_id=19075865&pc=https%3A%2F%2Fthumbnail.image.rakuten.co.jp%2F%400_mall%2Fbook%2Fcabinet%2F6930%2F9784774196930.jpg%3F_ex%3D128x128&s=128x128&t=picttext" border="0" style="margin:2px" alt="" title=""></a></td><td style="vertical-align:top;width:136px;"><p style="font-size:12px;line-height:1.4em;text-align:left;margin:0px;padding:2px 6px;word-wrap:break-word"><a href="https://hb.afl.rakuten.co.jp/ichiba/1eefc256.f5506d47.1eefc257.d7548780/?pc=https%3A%2F%2Fproduct.rakuten.co.jp%2Fproduct%2F-%2F0dbeadda0520864c79d548c53438ec8a%2F&link_type=picttext&ut=eyJwYWdlIjoiaXRlbSIsInR5cGUiOiJwaWN0dGV4dCIsInNpemUiOiIxMjh4MTI4IiwibmFtIjoxLCJuYW1wIjoicmlnaHQiLCJjb20iOjEsImNvbXAiOiJkb3duIiwicHJpY2UiOjAsImJvciI6MSwiY29sIjoxLCJiYnRuIjoxLCJwcm9kIjoxLCJhbXAiOmZhbHNlfQ%3D%3D" target="_blank" rel="nofollow sponsored noopener" style="word-wrap:break-word;"  >1時間でわかるSEO対策 （スピードマスター） [ 遠藤聡 ]</a></p></td></tr></table></div><br><p style="color:#000000;font-size:12px;line-height:1.4em;margin:5px;word-wrap:break-word"></p></td></tr></table>
                  <?php } ?>
  
                    <div class="answer_book_text">
                      <h3 class="answer_text_h3 book_h3">あなたにおすすめの本</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4">1時間でわかる SEO対策</h4>
                      <p class="answer_text_p"> 本書では、SEOとは何かということを、1時間で理解するということが目的の本です。この本では、SEOの基礎や実践を交えた内容も含まれており、SEOの概要がわかっていなくてもお勧めできる内容になっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer11"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはSEOの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.12 -->
          <div class="monndai">
            <h2 class="answer_h2">UI/UXの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer12"] === "no") {?>
                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/build-3965373_640.jpg">
                      <div class="cover_box">
                        <div class="answer_image_div">
                          <p class="answer_image_p">Udemy メディア 情報サイト</p>
                          <p class="answer_image_p">UIとUXの違いとは？</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://udemy.benesse.co.jp/design/web-design/ui-ux.html">
                          <p class="answer_image_a_p">
                            Webデザイナー必見「UI/UXデザイン」をわかりやすく解説
                          </p>          
                        </a>
                      </div>
                    </div>
  
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめの記事</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">UIとUXの違いとは？<br/>「UI/UXデザイン」をわかりやすく解説</h4>
                      <p class="answer_text_p"> 本記事では、UI/UXについて分かりやすい説明が載っている記事になります。UIとUXの違いや、UI/UXデザイナーがすべきこと、Googleが提唱するUXデザインの指標についての内容になります。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer12"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはUI/UXの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.13 -->
          <div class="monndai">
            <h2 class="answer_h2">デザインフレームワークの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer13"] === "no") {?>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/FtkRIuWTf0E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">Bootstrap 4入門<br/>#01：コンテナとスペーシング</h4>
                      <p class="answer_text_p">この動画は、Bootstrap 4の入門レベルの動画になります。全9本の動画があり、Bootstrap概要、基礎を身につけるにはうってつけです。少し触ったことがあるという方でも予習感覚で見ることもできます。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programmer-1653351_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div_dot_pro">
                          <p class="answer_image_p ">オンラインプログラミングサービス dotinstall</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/">
                          <p class="answer_image_a_p dot_pro">ドットインストールのホーム</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons/basic_twitter_bootstrap_v5">
                          <p class="answer_image_a_p dot_pro">(有料) Bootstrap 4入門 (全22回)</p>          
                        </a>
                        <a class="answer_image_a" target="_blank" href="https://dotinstall.com/lessons">
                          <p class="answer_image_a_p dot_pro">ドットインストールで学べるコース一覧</p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめのサービス</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">ドットインストール Bootstrap 4入門</h4>
                      <p class="answer_text_p">一部有料（月額1080円）のドットインストールはオンライン動画形式のサービスで、Bootstrapに関しては、たくさんのレッスン数があるわけではないですが、基礎や概要を理解するには問題ありません。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer13"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはデザインフレームワークの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- No.14 -->
          <div class="monndai">
            <h2 class="answer_h2">CMSの知識</h2>
            <div class="hr_1"></div>
            <ul class="answer_ul">
              <?php if($_SESSION["array"]["answer14"] === "no") {?>
                <li class="answer_li mov">
                  <div class="phone_answer_style">
                    <iframe src="https://www.youtube.com/embed/Mk_qZueAfLM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="answer_mov_text">
                      <h3 class="answer_text_h3 mov_h3">あなたにおすすめの動画</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">誰でも簡単に<br/>Webサイトが作成できるCMSとは？</h4>
                      <p class="answer_text_p">この動画は、CMS(コンテンツマネジメントスキル)の基礎知識動画になります。CMSとは何かや、おすすめのCMS紹介など、分かりやすく解説してくれます。</p>
                    </div>
                  </div>
                </li>

                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/web-3482970_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div">
                          <p class="answer_image_p">デジタルマーケティングソリューション</p>
                          <p class="answer_image_p">初心者でもわかるCMSの基礎知識</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://careergarden.jp/frontend-engineer/taihen">
                          <p class="answer_image_a_p">
                            CMSのメリット、導入事例
                          </p>          
                        </a>
                      </div>
                    </div>
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめの記事</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">デジタルマーケティングソリューション<br/>初心者でもわかるCMSの基礎知識</h4>
                      <p class="answer_text_p"> 本記事では、(コンテンツマネジメントスキル)とは何かという事を紹介する記事になります。CMSは何なのか、メリットや導入事例など、初心者でも分かりやすい内容となっています。</p>
                    </div>
                  </div>
                </li>

              <?php }elseif ($_SESSION["array"]["answer14"] === "yes") {?>
                <li class="no_answer_li">
                  <div class="phone_answer_style">
                    <p class="no_answer_li_p">
                      あなたはCMSの知識が備わっていると考えられます。
                    </p>
                  </div>
                </li>
              <?php }?>
            </ul>
          </div>
          <div class="hr_25_bottom_20"></div>

        </div>
        
        <!-- 職種について -->
        <?php if($_SESSION["array"]["answer15"] === "yes") {?>
          <div class="answers_always">
            <div class="relation">
              <h2 class="answer_h2">フロントエンドエンジニアについてもっと知ろう</h2>
              <div class="hr_1"></div>
              <ul class="answer_ul">
                <li class="answer_li sonota">
                  <div class="phone_answer_style">
                    <div class="image_url">
                      <img class="answer_image" src="../../img/programming-3170992_640.png">
                      <div class="cover_box">
                        <div class="answer_image_div">
                          <p class="answer_image_p">[なりたい]が見つかる職業情報サイトキャリアガーデン</p>
                          <p class="answer_image_p">フロントエンドエンジニアの仕事内容</p>
                        </div>
                        <a class="answer_image_a" target="_blank" href="https://careergarden.jp/frontend-engineer/taihen">
                          <p class="answer_image_a_p">
                            フロントエンドエンジニアのつらいこと・大変なこと
                          </p>          
                        </a>
                      </div>
                    </div>
  
                    <div class="answer_sonota_text">
                      <h3 class="answer_text_h3 sonota_h3">あなたにおすすめの記事</h3>
                      <hr class="text_h3_hr">
                      <h4 class="answer_text_h4_2">【フロントエンドエンジニアの仕事】</h4>
                      <p class="answer_text_p"> フロントエンドエンジニアという職種にも当然負の部分があります。今回の記事は、フロントエンドエンジニアのつらいこと・大変なことについての記事になります。この記事を読んで、フロントエンドエンジニアについてもっと知りましょう。</p>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
          <div class="hr_25_bottom_20"></div>

          <!-- 戻るボタン -->
          <div class="return_button">
            <div class="return_button_div">
              <p class="return_button_p">自己分析を終了し、IT自己分析サービスのページに戻ります。</p>
              <a class="return_button_a" href="http://co-19-216.99sv-coco.com/lcc/service/home.php">終了する</a>
            </div>
          </div>

        <?php }?>
        
        <!-- 回答されていない時の処理 -->
      <?php } elseif ($_SESSION["array"] === "") {?>
        <?php header("Location: http://co-19-246.99sv-coco.com/lcc/service/frontend/page1.php");?>
      <?php }?>

    </div>


  </div>


  <!-- ////////////////////////////////  LCC header  -->
  <?php if ($_SESSION["computer"] === "pc") { ?>
    <header class="lcc_header"> 
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
    
  <?php } ?>
                    
    



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
    'use strict';

    {
      const change_li = document.querySelectorAll('.change_li');
      const answers = document.querySelectorAll('.answers');
      //console.log(change_li);
      //console.log(answers);
      change_li.forEach(clickedItem => {
        clickedItem.addEventListener('click', () => {
          
          change_li.forEach(item => {
            item.classList.remove('active');
          });
          clickedItem.classList.add('active');
          
          answers.forEach(answerItem => {
            answerItem.classList.remove('active');
          });
          document.getElementById(clickedItem.dataset.id).classList.add('active');
        });
      });

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