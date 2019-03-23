app.controller('participantController', function ($scope, $http, API_URL, Participant){
    //Get all project
    $scope.participants = new Participant();
 
  
}).factory('Participant', function($http, API_URL){
	var Participant = function() {
		this.items = [];
		this.busy = false;
		this.after = '1';
	};

	Participant.prototype.nextPage = function() {
		if (this.busy) return;
		this.busy = true;

		var url = '/photo/' + this.after;
		

		if (this.after !== -1){
			$http.get(url).success(function(response) {
				var object = response.object;
                                
				
				for (var i=0;  i < object.length; i++) {
					this.items.push(object[i]);

				} 

				var meta = response.meta;
				this.after = meta.next_page;
				this.busy = false;
			}.bind(this));
		}
		else {
			this.busy = false;
			return this.items; 
		}
	};

	return Participant;
});