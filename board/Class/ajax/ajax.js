
$(function () {
								$(function() { //#formがsubmitされた時
																var form  = $('#form');
																$.ajax({
url : form.attr('action'), //送信先のURL。フォームから取得
type: form.attr('method'), //送信メソッド。フォームから取得
data: form.serialize(), //送信するデータ。フォームから取得
success: function(response) { //通信成功時の処理はここに書く
document.getElementById("post_com").innerHTML = response;

},
error: function(xhr) { //通信失敗時の処理はここに書く
							 alert(xhr.responseText);
			 }
});
return false; 
});
$('#form').submit(function() { //#formがsubmitされた時
								var form  = $('#form');
								$.ajax({
url : form.attr('action'), //送信先のURL。フォームから取得
type: form.attr('method'), //送信メソッド。フォームから取得
data: form.serialize(), //送信するデータ。フォームから取得
success: function(response) { //通信成功時の処理はここに書く
document.getElementById("post_com").innerHTML = response;
},
error: function(xhr) { //通信失敗時の処理はここに書く
alert(xhr.responseText);
}
});
								return false; 
								});
});
