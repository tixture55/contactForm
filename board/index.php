<html>
<head>
<style type="text/css">
	<!--
		body {
			background-color: #CC99CC;
				}
					-->
						</style>
<title>form</title>

<script type="http://code.googleapis.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
$(function(){
								$("button").click(function () {
												$("p").show("slow");
												});
								}
								</script>

								</head>
								<body>
								<h1>ダミーログイン</h1><p style="display: none">Hello</p>
								<p>活動ID</p>
								<p>
								<form name="form1" method="post" action="./Class/Product.php">
								<input type="text" name="book">
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
