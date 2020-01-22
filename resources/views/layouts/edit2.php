@extends('layouts.argon_template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Edit Post #{{ $post->id }}</div>
                <div class="card-body">
                    <a href="{{ url('/index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                    <br />
                    <br />

                    @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    @endif

                    <form method="POST" action="{{ url('/index' . $post->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ method_field('PATCH') }}
                        {{ csrf_field() }}
                        @include ('form', ['formMode' => 'edit'])

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@extends('layouts.argon_template')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">แก้ไขรายละเอียด</div>
                <div class="card-body">
                    <a href="{{ url('/ward') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> ย้อนกลับ</button></a>
                    <br />
                    <br />

                    <form method="POST" action="{{ url('/ward') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include ('form', ['formMode' => 'create'])
                    </form>

                    <form method="POST" action="{{ url('/edit') }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @include ('form', ['formMode' => 'edit'])
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
