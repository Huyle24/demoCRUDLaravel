<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
<style>
  .my_form {
        padding-left: 20%;
        padding-right: 20%
    }

    label {
        font-weight: 600;
        margin-bottom: 5px;
        margin-top: 10px
    }

    button {

        margin-top: 10px;

    }


</style>
<section class="my_form" >
<div>
    <form  action="{{ route('saveAdd') }}" method="POST"  class="p-10">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Họ và tên</label>
            <input type="text" class="form-control" name="name" placeholder="Nhập tên">
            <label for="exampleInputEmail1">Số điện thoại</label>
            <input type="number" class="form-control" name="phone" placeholder="Nhập số điện thoại">
        </div>
        <button type="submit" class="btn btn-info">Tạo</button>
    </form>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
