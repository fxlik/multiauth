var adminControllers = angular.module('adminControllers', ['tc.chartjs']);

adminControllers.controller('MainController', ['$rootScope', '$scope', '$location', '$window', 'AuthenticationService',
  function ($rootScope, $scope, $location, $window, AuthenticationService){
    $scope.logout = function(){
      AuthenticationService.isLogged = false;
      $location.path("/login");
    }
  }
]);

adminControllers.controller('SidebarController', ['$scope', '$location', 'AuthenticationService',
  function ($scope, $location, AuthenticationService) {
    $scope.isActive = function(viewRoute){
      var loc = $location.path().split('/');
      return viewRoute === "/"+loc[1]+"/"+loc[2];
    };
  }
]);

adminControllers.controller('LoginController', ['$scope', '$http', '$location', '$window', 'AuthenticationService',
  function ($scope, $http, $location, $window, AuthenticationService) {
    $scope.loginUser = function(){
      AuthenticationService.isLogged = true;
      $location.path("/app/dashboard");
    };
  }
]);

adminControllers.controller('DashboardController', ['$scope', function($scope){
  $scope.dataLine = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'My First dataset',
        fillColor: 'rgba(220,220,220,0.2)',
        strokeColor: 'rgba(220,220,220,1)',
        pointColor: 'rgba(220,220,220,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.2)',
        strokeColor: 'rgba(151,187,205,1)',
        pointColor: 'rgba(151,187,205,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(151,187,205,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  };
  $scope.optionsLine = {
    responsive: true,
    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(0,0,0,.05)",
    scaleGridLineWidth : 1,
    bezierCurve : true,
    bezierCurveTension : 0.4,
    pointDot : true,
    pointDotRadius : 4,
    pointDotStrokeWidth : 1,
    pointHitDetectionRadius : 20,
    datasetStroke : true,
    datasetStrokeWidth : 2,
    datasetFill : true,
    onAnimationProgress: function(){},
    onAnimationComplete: function(){},
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataBar = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'My First dataset',
        fillColor: 'rgba(220,220,220,0.5)',
        strokeColor: 'rgba(220,220,220,0.8)',
        highlightFill: 'rgba(220,220,220,0.75)',
        highlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.5)',
        strokeColor: 'rgba(151,187,205,0.8)',
        highlightFill: 'rgba(151,187,205,0.75)',
        highlightStroke: 'rgba(151,187,205,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  };
  $scope.optionsBar = {
    responsive: true,
    scaleBeginAtZero : true,
    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(0,0,0,.05)",
    scaleGridLineWidth : 1,
    barShowStroke : true,
    barStrokeWidth : 2,
    barValueSpacing : 5,
    barDatasetSpacing : 1,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataDoughnut = [
    {
      value: 300,
      color:'#F7464A',
      highlight: '#FF5A5E',
      label: 'Red'
    },
    {
      value: 50,
      color: '#46BFBD',
      highlight: '#5AD3D1',
      label: 'Green'
    },
    {
      value: 100,
      color: '#FDB45C',
      highlight: '#FFC870',
      label: 'Yellow'
    }
  ];
  $scope.optionsDoughnut = {
    responsive: true,
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    percentageInnerCutout : 50,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  };
}]);

adminControllers.controller('ChartsController', ['$scope', function($scope){
  $scope.dataLine = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'My First dataset',
        fillColor: 'rgba(220,220,220,0.2)',
        strokeColor: 'rgba(220,220,220,1)',
        pointColor: 'rgba(220,220,220,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.2)',
        strokeColor: 'rgba(151,187,205,1)',
        pointColor: 'rgba(151,187,205,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(151,187,205,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  };
  $scope.optionsLine = {
    responsive: true,
    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(0,0,0,.05)",
    scaleGridLineWidth : 1,
    bezierCurve : true,
    bezierCurveTension : 0.4,
    pointDot : true,
    pointDotRadius : 4,
    pointDotStrokeWidth : 1,
    pointHitDetectionRadius : 20,
    datasetStroke : true,
    datasetStrokeWidth : 2,
    datasetFill : true,
    onAnimationProgress: function(){},
    onAnimationComplete: function(){},
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataBar = {
    labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
    datasets: [
      {
        label: 'My First dataset',
        fillColor: 'rgba(220,220,220,0.5)',
        strokeColor: 'rgba(220,220,220,0.8)',
        highlightFill: 'rgba(220,220,220,0.75)',
        highlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 80, 81, 56, 55, 40]
      },
      {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.5)',
        strokeColor: 'rgba(151,187,205,0.8)',
        highlightFill: 'rgba(151,187,205,0.75)',
        highlightStroke: 'rgba(151,187,205,1)',
        data: [28, 48, 40, 19, 86, 27, 90]
      }
    ]
  };
  $scope.optionsBar = {
    responsive: true,
    scaleBeginAtZero : true,
    scaleShowGridLines : true,
    scaleGridLineColor : "rgba(0,0,0,.05)",
    scaleGridLineWidth : 1,
    barShowStroke : true,
    barStrokeWidth : 2,
    barValueSpacing : 5,
    barDatasetSpacing : 1,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].fillColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataDoughnut = [
    {
      value: 300,
      color:'#F7464A',
      highlight: '#FF5A5E',
      label: 'Red'
    },
    {
      value: 50,
      color: '#46BFBD',
      highlight: '#5AD3D1',
      label: 'Green'
    },
    {
      value: 100,
      color: '#FDB45C',
      highlight: '#FFC870',
      label: 'Yellow'
    }
  ];
  $scope.optionsDoughnut = {
    responsive: true,
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    percentageInnerCutout : 50,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataPie = [
    {
      value: 300,
      color:'#F7464A',
      highlight: '#FF5A5E',
      label: 'Red'
    },
    {
      value: 50,
      color: '#46BFBD',
      highlight: '#5AD3D1',
      label: 'Green'
    },
    {
      value: 100,
      color: '#FDB45C',
      highlight: '#FFC870',
      label: 'Yellow'
    }
  ];
  $scope.optionsPie = {
    responsive: true,
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    percentageInnerCutout : 0,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataPolar = [
    {
      value: 300,
      color:'#F7464A',
      highlight: '#FF5A5E',
      label: 'Red'
    },
    {
      value: 50,
      color: '#46BFBD',
      highlight: '#5AD3D1',
      label: 'Green'
    },
    {
      value: 100,
      color: '#FDB45C',
      highlight: '#FFC870',
      label: 'Yellow'
    },
    {
      value: 40,
      color: '#949FB1',
      highlight: '#A8B3C5',
      label: 'Grey'
    },
    {
      value: 120,
      color: '#4D5360',
      highlight: '#616774',
      label: 'Dark Grey'
    }
  ];
  $scope.optionsPolar =  {
    responsive: true,
    scaleShowLabelBackdrop : true,
    scaleBackdropColor : 'rgba(255,255,255,0.75)',
    scaleBeginAtZero : true,
    scaleBackdropPaddingY : 2,
    scaleBackdropPaddingX : 2,
    scaleShowLine : true,
    segmentShowStroke : true,
    segmentStrokeColor : '#fff',
    segmentStrokeWidth : 2,
    animationSteps : 100,
    animationEasing : 'easeOutBounce',
    animateRotate : true,
    animateScale : false,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
  };
  $scope.dataRadar = {
    labels: ['Eating', 'Drinking', 'Sleeping', 'Designing', 'Coding', 'Cycling', 'Running'],
    datasets: [
      {
        label: 'My First dataset',
        fillColor: 'rgba(220,220,220,0.2)',
        strokeColor: 'rgba(220,220,220,1)',
        pointColor: 'rgba(220,220,220,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(220,220,220,1)',
        data: [65, 59, 90, 81, 56, 55, 40]
      },
      {
        label: 'My Second dataset',
        fillColor: 'rgba(151,187,205,0.2)',
        strokeColor: 'rgba(151,187,205,1)',
        pointColor: 'rgba(151,187,205,1)',
        pointStrokeColor: '#fff',
        pointHighlightFill: '#fff',
        pointHighlightStroke: 'rgba(151,187,205,1)',
        data: [28, 48, 40, 19, 96, 27, 100]
      }
    ]
  };
  $scope.optionsRadar = {
    responsive: true,
    scaleShowLine : true,
    angleShowLineOut : true,
    scaleShowLabels : false,
    scaleBeginAtZero : true,
    angleLineColor : 'rgba(0,0,0,.1)',
    angleLineWidth : 1,
    pointLabelFontFamily : '"Arial"',
    pointLabelFontStyle : 'normal',
    pointLabelFontSize : 10,
    pointLabelFontColor : '#666',
    pointDot : true,
    pointDotRadius : 3,
    pointDotStrokeWidth : 1,
    pointHitDetectionRadius : 20,
    datasetStroke : true,
    datasetStrokeWidth : 2,
    datasetFill : true,
    legendTemplate : '<ul class="tc-chart-js-legend"><% for (var i=0; i<datasets.length; i++){%><li><span style="background-color:<%=datasets[i].strokeColor%>"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>'
  };
}]);

adminControllers.controller('DatatablesController', ['$scope', function ($scope) {
  $scope.columns = [
    { "title": "Engine" },
    { "title": "Browser" },
    { "title": "Platform" },
    { "title": "Version" },
    { "title": "Grade" }
  ];
$scope.dataSet = [
    ['Trident','Internet Explorer 4.0','Win 95+','4','X'],
    ['Trident','Internet Explorer 5.0','Win 95+','5','C'],
    ['Trident','Internet Explorer 5.5','Win 95+','5.5','A'],
    ['Trident','Internet Explorer 6','Win 98+','6','A'],
    ['Trident','Internet Explorer 7','Win XP SP2+','7','A'],
    ['Trident','AOL browser (AOL desktop)','Win XP','6','A'],
    ['Gecko','Firefox 1.0','Win 98+ / OSX.2+','1.7','A'],
    ['Gecko','Firefox 1.5','Win 98+ / OSX.2+','1.8','A'],
    ['Gecko','Firefox 2.0','Win 98+ / OSX.2+','1.8','A'],
    ['Gecko','Firefox 3.0','Win 2k+ / OSX.3+','1.9','A'],
    ['Gecko','Camino 1.0','OSX.2+','1.8','A'],
    ['Gecko','Camino 1.5','OSX.3+','1.8','A'],
    ['Gecko','Netscape 7.2','Win 95+ / Mac OS 8.6-9.2','1.7','A'],
    ['Gecko','Netscape Browser 8','Win 98SE+','1.7','A'],
    ['Gecko','Netscape Navigator 9','Win 98+ / OSX.2+','1.8','A'],
    ['Gecko','Mozilla 1.0','Win 95+ / OSX.1+',1,'A'],
    ['Gecko','Mozilla 1.1','Win 95+ / OSX.1+',1.1,'A'],
    ['Gecko','Mozilla 1.2','Win 95+ / OSX.1+',1.2,'A'],
    ['Gecko','Mozilla 1.3','Win 95+ / OSX.1+',1.3,'A'],
    ['Gecko','Mozilla 1.4','Win 95+ / OSX.1+',1.4,'A'],
    ['Gecko','Mozilla 1.5','Win 95+ / OSX.1+',1.5,'A'],
    ['Gecko','Mozilla 1.6','Win 95+ / OSX.1+',1.6,'A'],
    ['Gecko','Mozilla 1.7','Win 98+ / OSX.1+',1.7,'A'],
    ['Gecko','Mozilla 1.8','Win 98+ / OSX.1+',1.8,'A'],
    ['Gecko','Seamonkey 1.1','Win 98+ / OSX.2+','1.8','A']
  ];
}]);