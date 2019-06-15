@extends('base')

@section('content')
<div class="container-fluid">

  	<h1 class="h3 mb-2 text-gray-800">Some title</h1>
  	<p class="mb-4">Some description</p>

  	<div class="card shadow mb-4">
		<div class="card-body">
	      	<div class="table-responsive">
	        	<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		          	<thead>
		            	<tr>
		              		<th>#</th>
		              		<th>Some data</th>
							<th>Some data</th>
		              		<th>Some data</th>
		            	</tr>
		          	</thead>
	          		<tbody>
                        <tr>
                            <td>Some data</td>
                            <td>Some data</td>
                            <td>Some data</td>
                            <td>Some data</td>
                        </tr>
			        </tbody>
	        	</table>
	      	</div>
	    </div>
  	</div>

</div>
@stop