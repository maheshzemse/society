<div class="table-responsive">
        <table border="1" class="table">
<tr>
<th class="thcolor">Id</td>
<th class="thcolor">Name</td>
<th class="thcolor">Flat No</td>
<th class="thcolor">All Municipal Dues</td>
<th class="thcolor">Administrative_and_General_Expenses</td>
<th class="thcolor">sinking_fund</td>
<th class="thcolor">Periodic_Building_Maintenance</td>
<th class="thcolor">Common_Area_Utilization_Parking</td>
<th class="thcolor">Non_Occupancy_Charges</td>
<th class="thcolor">Past_Arrears_of_Contribution</td>
<th class="thcolor">Interest_Due</td>
<th class="thcolor">total</td>

</tr>

@foreach($allbills as $b)

<tr>
<td>{{$b->id}}</td>
<td>{{$b->name}}</td>
<td>{{$b->flat_no}}</td>
<td>{{$b->All_Municipal_Dues}}</td>
<td>{{$b->Administrative_and_General_Expenses}}</td>
<td>{{$b->sinking_fund}}</td>
<td>{{$b->Periodic_Building_Maintenance}}</td>
<td>{{$b->Common_Area_Utilization_Parking}}</td>
<td>{{$b->Non_Occupancy_Charges}}</td>
<td>{{$b->Past_Arrears_of_Contribution}}</td>
<td>{{$b->Interest_Due}}</td>


<td>{{$b->All_Municipal_Dues+$b->Administrative_and_General_Expenses+$b->sinking_fund+$b->Periodic_Building_Maintenance+$b->Common_Area_Utilization_Parking+$b->Non_Occupancy_Charges+$b->Past_Arrears_of_Contribution+$b->Interest_Due}}</td>

</tr>
@endforeach




</table>
</div>