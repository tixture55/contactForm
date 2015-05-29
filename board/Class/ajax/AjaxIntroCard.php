<?php

				if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
								$a = $_POST['text'];
								header("Content-Type: text/plain; charset=UTF-8");
								print('いらっしゃいませ！');
								//echo $a;

								$fc = new FacadeCommentLogic();
								$fc->insertIntroComment($a);
								$list = $fc->selectIntroComment();
								$this->list = $list;
								exit;
				}

//Ajax時は真
