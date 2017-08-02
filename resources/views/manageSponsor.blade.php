<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BarCamp Mon Dashboard</title>

    <!-- Styles -->
    <link href="{{asset('fontAwesome/css/font-awesome.css')}}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <link href="{{asset('Templatedemo/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/main.css')}}" rel="stylesheet">
    <link href="{{asset('Templatedemo/responsive.css')}}" rel="stylesheet">

</head>

<body>

@include('dashboardNavbar')
<div id="dashboard">
    <div class="container" style="margin-top: 100px">
        <div class="row">
            <div class="col-sm-4">
                <div class="panel panel-primary newSponsor">
                    <div class="panel-heading">
                        <i class="fa fa-plus-circle"></i> Add New Sponsor
                    </div>
                    <div class="panel-body">
                        @if(Session::has('addNewSuccess'))
                            <div class="alert alert-success">
                                {{ Session::get('addNewSuccess') }}
                            </div>
                        @endif
                        <form role="form" method="post" action="{{route('newSponsor')}}" enctype="multipart/form-data">
                            <div class="form-group">
                                @if($errors->has('sponsorLogo'))<span class="help-block"></span>{{$errors->first('sponsorLogo')}}
                                @endif
                                <label for="sponsorLogo" class="control-label"><i class="fa fa-photo fa-lg"aria-hidden="true"></i> Logo</label>
                                <input type="file" name="sponsorLogo" id="sponsorLogo" required>
                            </div>
                            <div class="form-group">
                                @if($errors->has('sponsorType'))<span class="help-block"></span>{{$errors->first('sponsorType')}}
                                @endif
                                <label for="sponsorType" class="control-label"><i class="fa fa-address-card fa-lg"aria-hidden="true"></i> Select Type</label>
                                <select name="sponsorType" class="form-control">
                                    <option value="Main Sponsor">Main Sponsor</option>
                                    <option value="Diamond Sponsor">Diamond Sponsor</option>
                                    <option value="Platinum Sponsor">Platinum Sponsor</option>
                                    <option value="Gold Sponsor">Gold Sponsor</option>
                                    <option value="Silver Sponsor">Silver Sponsor</option>
                                </select>
                            </div>
                            <div class="form-group">
                                @if($errors->has('sponsorName'))<span class="help-block"></span>{{$errors->first('sponsorName')}}
                                @endif
                                <input type="text" name="sponsorName" id="sponsorName" class="form-control" placeholder="Brand Name" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                            {{csrf_field()}}
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <i class="fa fa-list"></i> Sponsor Lists

                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered table-hover"  style="text-align: center">
                            <thead>
                            <tr>
                                <td>Sponsor Logo</td>
                                <td>Brand Name</td>
                                <td>Sponsor Type</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($spon as $s)
                                <tr>
                                    <td><img src="{{route('sponsorLogo',['logoName'=>$s->logo])}}" class="img-circle" width="50px"></td>
                                    <td>{{$s->name}}</td>
                                    <td>{{$s->type}}</td>
                                    <td><!-- Button trigger modal -->
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#{{$s->id}}">
                                            <i class="fa fa-remove fa-lg" aria-hidden="true"></i> Remove
                                        </button>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                    <div class="modal-dialog modal-sm" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Confirm</h4>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure went to delete?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                                <a href="{{route('removeSponsor',['id'=>$s->id])}}" class="btn btn-primary">Yes</a> </td>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                            </tbody>



                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('bootstrap/js/app.js') }}" type="text/javascript"></script>
<script src="{{ asset('bootstrap/js/jquery.js') }}" type="text/javascript"></script>
<script src="{{asset('bootstrap/js/bootstrap.js')}}" type="text/javascript"></script>

<script  src="{{asset('Templatedemo/smoothscroll.js')}}" type="text/javascript"></script>
<script  src="{{asset('Templatedemo/jquery.isotope.min.js')}}" type="text/javascript"></script>
<script  src="{{asset('Templatedemo/jquery.prettyPhoto.js')}}" type="text/javascript"></script>
<script  src="{{asset('Templatedemo/jquery.parallax.js')}}" type="text/javascript"></script>
<script  src="{{asset('Templatedemo/main.js')}}" type="text/javascript"></script>



</body>

</html>