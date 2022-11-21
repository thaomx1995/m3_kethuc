<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="row">
                <div class="col-md-6">
                    <h3>Liệt kê chi tiêu</h3>
                </div>
                <div class="col-md-6">
                <form action=""  method="GET">
                    <a href="{{ route('chitieu.create') }}" class="btn btn-success float-end" >Add</a>
                    @include('chitieu.modals.modalFilterColumns')
                </form>
                </div>
            </div>
            <div class="row">
                <span class="text-success">{{ Session::get('flash_message_successfully') ?? '' }}</span>
            </div>
            <table class="table table-striped mt-10">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Danh mục</th>
                        <th scope="col">Ngày</th>
                        <th scope="col">Số tiền</th>
                        <th scope="col"> </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($chitieus as $chitieu)
                        <tr>
                            <td>{{ $chitieu->id }}</td>
                            <td>{{ $chitieu->danhmuc }}</td>
                            <td>{{ $chitieu->ngay }}</td>
                            <td>{{ number_format($chitieu->sotien) }}</td>
                            <td>
                                <form action="{{route('chitieu.destroy',$chitieu->id)}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <a href="{{ route('chitieu.edit', $chitieu->id) }}"
                                            class="btn btn-sm btn-icon btn-success">Edit</a>
                                    <button onclick="return confirm('bạn muốn xóa truyện này?');" class="btn btn-sm btn-icon btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="col-md-12">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
