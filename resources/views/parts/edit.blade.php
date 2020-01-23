@extends('layouts.master')
@section('content')

<!-- [ chat message ] end -->


<!-- [ Main Content ] start -->
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

                <h3 class="box-title">Edit Part</h3>

            </div>
                                        <form  action="{{url('/updatePart/'.$part->id)}}" method="post">
                                            {!! csrf_field() !!}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Tag number</label>
                                                        <input type="number" value="{{$part->tag_number}}" class="form-control" name="tag_number" required placeholder="tag number">

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Date</label>
                                                        <input type="date" value="{{$part->date}}" class="form-control" name="date" placeholder="date" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Part number</label>
                                                        <input type="number" value="{{$part->part_number}}" class="form-control" name="part_number" placeholder="part number" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Part name</label>
                                                        <input type="text" value="{{$part->part_name}}" class="form-control" name="part_name" placeholder="part name" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Condition rec</label>
                                                        <input type="text" value="{{$part->condition_rec}}" class="form-control" name="condition_rec" placeholder="condition rec" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">2nd condition rec</label>
                                                        <input type="text" value="{{$part->nd_condition_rec}}" class="form-control" name="nd_condition_rec" required placeholder="nd_condition_rec">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Material</label>
                                                        <input type="text" value="{{$part->material}}" class="form-control" name="material" placeholder="material" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Source</label>
                                                        <input type="text" value="{{$part->source}}" class="form-control" name="source" placeholder="source" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Quantity</label>
                                                        <input type="number" value="{{$part->quantity}}" class="form-control" name="quantity" placeholder="quantity" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Price</label>
                                                        <input type="number" value="{{$part->price}}" class="form-control" name="price" placeholder="price" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Cost</label>
                                                        <input type="number" value="{{$part->cost}}" required class="form-control" name="cost" placeholder="cost" >
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Work performed</label>
                                                        <input type="text" value="{{$part->work_performed}}" class="form-control" name="work_performed" placeholder="work_performed" required>
                                                    </div>
                                                </div>

                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Recommendation</label>
                                                        <input type="text" value="{{$part->recommendation}}" class="form-control" name="recommendation" placeholder="recommendation" required>

                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Parts code</label>
                                                        <input type="text" value="{{$part->parts_code}}" class="form-control" name="parts_code" placeholder="parts_code" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Parts uni</label>
                                                        <input type="text" value="{{$part->parts_uni}}" class="form-control" name="parts_uni" placeholder="parts_uni" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Delivery date</label>
                                                        <input type="date"value="{{$part->delivery_date}}" class="form-control" name="delivery_date" placeholder="delivery_date" required>
                                                    </div>
                                                </div>


                                                <div class="col-md-3 ">

                                                    <button type="submit" class="btn btn-primary" >

                                                        {{ __('Update') }}

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
    @endsection

