<?php
class RenderFunc{
				function renderAjaxIntroCard($list)
				{
                echo '<div id="my_body">';
                //$this->model->doSomething1();
								echo '<div id="accordion">';
								echo '<h3>基本情報</h3>';
								echo '<div>';
								echo '<p>';
								
								echo '<table border>';			
								
								foreach ($this->intro_list as $this->value) { 
												
								$_SESSION['no'] = $_REQUEST['no'];
								$_SESSION['AITE'] = $this->value['ID']; 
												echo '<tr>';
												echo '<td>';
												echo $this->value['AGE']; 
												echo '</td>';
												echo '<td>';
												echo $this->value['TIME']; 
												echo '</td>';
												echo '<td>';
				}
				}
				function fooAction()
				{
								$this->model->doSomething2();
				}
}

