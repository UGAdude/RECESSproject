@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:20px;">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center><h2 style="font-size:100px; text-shadow:0 3px black; color:skyblue; "> 
					<i>The</i> United Front for Transformation <br>(UFT) 
					</h2> </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
