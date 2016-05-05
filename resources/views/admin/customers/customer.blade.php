@include('layouts.adminlayout')
@section('content')
<div>
	<div>
		<table>
			<thead>
				<tr>
					<td>Name</td> <td>E-mail Address</td> <td>Gender</td><td>Activation Status</td>
				</tr>
			</thead>
			<tbody>
				@foreach($customers as $customer)
					<td>{{ $customer->surname }}, {{ $customer->othernames }}</td><td>{{ $customer->email }}</td><td>{{$customer->gender}}</td><td>{{ $customer->activation_status }}</td>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection