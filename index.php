<!DOCTYPE html>
<lang="ja">
<head>
 <meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    <body>
    <?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");

    $stmt = $pdo->query("select * from 4each_keijiban");
    ?>

    <header>
        <div class="logo"><img src="4eachblog_logo.jpg"> </div>
            <ul >
                <li>トップ</li>
                <li>プロフィール</li>
                <li>4eachについて</li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
    </header>
    <main>
        <h1 class="menu">プログラミングに役立つ掲示板</h1>

        <form method="post" action="insert.php"> 
            <h2 class="nnn">入力フォーム</h2>
            <div>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" size="35" name="handlename">
            </div>

            <div>
                <label>タイトル</label>
                <br>
                <input type="text" class="text" size="35" name="title">
            </div>

            <div>
                <label>コメント</label>
                <br>
                <textarea rows="7" cols="50" name="comments">
                </textarea>
            </div>

            <div>
            
            <input type="submit" class="sss" value="投稿する">
            </div>
        </form>
        
        <?php

    while ($row = $stmt->fetch()){
        
         echo "<div class='mmm'>";
         echo "<h3>".$row['title']."</h3>";
         echo "<div class='contents'>";
         echo  $row['comments'];
         echo "<div class='handlename'>posted by".$row['handlename']."</div>";
         echo "</div>";
         echo "</div>";
            }
        ?>
       
        <div class="kizi">
            <h2 class="top">人気の記事</h2>
                <ul>
                    <li>PHPおすすめの本</li>
                    <li>PHP MyAdminの使い方</li>
                    <li>今人気のエディタ TOP5</li>
                    <li>HTMLの基礎</li>
                </ul>

        　　 <h2 class="top2">オススメリンク</h2>
                <ul>
                    <li>インターノウス株式会社</li>
                    <li>XAMPPのダウンロード</li>
                    <li>Eclipseのダウンロード</li>
                    <li>Bracketsのダウンロード</li>
                </ul>
            <h2 class="top3">カテゴリ</h2>
                <ul>
                    <li>HTML</li>
                    <li>PHP</li>
                    <li>MySQL</li>
                    <li>Javascript</li>
                </ul>
        </div>
    </main>

    <footer>
        <p>copyright © internous ｜ 4each blog the whuch provides A to Z about programming</p>  
    </footer>
    </body>
</html>