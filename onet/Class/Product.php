<html>
<head>

<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<style type="text/css">
<!--
body {
				background-color: #CC99CC;
}
-->
</style>
<title>form</title>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" src="./script.js">
</script>

<script type="text/javascript" src="../pagenation/jquery.simplePagination.js"></script>
</head>
<body>
<h1>ダミーログイン</h1><p style="display: none">Hello</p>
<p>活動ID</p>
<p>
<form name="form1" method="post" action="Product.php">
<div class="control-group">
<label class="control-label" for="name">お名前</label>
<div class="controls">
<input id="name" type="text" value="山田 太郎"/>
</div>
</div>
<div class="control-group">
<label class="control-label" for="name">年齢</label>
<div class="controls">
<input id="age" type="text" value="36"/>
</div>
</div>
<div class="control-group">
<div id='hoge' class="controls">
<button id="update" type="button">更新</button>
</div>
</div>
</p>
<input type="text" name="book">
</p>
</p>
<select name="age_select">
<option>年齢を選択してください</option>
<option value="age_20">20代</option>
<option value="age_30">30代</option>
<option value="age_40">40代</option>
</select>
</p>
<input type="submit" name="Submit" value="会員検索">
</form>
</p>
</body>
</html>

<?php

require_once('FacadeBookResearchLogic.php');

// クラスを定義@
class Product
{
				protected $name;  // 商品名
				protected $list;  // 本情報
				protected $value;  // 本情報


				public function facadeLogic($book_name){

								$this->name = $book_name;

								//DB検索ロジックに値を渡す
								$result_search = new FacadeBookResearchLogic();
								//facadeにほんの名前をセット
								$this->list = $result_search->customerSearch($this->name);
								echo '<table border="1">';
								echo '<tr>';
								echo '<td>';
								echo 'CustomerID';
								echo '</td>';
								echo '<td>';
								echo '姓';
								echo '</td>';
								echo '<td>';
								echo '名';
								echo '</td>';
								echo '<td>';

								echo '電話番号';
								echo '</td>';
								echo '<td>';
								echo '職業';
								echo '</td>';
								echo '<td>';
								echo '電話種別';
								echo '</td>';
								echo '<td>';
								echo '掲示板開設';
								echo '</td>';
								echo '</tr>';

								foreach ($this->list as $this->value) { 
												echo '<tr>';
												echo '<td>';
												echo '<a href=./Mypage.php?no='.$this->value['ID'].'>'.$this->value['ID'].'</a>';    
												echo '</td>';
												echo '<td>';

												echo $this->value['LASTNAME']; 

												echo '</td>';
												echo '<td>';
												echo $this->value['FNAME']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['TELE']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['JOB']; 
												echo '</td>';

												echo '<td>';
												echo $this->value['TYPE']; 
												echo '</td>';
												echo '</tr>';
								}
								unset($this->list);

								echo '</table>';
				}

}
// インスタンス生成
$product= new Product();
if(isset($_POST['book'])){
				$book_name = $_POST['book'];

				// 商品名を設定
				$product->facadeLogic($book_name);
}else{

}
?>
