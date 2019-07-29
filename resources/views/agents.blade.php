@extends('header')
@section('content') 

 <center> <h2 id="headline"><b>List of agents</b></h2> </center>
 
 <a href="/agent_form"><div id="add-more-container">
 	<center> <div id="add-more-button" title="Add a new agent">+</div> </center> 
 </div></a>
 
  <center>
 <table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
	<thead>
        <tr> 						 
        	<th></th>
            <th> Name </th>
            <th> Username </th>
            <th> Signature </th>
            <th> District </th>  
            <th> Head Agent ? </th>  
            <th> Salary </th>  
            <th>  </th>
        </tr>
    </thead>
    <tbody>
 	<!--============================================-->
		@if(count($agent_data) > 0)
		  @foreach($agent_data as $d_data)
			<tr class="odd gradeX">
				<td class="patient-img">
						<img src="img/doc/doc1.svg" alt="">
				</td>
				<td>{{$d_data->agentName}}</td>
				<td class="left">{{$d_data->agentUsername}}</td>
				<td class="left">{{$d_data->signatre}}</td>
				<td class="left">{{$d_data->districtName}}</td> 
				<td class="left">{{$d_data->agentHead}}</td> 
				<td class="left">{{$d_data->wageUnits}}</td> 
				<td> 
				</td>
			</tr>
		  @endforeach
	   @endif
	<!--============================================-->
	</tbody>
</table>
</center>
 
@endsection
