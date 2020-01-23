@extends('layouts.master')
@section('content')


<style>
.spa,.spa1,.spa2{
display: block;
font-size: x-large;
background-color: white;
width: 40px;
text-align: center;
height: 38px;

cursor: pointer;
color: #0c0117;
position: absolute;
top: 0px;
left: 318px;
border: 2px solid #ccc;
padding: inherit;
margin-top: 25px;
    padding-bottom: 4px;
}
</style>
 <div class="">

        <div class="box">

            @if ($errors->any())

                <div class="alert alert-danger">

                    <ul>

                        @foreach ($errors->all() as $error)

                            <li>{{ $error }}</li>

                        @endforeach

                    </ul>

                </div>

            @endif



                @if (Session::get("success"))

                    <div class="alert alert-success" role="alert">

                        {{Session::get("success")}}

                    </div>

                @endif

                @if (Session::get("error"))

                    <div class="alert alert-danger" role="alert">

                        {{Session::get("error")}}

                    </div>

                @endif

            <div class="box-header">

                <h3 class="box-title">Add New Equipment</h3>

            </div>



                                        <form id="validation-form123" action="{{url('/storeJob')}}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Job number</label>
                                                        <input type="text" class="form-control" name="jobnumber" placeholder="jobnumber" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Estimated by</label>
                                                        <input type="text" class="form-control" name="estimatedby" placeholder="estimatedby" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Job date</label>
                                                        <input type="date" class="form-control" name="jobdate" placeholder="jobdate" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer po</label>
                                                        <input type="text" class="form-control" name="customerpo" placeholder="customerpo" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Customer wo</label>
                                                        <input type="text" class="form-control" name="customerwo" placeholder="customerwo" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Invoice number</label>
                                                        <input type="text" class="form-control" name="invoicenumber" placeholder="invoicenumber" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Invoice date</label>
                                                        <input type="date" class="form-control" name="invoicedate" placeholder="invoicedate" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Due date</label>
                                                        <input type="date" class="form-control" name="duedate" placeholder="duedate" required>

                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Note</label>
                                                        <textarea name="jobdetails"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Estimate</label>
                                                        <input type="text"  class="form-control" name="estimate" placeholder="estimate" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                <input type="checkbox" name="jobactive" >Job active<br>
                                                <input type="checkbox" name="invoiced" >Invoiced<br>
                                                <input type="checkbox" name="paid" >Paid<br>
                                                 <input type="checkbox" name="archived" >Archived<br>
                                                </div>
                                                <div class="col-md-9">
                                                    <div class="form-group">
                                                        <label class="form-label">Entry Types</label>
                                                        <select name="entry" class="form-control">
                                                            @foreach($entryTypes as $entryType)
                                                                <option value="{{$entryType->id}}">{{$entryType->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                        <div id="list">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Owners</label>
                                                        <select name="owner1" onchange="ownerfuncation(1)" id="ownerID1"  class="form-control">
                                                            <option></option>
                                                        @foreach($owners as $owner)
                                                                <option value="{{$owner->id}}">{{$owner->ownername}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="form-label">Equipments</label>
                                                        <select name="equipment1" id="equipmentID1" onchange="equipmentFuncation(1)" class="form-control">

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label class="form-label">Part</label>
                                                        <select name="part1" id="partID1" class="form-control">

                                                        </select>

                                                    </div>
                                                    <span id="add" onclick="add()" class="spa" >+</span>
                                                </div>
                                        </div>
                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Add') }}

                                                    </button>

                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- [ Form Validation ] end -->
                        </div>
                        <!-- [ Main Content ] end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
    var counter=1;
</script>
<script>
    function add() {
        var options='<option></option>';
        var owners=<?php echo json_encode($owners)?>;
        counter++;
        for (var i=0; i<owners.length;i++)
        {

            options+= '<option value="'+owners[i].id+'">'+owners[i].ownername+'</option>';
        }
        $('#list').append('<div class="col-md-4"><div class="form-group"><input type="hidden" name="counter" value="'+counter+'"><label class="form-label">Owners</label><select  id="ownerID'+counter+'" onchange="ownerfuncation('+counter+')" name="owner'+counter+'"class="form-control">'+options+'</select></div></div><div class="col-md-4"><div class="form-group"><label class="form-label">Equipments</label><select name="equipment'+counter+'" id="equipmentID'+counter+'" onchange="equipmentFuncation('+counter+')" class="form-control"></select></div></div><div class="col-md-3"><div class="form-group"><label class="form-label">Part</label><select name="part'+counter+'" id="partID'+counter+'" class="form-control"></select></div></div>');
    }
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        function ownerfuncation(x) {
            $.ajax({
                url: '/getEquipment/'+$('#ownerID'+x+'').val(),
                type: 'get',
                success:function (data) {
                    $('#equipmentID'+x+'').empty();
                    for (var i=0;i<data.length; i++){
                        $('#equipmentID'+x+'').append('<option value="'+data[i].id+'">'+data[i].tag_number+'</option>');
                    }

                }
            });
        }
    </script>
    <script>
        function equipmentFuncation(x) {
            $.ajax({
                url: '/getParts/'+$('#equipmentID'+x+'').val(),
                type: 'get',
                success:function (data) {
                    $('#partID'+x+'').empty();
                    for (var i=0;i<data.length; i++){
                        $('#partID'+x+'').append('<option value="'+data[i].id+'">'+data[i].part_name+'</option>');
                    }

                }
            });
        }
    </script>
    @endsection

