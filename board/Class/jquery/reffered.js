var func = function func(){


				$(function(){
												$('#sw').click(
																				function(){
																				$.post(
																												'Product.php',
																												{

																												'pd': 'こんにちは'
																												},
																												function(data){
																												alert(data);
																												}
																							);
																				}
																			);
												});





				var d = new $.Deferred;
				setTimeout(function(){
												//console.log('delay!');
												d.resolve();
												},1000);
				return d.promise();
};

				func()
				.then(func)
.then(func)
				.then(func);


				$(function(){
												/*
#read に、read.html の #news ul 内にある要素を読込
function(data){…} は、通信完了時のコールバック関数
data には取得した文字列が入っています。
												 */
												$("#read").load("read.html #news ul", function(data) {
																				/*
																					 data = null なら #read に 読込みに失敗しました と文字列を追加
																				 */


																				if(data == null){
																				$("#read").append("読込みに失敗しました"); 
																				}
																				});
												});
