@extends('layouts.app')
@section('content')

 <center> <h2 id="headline"><b> Agents' payments </b></h2> </center>
 
 <div>
 	<center> 
	 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
		    <tr>  <th colspan="2">Total donations : </th> <td> {{$other_data['don_total']}} </td>  </tr> 
		    <tr>  <td></td> <td> </td> <td></td> <td></td> <td></td>  </tr>
		    <tr>  <th colspan="2">Treasury amount : </th> <td> {{$other_data['amount_for_treasury']}} </td>  </tr> 
			<tr>  <td></td> <td> </td> <td></td> <td></td> <td></td>  </tr> 
			<tr>  <th></th><th colspan="2">Admin's wage : </th> <td> {{ceil($other_data['amont_per_unit']*2)}} </td> <td></td>   </tr> 
		    <tr > <th> Agent name</th> <th> Username</th> <th> District</th> <th> Is Head?</th> <th> Amount</th>   </tr> 
		</thead>  
 	  </table> 
 	  </center>
 	  
	    	<!--============================================-->
		@if(count($agent_data) > 0)
		<div style="background:linen; padding:1%">
		   
		  	
		  	<div style="background:wheat; padding:1%">
		  		@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==14)
		  		<h3>Head of {{$d_data->districtName}}. </h3> 
		  			@endif  
				@endforeach 
		  		<center>
		  		<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">  
					<thead> <tr> <th></th> <th> Name </th> <th> Username </th> <th> Signature </th> <th> District </th><th> Salary </th> <th>  </th> </tr> </thead>
					<tbody>
					@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==14)
							<tr class="odd gradeX"><td></td> <td>{{$d_data->agentName}}</td> <td class="left">{{$d_data->agentUsername}}</td> <td class="left">{{$d_data->signatre}}</td> <td class="left">{{$d_data->districtName}}</td> <td class="left">{{ceil($other_data['amont_per_unit']*$d_data->wageUnits)}}</td>  <td></td> </tr> 
						@endif  
					@endforeach 
					</tbody> 
				</table> 
				</center>                    
			</div>  
		  	<div style="background:wheat; margin-left:10%; padding:1%; margin-right:10%;"> 
		  		@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==14) 
		  		<h3>Other agents in {{$d_data->districtName}} </h3> 
		  			@endif  
				@endforeach 
		  		<center>
		  		<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4"> 
					<thead> <tr> <th></th> <th> Name </th> <th> Username </th> <th> Signature </th> <th> District </th> <th> Salary </th> <th>  </th> </tr> </thead>
					<tbody>
					@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==8)
							<tr class="odd gradeX"><td></td> <td>{{$d_data->agentName}}</td> <td class="left">{{$d_data->agentUsername}}</td> <td class="left">{{$d_data->signatre}}</td> <td class="left">{{$d_data->districtName}}</td> <td class="left">{{ceil($other_data['amont_per_unit']*$d_data->wageUnits)}}</td> <td></td> </tr> 
						@endif  
					@endforeach 
					</tbody> 
				</table>
				</center>                     
			</div>
			
			
			@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==7) 
						<?php $dis= $d_data->districtName; ?>
			<div style="background:wheat; margin-left:20%; padding:1%; margin-right:20%;"> 
		  		
		  		<h3>Head of {{$d_data->districtName}} </h3>  
		  		<center>
		  		<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4"> 
					<thead> <tr> <th></th> <th> Name </th> <th> Username </th> <th> Signature </th> <th> District </th> <th> Salary </th> <th>  </th> </tr> </thead>
					<tbody>
					@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==7 && $d_data->districtName==$dis)
							<tr class="odd gradeX"><td></td> <td>{{$d_data->agentName}}</td> <td class="left">{{$d_data->agentUsername}}</td> <td class="left">{{$d_data->signatre}}</td> <td class="left">{{$d_data->districtName}}</td> <td class="left">{{ceil($other_data['amont_per_unit']*$d_data->wageUnits)}}</td> <td></td> </tr> 
						@endif  
					@endforeach  
					
					<tr><td colspan="6"><h3>Other agents in {{$dis}} </h3> </td></tr>
					@foreach($agent_data as $d_data) 
						@if($d_data->wageUnits==4 && $d_data->districtName==$dis)
							<tr class="odd gradeX"><td></td> <td>{{$d_data->agentName}}</td> <td class="left">{{$d_data->agentUsername}}</td> <td class="left">{{$d_data->signatre}}</td> <td class="left">{{$d_data->districtName}}</td> <td class="left">{{ceil($other_data['amont_per_unit']*$d_data->wageUnits)}}</td> <td></td> </tr> 
						@endif  
					@endforeach 
					</tbody> 
				</table>
				</center>                  
			</div>
			@endif  
		@endforeach 
			
		  
		  
		  
		  
		  
		 </div> 
	   @endif
	<!--============================================-->  
 </div>
<script> setInterval(function(){ location.reload(); },300000); </script> 
@endsection


