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
												echo '<td>';
												echo $this->value['COM']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['RCV']; 
												echo '</td>';
												echo '<td>';
												echo 'さんへ送信済'; 
												echo '</td>';
												echo '<td>';
												echo $this->value['TIME']; 
												echo '</td>';
												echo '<td>';
				}
}
}
