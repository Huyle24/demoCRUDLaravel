<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<section>
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
    <a  href="{{ route('add') }}"  type="button" class="btn btn-primary m-5">Thêm</a>


    <table class="table">
        <thead class="table-dark">
            <th>STT</th>
            <th>Họ và Tên</th>
            <th>Số điện thoại</th>
            <th>Thao tác</th>
        </thead>
        <tbody>
            @foreach ($staffMembers as $member)
                <tr>
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->name }}</td>
                    <td>{{ $member->phone }}</td>
                    <td>
                        <a href="{{ route('edit', ['id' => $member->id]) }}" class="btn btn-info">Sửa</a>
                        <a href="{{ route('delete', ['id' => $member->id]) }}" type="button" class="btn btn-danger">Xóa</a>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
