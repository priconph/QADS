<table border='1'>
	<thead>
		<tr>
			<th colspan="4" style="text-align: center; background-color: #87CEEB;">USER REPORTS</th>
		</tr>
	</thead>
	<thead>
		<tr style="background-color: #fff236;">
			<th>User ID</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
		</tr>
	</thead>
	<tbody>
		@for($index = 0; $index < count($users); $index++)
			<tr>
				<td>{{ $users[$index]->id }}</td>
				<td>{{ $users[$index]->name }}</td>
				<td>{{ $users[$index]->username }}</td>
				<td>{{ $users[$index]->email }}</td>
			</tr>
		@endfor
	</tbody>
</table>