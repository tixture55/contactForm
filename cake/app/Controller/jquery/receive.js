$.ajax({
type: "POST",
url: "Product.php",
data: {
"id": 3
},
success: function(data){

console.log(data);
alert(data[0].time); //ここで「undifined」のエラーが出ます！！

$("#go").after(data.id);//ここは何も表示されません。
$("#str").html('準備完了');
},
error: function(data){
$("#str").html('準備未完了');
},
});
