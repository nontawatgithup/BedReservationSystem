@extends('layouts.argon_template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Post {{ $ward->id_Ward }}</div>
                    <div class="card-body">

                        <a href="{{ action('WardController@index', $ward['id_Ward']) }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> กลับ</button></a>
                        <a href="{{ action('WardController@edit', $ward['id_Ward'])}}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                        <form method="POST" action="{{ url('/ward' . '/' . $ward->id_Ward) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                        </form>

                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>รหัสวอร์ด</th><td>{{ $ward->id_Ward }}</td>
                                    </tr>
                                    <tr><th> ชื่อวอร์ด </th><td> {{ $ward->name_Ward }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
