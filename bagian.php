<html ng-app="cutiApp">
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/JQuery/jquery.min.js"></script>
<script src="lib/angular/angular.min.js"></script>
<script src="js/bootstrap.min.js"></script>

</head>
<body>
<div class="container wrapper" ng-controller="BagianController">
<h1></h1>
<div ng-include src="'template/header.php'"></div>
<br>
<br>
<nav class="navbar navbar-default">
<div class="navbar-header">
<div class="alert alert-default navbar-brand search-box">


</div>
<div class="alert alert-default input-group search-box">
<span class="input-group-btn">
<input type="text" class="form-control" ng-model="search_query">
</span>
</div>
</div>

</nav>
<div class="col-md-6 col-md-offset-3">
<div ng-include src="'template/inputbagianForm.php'"></div>
<div ng-include src="'template/editbagianForm.php'"></div>
</div>

<table class="table table-responsive">
<tr>
	<td>Id</td>
	<td>Nama Bagian</td>
	<td colspan="2">Action</td>
	
</tr>
<tr ng-repeat="x in details|filter:search_query">
<td>{{ x.vote_count }}</td>
<td>{{ x.vote_average }}</td>
<td>{{ x.title }}</td>
<td><img src="https://image.tmdb.org/t/p/w500/{{ x.poster_path }}"></td>
<td>{{ x.overview }}</td>


</tr>


</table>

</div>
</body>
<script src="controller/bagianController.js"></script>
</html>


