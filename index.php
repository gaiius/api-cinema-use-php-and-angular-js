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
<button class="btn btn-danger" ng-show="show_form" ng-click="formToggle()">Search Movie<span class="gylphicon gylphicon-plus"
aria-hidden="true"></span></button>

</div>
<div class="alert alert-default input-group search-box">
<span class="input-group-btn">
<input type="text" class="form-control" ng-model="search_query">
</span>
</div>
</div>

</nav>

<table class="table table-responsive">
<tr>
	<td>Vote</td>
	<td>Rating</td>
	<td>Tittle</td>
	<td></td>
	<td>overview</td>
	<td>Release date</td>
	<td>Download</td>
	
</tr>
<tr ng-repeat="x in details|filter:search_query">
<td>{{ x.vote_count }}</td>
<td>{{ x.vote_average }}</td>
<td>{{ x.title }}</td>
<td><img height="1200px" width="628px" src="https://image.tmdb.org/t/p/w500/{{ x.poster_path }}"></td>
<td>{{ x.overview }}</td>
<td>{{ x.release_date }}</td>
<td><a href="https://www.adsurls.com/ad-clicked/9/8gqRnyfBoHftyGyevui74lS6" class="btn btn-danger">Download</a>


</tr>


</table>

</div>
</body>
<script src="controller/bagianController.js"></script>
</html>


