@extends('layouts.master')
@section('content')

<!-- [ chat message ] end -->


<!-- [ Main Content ] start -->
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- [ breadcrumb ] start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Create Contact</h5>
                                        </div>
                                        <ul class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                            <li class="breadcrumb-item"><a href="#!">Languages</a></li>
                                            <li class="breadcrumb-item"><a href="#!">Create Language</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- [ breadcrumb ] end -->
                        <!-- [ Main Content ] start -->
                        <div class="row">
                            <!-- [ Form Validation ] start -->
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Create Language</h5>
                                    </div>
                                    <div class="card-body">
                                        @if ($errors->any())

                                                    @foreach ($errors->all() as $error)
                                                        <div class="alert alert-danger" role="alert">
                                                            {{ $error }}
                                                        </div>

                                                    @endforeach

                                        @endif
                                        <form id="validation-form123" action="{{route('language.store')}}" method="post" enctype="multipart/form-data" >
                                            {!! csrf_field() !!}

                                            <input type="hidden" value="{{$id}}" name="customer_id">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label class="form-label">Language</label>
                                                        <select class="form-control" name="language" data-placeholder="Choose a Language...">
                                                            <option value="Afrikanns">Afrikanns</option>
                                                            <option value="Albanian">Albanian</option>
                                                            <option value="Arabic">Arabic</option>
                                                            <option value="Armenian">Armenian</option>
                                                            <option value="Basque">Basque</option>
                                                            <option value="Bengali">Bengali</option>
                                                            <option value="Bulgarian">Bulgarian</option>
                                                            <option value="Catalan">Catalan</option>
                                                            <option value="Cambodian">Cambodian</option>
                                                            <option value="Chinese (Mandarin)">Chinese (Mandarin)</option>
                                                            <option value="Croation">Croation</option>
                                                            <option value="Czech">Czech</option>
                                                            <option value="Danish">Danish</option>
                                                            <option value="Dutch">Dutch</option>
                                                            <option value="English">English</option>
                                                            <option value="Estonian">Estonian</option>
                                                            <option value="Fiji">Fiji</option>
                                                            <option value="Finnish">Finnish</option>
                                                            <option value="French">French</option>
                                                            <option value="Georgian">Georgian</option>
                                                            <option value="German">German</option>
                                                            <option value="Greek">Greek</option>
                                                            <option value="Gujarati">Gujarati</option>
                                                            <option value="Hebrew">Hebrew</option>
                                                            <option value="Hindi">Hindi</option>
                                                            <option value="Hungarian">Hungarian</option>
                                                            <option value="Icelandic">Icelandic</option>
                                                            <option value="Indonesian">Indonesian</option>
                                                            <option value="Irish">Irish</option>
                                                            <option value="Italian">Italian</option>
                                                            <option value="Japanese">Japanese</option>
                                                            <option value="Javanese">Javanese</option>
                                                            <option value="Korean">Korean</option>
                                                            <option value="Latin">Latin</option>
                                                            <option value="Latvian">Latvian</option>
                                                            <option value="Lithuanian">Lithuanian</option>
                                                            <option value="Macedonian">Macedonian</option>
                                                            <option value="Malay">Malay</option>
                                                            <option value="Malayalam">Malayalam</option>
                                                            <option value="Maltese">Maltese</option>
                                                            <option value="Maori">Maori</option>
                                                            <option value="Marathi">Marathi</option>
                                                            <option value="Mongolian">Mongolian</option>
                                                            <option value="Nepali">Nepali</option>
                                                            <option value="Norwegian">Norwegian</option>
                                                            <option value="Persian">Persian</option>
                                                            <option value="Polish">Polish</option>
                                                            <option value="Portuguese">Portuguese</option>
                                                            <option value="Punjabi">Punjabi</option>
                                                            <option value="Quechua">Quechua</option>
                                                            <option value="Romanian">Romanian</option>
                                                            <option value="Russian">Russian</option>
                                                            <option value="Samoan">Samoan</option>
                                                            <option value="Serbian">Serbian</option>
                                                            <option value="Slovak">Slovak</option>
                                                            <option value="Slovenian">Slovenian</option>
                                                            <option value="Spanish">Spanish</option>
                                                            <option value="Swahili">Swahili</option>
                                                            <option value="Swedish ">Swedish </option>
                                                            <option value="Tamil">Tamil</option>
                                                            <option value="Tatar">Tatar</option>
                                                            <option value="Telugu">Telugu</option>
                                                            <option value="Thai">Thai</option>
                                                            <option value="Tibetan">Tibetan</option>
                                                            <option value="Tonga">Tonga</option>
                                                            <option value="Turkish">Turkish</option>
                                                            <option value="Ukranian">Ukranian</option>
                                                            <option value="Urdu">Urdu</option>
                                                            <option value="Uzbek">Uzbek</option>
                                                            <option value="Vietnamese">Vietnamese</option>
                                                            <option value="Welsh">Welsh</option>
                                                            <option value="Xhosa">Xhosa</option>
                                                        </select>
                                                    </div>
                                                </div>




                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                    </div>
                                                </div>




                                            <button type="submit" class="btn btn-primary">Create</button>
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

