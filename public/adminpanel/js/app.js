// var adminApp = angular.module('adminApp', [
//   'ui.router',
//   'ui.bootstrap',
//   'ngAnimate',
//   'ngResource',
//   'adminControllers',
//   'adminServices',
//   'adminDirectives'
// ]);

// adminApp.run(['$window', '$location', '$rootScope', 'AuthenticationService', function($window, $location, $rootScope, AuthenticationService) {
//   $rootScope.fields = {
//     'headerfixed': true,
//     'sidebarfixed': true,
//     'theme': 'theme-1'
//   };
//   if($window.sessionStorage.token){
//     AuthenticationService.isLogged = true;
//   }
//   $rootScope.$on('$stateChangeStart', function(event, toState, toParams, fromState, fromParams){
//     //console.log(toState.access);
//     if(toState.access.requiredLogin && !AuthenticationService.isLogged) {
//       event.preventDefault();
//       $location.path("/login");
//     }
//   });
//   $rootScope.$on('$stateChangeSuccess', function (event, current, previous) {
//     $rootScope.title = current.title;
//   });
// }]);

// adminApp.config(function($stateProvider, $urlRouterProvider){
//   $stateProvider
//   .state('app', {
//     abstract: true,
//     template: '<div ui-view></div>'
// 	 }).
//   state('app.login', {
//     access: { requiredLogin: false },
//     controller: 'LoginController',
//     templateUrl: 'login.html',
//     title: 'AAP: Login',
//     url: '^/login'
// 	 }).
//   state('app.main', {
//     abstract: true,
//     controller: 'MainController',
//     templateUrl: 'main.html'
// 	 }).
// 	 state('app.main.dashboard', {
//     access: { requiredLogin: false },
//     controller: 'DashboardController',
//     templateUrl: 'partials/dashboard.html',
//     title: 'AAP: Dashboard',
//     url: '^/app/dashboard'
// 	 }).
// 	 state('app.main.elements', {
//     access: { requiredLogin: false },
// 		  templateUrl: 'partials/elements.html',
// 		  title: 'AAP: Elements',
// 		  url: '^/app/ui/elements'
// 	 }).
//   state('app.main.icons', {
//     access: { requiredLogin: false },
// 		  templateUrl: 'partials/icons.html',
// 		  title: 'AAP: Icons',
// 		  url: '^/app/ui/icons'
// 	 }).
//   state('app.main.buttons', {
//     access: { requiredLogin: false },
// 		  templateUrl: 'partials/buttons.html',
// 		  title: 'AAP: Icons',
// 		  url: '^/app/ui/buttons'
// 	 }).
//   state('app.main.forms', {
//     access: { requiredLogin: false },
// 		  templateUrl: 'partials/forms.html',
// 		  title: 'AAP: Form Elements',
// 		  url: '^/app/forms/elements'
// 	 }).
//   state('app.main.tables', {
//     access: { requiredLogin: false },
// 		  templateUrl: 'partials/tables.html',
// 		  title: 'AAP: Simple Tables',
// 		  url: '^/app/tables/simple'
// 	 }).
//   state('app.main.datatables', {
//     access: { requiredLogin: false },
//     controller: 'DatatablesController',
//     templateUrl: 'partials/datatables.html',
//     title: 'AAP: Datatables',
//     url: '^/app/tables/datatables'
//   }).
//   state('app.main.charts', {
//     access: { requiredLogin: false },
//     controller: 'ChartsController',
// 		  templateUrl: 'partials/charts.html',
// 		  title: 'AAP: Charts',
// 		  url: '^/app/charts'
// 	 });
// 	$urlRouterProvider.otherwise('/app/dashboard');
// });
