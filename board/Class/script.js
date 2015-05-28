
$(function () {

$('#area').
find('.type1').css('backgroundColor', 'Yellow').end().
find('.type2').css('backgroundColor', 'Aqua').end().
find('.type3').css('backgroundColor', 'Lime').end();

//$("li.test").prevUntil().css("background-color","#f99");
});
$("button").click(function(){
								$("li.test").prevUntil().css("background-color","#f99");
								});
var Person = function (name) {
				this.name = name;
}
Person.prototype.sayHello = function() {
				alert('こんにちわ ' + this.name);
}
var punchan = new Person('ぷんちゃん');
//setTimeout(punchan.sayHello.bind(punchan), 3000);

$(function() {
								$("#update").click(function(){

																$.ajax({
type: "POST",
url: "Product.php",
data: {
"book": 26
},
success: function(j_data){

// 処理を記述
alert('こんにちは');
}
});


																});
								});
