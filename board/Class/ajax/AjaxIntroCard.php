<?php
				require_once('../FacadeCommentLogic.php');
				require_once('RenderFunc.php');
				if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
								$a = $_POST['text'];
								header("Content-Type: text/plain; charset=UTF-8");

								$fc = new FacadeCommentLogic();
								$fc->insertIntroComment($a);
								$list = $fc->selectIntroComment();
								var_dump($list);
								$render = new RenderFunc($list);
								$render->renderAjaxIntroCard($list);
								exit;
				}
