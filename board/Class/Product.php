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
phpinfo();
require_once('FacadeBookResearchLogic.php');
session_start();

// クラスを定義@
class Product
{
	protected $name;  // 商品名
	protected $list;  // 本情報
	protected $value;  // 本情報


	//インスタンスを取得するメソッドを追加
	public static function getInstance(){
		if (is_null(self::$instance)){
			self::$instance = new Product();
		}
		//インスタンスを返却する
		return self::$instance;
	}
	public function facadeLogic($book_name){
    $j = $book_name * 2;
		
		$i = 19;
		$i = $i + $j;
		return $i;
	}

}
// インスタンス生成
$product= new Product();
if(isset($_POST['book'])){
	$book_name = $_POST['book'];
	$_SESSION['flg'] ="ok";
	// 商品名を設定
	$product->facadeLogic($book_name);
}else{

}
