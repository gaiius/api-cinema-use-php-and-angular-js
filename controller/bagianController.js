var cutiApp=angular.module('cutiApp',[]);
cutiApp.controller("BagianController",['$scope','$http',function($scope,$http){
	//pengambilan data 
	
	
	//menampilkan button 
	$scope.show_form =true;
	$scope.bagianInfo = {};
	
	//ini untuk toogle
	$scope.formToggle = function () {
		$('#empForm').slideToggle();
		
	}
	
	$scope.insertInfo = function (bagian){
		$http.post('backend/bagian/input_bagian.php',{
		"nama" : bagian.nama
		
		}).then(function succesCallback(response){
			if(response.data === '1') //true
			{
				getInfo();
				$('#empForm').css('display','none');
				location.reload();
			}
			
		});
	}
	$scope.editBagian = {};
	$scope.editData =function(id){
		$scope.editBagian = id;
		$('#empForm').slideUp();
		$('#editForm').slideToggle();
		$http.post('backend/bagian/edit_bagian.php?id=' +id).then(function succesCallback(response){
			$scope.dataUpdate = response.data;
			$scope.bagianInfo.id = response.data[0]['id'];
			$scope.bagianInfo.nama =response.data[0]['nama']; 
			
		});
	}
	$scope.UpdateBagian = function(info){
		$http.post('backend/bagian/update_bagian.php',{
			"id" : $scope.bagianInfo.id,
			"nama_bagian" : $scope.bagianInfo.nama
		}).then(function succesCallback(response){
			$scope.show_form = true;
			if(response.data === '1'){
				getInfo();
				$('#editForm').css('display','none');
			}
		});
	}
	

	
}]);