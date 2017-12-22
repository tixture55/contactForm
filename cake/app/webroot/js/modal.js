
$(function () {
								$('#modal').dialog({
autoOpen: true,  // 自動でオープンしない
modal: true,      // モーダル表示する
});
								$('selecter').click(function () {
												$('#modal').dialog('open');
												return false;
												});
								$(document).on('click', '.ui-widget-overlay', function(){
												$(this).prev().find('.ui-dialog-content').dialog('close');
		
												});
});
