<!DOCTYPE html>
<html ng-app="todo">
	<head>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/todonew.css" rel="stylesheet">
	
	</head>
	
	
	<body ng-controller="todoctrl">
	
	<div class="row" >
		<div class="col-md-4">
		
		</div>
		<div class="col-md-4">
		<h2>
			<center>TO DO LIST tanga</center>
		</h2>
			<ul class="list-group">
			</h2>
				
				<li class="list-group-item" ng-repeat="task in tasks" ng-class="{strike: (task.status=='done'), rem: (task.status=='open')}">
					<input type="checkbox" ng-click="che($index)"/> 
					{{task.work}}
					<button class="btn-danger btn-xs" ng-click="deltask($index)">x</button>
				</li>
				<li class="list-group-item">
					<div class="row">
						<div class="col-md-8">
							<input type="text" ng-model="nwork" class="form-control" placeholder="Enter your new task here"style="margin-top: 5px;"/>
						</div>
						<div class="col-md-4">
							<button type="submit" ng-click="addnew()" class="btn-lg btn-primary">Add Task</button>
						</div>
					</div>
				</li>
				
				
				
			</ul>
			
		</div>
		<div class="col-md-4">
		
		</div>
	</div>
	
	
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
	<script type="text/javascript" src="angular/angular.min.js"></script>
	<script type="text/javascript" src="angular/todo.js"></script>

	</body>
</html>