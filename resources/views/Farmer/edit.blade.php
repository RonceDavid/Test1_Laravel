    @extends('farmer.layout')

    @section('content')
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2> Edit product</h2>
                </div>
                <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('farmer.index') }}">Back</a>
                </div>
            </div>
        </div>

    @if ($errors->any())
    <div class="alert ater-danger">
        <strong> Whoops!</strong> There where some problem with your input <br><br>
            <ul> 
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>

            @endforeach
            </ul>
        </div>
    @endif 

    <form action= "{{ route('farmer.update',$farmer->id) }}" method="POST">
        @csrf
        
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                    <strong> FarmerName:</strong> 

                    <input type="text" name="farmerName" value="{{ $farmer->farmerName }}" class="form-control" placeholder="Name">
    </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Id:</strong>

            <input type="text" name="Id" value="{{ $farmer->Id }}" class="form-control" placeholder="id">
    </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>email</strong>
            <input type="text" name="email" value="{{ $farmer->email }}" class="form-control" placeholder="email">
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
    </div>
    </form>
    @stop
