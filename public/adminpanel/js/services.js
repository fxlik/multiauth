var adminServices = angular.module('adminServices', ['ngResource']);

adminServices.factory('AuthenticationService', function(){
	var auth = {
		isLogged: false
	}
	return auth;
});