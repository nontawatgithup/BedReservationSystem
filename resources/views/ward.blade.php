
@extends('layouts.argon_template')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-10">
                <div class="card">
                    <div class="card-header">จัดการวอร์ด</div>
                    <div class="card-body">
                        <a href="{{ url('/create') }}" class="btn btn-success btn-sm" title="เพิ่มใหม่">
                            <i class="fa fa-plus" aria-hidden="true"></i> เพิ่มวอร์ด
                        </a>
                        <form method="GET" action="{{ url('/ward') }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="ค้นหา..." value="{{ request('ค้นหา') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ลำดับ</th><th>ชื่อวอร์ด</th><th>การดำเนินการ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($ward  as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name_Ward }}</td>
                                        <td>
                                            <a href="{{ url('/ward/' . $item->id_Ward) }}" title="View Post"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> ดูข้อมูล</button></a>
                                            <a href="{{ action('WardController@edit', $item['id_Ward'])}}" title="Edit Post"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> แก้ไข</button></a>

                                            <form method="POST" action="{{ url('/ward' . '/' . $item->id_Ward) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Post" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> ลบ</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $ward->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
