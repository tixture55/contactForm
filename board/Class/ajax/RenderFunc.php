<?php
class RenderFunc{
				function renderAjaxIntroCard($list)
				{
								//$this->model->doSomething1();
								echo '<div id="accordion">';
								echo '<h3>簡易チャット</h3>';
								echo '<div>';
								echo '<p>';
								echo '<table>';			

								foreach ($list as $this->value) { 

												echo '<tr>';
												echo '<td class="help">';
												echo $this->value['COM']; 
												echo '</td>';
												echo '<td>';
												if($this->value['RCV'] == $_SESSION['AITE']){
												echo $this->value['RCV']; 
																echo 'さんへ送信済'; 
												}else{
																echo 'あなたへの返信'; 

												}
												echo '</td>';
												echo '<td>';
												echo $this->value['TIME']; 
												echo '</td>';
												echo '</tr>';
								}
								echo '</table>';			

				}
}
