<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Basic Laravel</title>
</head>

<body style="background-color: #e6e6e6;">
    <div class="container p-5 justify-content-center align-items-center vh-100">
        <div class="row justify-content-center align-items-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-body">
                    <div class="rounded-circle position-absolute" style="width: 20px; height: 20px; background-color: #000; top: 18px; left: 30px;"></div>
                    <div class="rounded-circle position-absolute" style="width: 20px; height: 20px; background-color: #000; top: 18px; right: 30px;"></div>
                    <h5 class="text-center card-title mb-5">Display With Yajra Datatables</h5>
                    <div class="table-responsive">
                        <table id="dataUserChuck" class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Provider</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $('#dataUserChuck').DataTable({
                processing: true,
                serverSide: true,
                responsive: true,
                autoWidth: false,
                paging:true,
                ajax: '{{ route('data-users') }}',
                language: {
                    paginate: {
                    next: '<i class="fa fa-angle-double-right" aria-hidden="true"></i>',
                    previous: '<i class="fa fa-angle-double-left" aria-hidden="true"></i>' 
                    }
		        },
                columns: [{
                        data: 'DT_RowIndex',
                        orderable: false,
                        searchable: false
                    },
                    {
                        data: 'name',
                        searchable:true
                    },
                    {
                        data: 'email',
                        searchable:true
                    },
                    {
                        data: 'phone.phone',
                        searchable:true
                    },
                    {
                        data: 'phone.provider',
                        searchable:true
                    },
                    {
                        data: 'btn',
                        searchable:true
                    },
                ]
            })
        })
</script>
</body>

</html>