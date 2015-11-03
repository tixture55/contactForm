
<?php
				require_once('../FacadeCommentLogic.php');
				require_once('RenderFunc.php');
				if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] == 'XMLHttpRequest') {
								header("Content-Type: text/plain; charset=UTF-8");
print('test');
								$fc = new FacadeCommentLogic();
								$fc->insertIntroShowReq();
								exit;
				}
