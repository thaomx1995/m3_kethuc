<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5 ">
            <form action="{{ route('chitieu.update', $chitieus->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row d-flex">
                    <div class="col-md-6">
                        <div class="col-md-6">
                            <h3>Cập nhật chi tiêu</h3>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Danh mục</label>
                            {{-- <input type="text" class="form-control" value="{{ old('danhmuc') ?? $chitieus->danhmuc}}" name="danhmuc" placeholder="Tên"> --}}
                            <div class="col-md-12">
                                <select name="danhmuc" class="form-select">
                                    @if ($chitieus->danhmuc == 1)
                                        <option selected value="Gas">Gas</option>
                                        <option value="Internet">Internet</option>
                                        <option value="Phone">phone</option>
                                    @else
                                        <option value="Gas">Gas</option>
                                        <option selected value="Internet">Internet</option>
                                        <option selected value="Phone">phone</option>
                                        @error('danhmuc')
                                            <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ngày</label>
                            <input type="date" class="form-control" value="{{ old('ngay') ?? $chitieus->ngay }}"
                                name="ngay" placeholder="">
                            @error('ngay')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Số tiền</label>
                            <input type="number" class="form-control" value="{{ old('sotien') ?? $chitieus->sotien }}"
                                name="sotien" placeholder="">
                            @error('sotien')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Ghi chú</label>
                            <input type="text" class="form-control" value="{{ old('ghichu') ?? $chitieus->ghichu }}"
                                name="ghichu" placeholder="">
                            @error('ghichu')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </form>
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
