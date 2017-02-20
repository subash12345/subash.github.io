<html>
   
   <head>
      <title>AngularJS Expressions</title>
   </head>
   <script src = "https://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
   <body>
      <h1>Sample Application</h1>
      
      <div ng-app = "myapp" ng-init = "quantity = 1;cost = 30; student = {firstname:'Mahesh',lastname:'Parashar',rollno:101};marks = [80,90,75,73,60]">
      <p>Hello:{{student.firstname+""+student.lastname}}</p>
      <p>books:{{quantity * cost }}</p>
      <p>Rollno:{{student.rollno }}</p>
      <p>marks:{{marks[3]}}</p>
      <div ng-init="today=14">
      <p ng-if="today < 14">good mornung</p>
      <p ng-if="today > 14">good mornung</p>
      </div>
      <div ng-controller="TimeClock">
      The current time : {{timeString}};<br>
      <button ng-click="buttonClick()">Click</button>
      
      </div>
      <script>
       var app = angular.module("myapp",[]);
       app.controller("TimeClock",Time);

       function Time($scope){
           var dateTime = new Date();
           $scope.timeString = dateTime.toTimeString();
           $scope.buttonClick = function(){
        	   var dateTime = new Date();
               $scope.timeString = dateTime.toTimeString(); 
           }
       }
      </script>
      
      </div>
      
      
      
   </body>
</html>
