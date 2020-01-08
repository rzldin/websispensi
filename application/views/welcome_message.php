2
3
4
5
6
7
8
9
10
11
12
13
14
15
16
17
18
19
20
21
22
23
<table>
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Email</th>
			<th>Name</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$no = 0;
		foreach ($dataUser as $row):
		$no++ ?>
			<tr>
				<td><?=$no?>
				<td><?=$row->username?></td>
				<td><?=$row->email?></td>
				<td><?=$row->nama?></td>
			</tr>
		<?php endforeach; ?>
	<tbody>
</table>