angular.module('myApp', []);
angular.module('myApp').controller('loopCtrl', function($scope) {
		$scope.files = [
		{"name":"file1.jpg","extension":"jpg","checkFlug":false},
		{"name":"file2.html","extension":"html","checkFlug":false},
		{"name":"file3.xml","extension":"xml","checkFlug":false},
		{"name":"file4.js","extension":"js","checkFlug":false},
		{"name":"file5.py","extension":"py","checkFlug":true}
		];
		//全選択
		$scope.selsectAll = function(){
		for(var i=0;i<$scope.files.length;i++){
		$scope.files[i]["checkFlug"] = true;
		}
		}
		});
