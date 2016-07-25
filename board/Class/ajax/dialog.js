$(function(){
								/* 警告ダイアログ */
								$('#bt-notify').click( function() { jqDialog.notify("このダイアログは3秒後に自動的に消えます。", 3); } );

								/* アラートダイアログ */
								$('#bt-alert').click(function() {
																jqDialog.alert("アラートダイアログです。", function() {
																								/* 【OK】ボタンがクリックされた時に呼ばれるコールバック関数 */
																								alert("【OK】ボタンがクリックされました！");
																								});
																} );
								/* 入力プロンプト */
								$('#bt-prompt').click( function() {
																jqDialog.prompt("名前を入力してください。",
																								'ほげ',
																								/* 【OK】ボタンがクリックされた時に呼ばれるコールバック関数 */
																								function(data) { alert("アナタの名前は「" + data + "」ですね！？"); },
																								/* 【CANCEL】ボタンがクリックされた時に呼ばれるコールバック関数 */
																								function() { alert("【CANCEL】ボタンがクリックされました！"); }
																							 );
																} );
								/* 確認ダイアログ */
								$('#bt-confirm').click( function() {
																jqDialog.confirm("どちらかのボタンをクリックしてください。",
																								/* 【YES】ボタンがクリックされた時に呼ばれるコールバック関数 */
																								function() { alert("【YES】ボタンがクリックされました！"); },
																								/* 【NO】ボタンがクリックされた時に呼ばれるコールバック関数 */
																								function() { alert("【NO】ボタンがクリックされました！"); }
																								);
																} );

								/* カスタムコンテンツダイアログ */
								$('#bt-content').click( function() {
																jqDialog.content('<p><label for="userid">ユーザーID：</label><input type="text" name="userid" id="userid" /></p><p><label for="userpw">パスワード：</label><input type="password" name="userpw" id="userpw" /></p>');
																} );
});
