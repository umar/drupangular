<div data-ng-controller="singleTask">
	<h2 data-ng-bind-html="task.title"></h2>
	<p>
		<a href="#" data-ng-click="updateStatus(task.field_status)">
			{{ task.field_status ? 'Mark as incomplete' : 'Mark as completed' }}
		</a>
		<i class="fa fa-check" data-ng-show="task.field_status"></i>
	</p>
	<!-- http://stackoverflow.com/a/12151492/874691 ternary operator -->
	<hr />
	<div data-ng-bind-html="task.body"></div>
</div>