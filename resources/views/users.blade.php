@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive">

                            <table  class="table table-bordered" id="allData">
                                <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Father Name</th>
                                    <th>Address</th>
                                    <th>Address</th>
                                    <th>Created At</th>
                                    <th>Update At</th>
                                </tr>
                                </thead>

                            </table>

                        </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->
<!-- <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script> -->

            <script type="text/javascript">
                $(function() {
                    $('#allData').DataTable( {
                        processing: true,
                        serverSide: true,
                        ordering: true,
                        ajax: "{{url('/user-data')}}",
                        columns: [
                            { data: 'id',name:'id'},
                            { data: 'name',name:'name'},
                            { data: 'email',name:'email'},
                            { data: 'gender',name:'user_info.gender'},
                            { data: 'address',name:'user_info.address'},
                            { data: 'address',name:'user_info.address'},
                            { data: 'created_at',name:'user_info.created_at'},
                            { data: 'updated_at',name:'user_info.updated_at'},
                           

                        ]
                    });
                });

            </script>

@endsection


