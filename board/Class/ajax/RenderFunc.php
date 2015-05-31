<?php
class RenderFunc{
				function renderAjaxIntroCard($list)
				{
                echo '<body>';
								echo '<div id="my_body">';
                //$this->model->doSomething1();
								echo '<div id="accordion">';
								echo '<h3>簡易チャット</h3>';
								//echo '<button>ごめんなさい</button>';
								//echo '<font size=\"1\">※ごめんなさいを押すと、相手にお断りのメッセージを送信して、<br>チャットを終了します。</font>';
								echo '<p>';
								echo '<table style="height: 150px; border-left: 2px solid violet;">';			

								foreach ($list as $this->value) { 

												echo '<tr>';
												echo '<td id="font_com" class="help">';
												echo $this->value['COM']; 
												echo '</td>';
												echo '<td id="font_small">';
												if($this->value['RCV'] == $_SESSION['AITE']){
												echo $this->value['RCV']; 
																echo 'さんへ送信済'; 
												}else{
																echo 'あなたへの返信'; 

												}
												echo '</td>';
												echo '<td id="font_small">';
												echo $this->value['TIME']; 
												echo '</td>';
												echo '</tr>';
								}
								echo '</table>';			
								echo '</div>';			
								echo '</div>';			
								echo '<div id="my_navigation">';
								echo 'test';			
								echo '<br>';			
								echo '</div>';			

                
				}
}
