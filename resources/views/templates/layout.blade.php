<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Thêm liên kết CSS của Bootstrap Timepicker -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <style>
        /* Customize sidebar */
        .sidebar {
            height: 100%;
            width: 250px;
            position: fixed;
            top: 0;
            left: 0;
            padding-top: 15px;
            background-color: #f8f9fa;
        }

        .sidebar a {
            display: block;
            padding: 8px;
            color: #000;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #007bff;
            color: #fff;
        }

        /* Adjust main content area */
        .content {
            margin-left: 260px;
            padding: 20px;
        }

    </style>
</head>

<body>
<div class="row">
    <div class="sidebar col-md-4">
        <img class="col-10 img-rounded" src="https://cdn-icons-png.flaticon.com/512/906/906343.png">
        <h2>Admin Page</h2>
        <a href="{{ url('/') }}">Airlines</a>
        <a href="{{ url('/user/list') }}">Users</a>
        <a href="{{ url('/flight/list') }}">Flights</a>
        <a href="{{ url('/booking/list') }}">Bookings</a>
        <a href="{{ url('/ticket/list') }}">Tickets</a>
    </div>

    <!-- Content -->
    <div class="content col-md-8">
        @include('templates.errors')
        @yield('content')
    </div>

</div>
<!-- Sidebar -->

<!-- Footer -->
<footer class="footer bg-dark text-light py-3" >
    <div class="container my-auto">
        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-11">
                <p>© 2023 Admin Page. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-timepicker/0.5.2/js/bootstrap-timepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script>
    // Sử dụng JavaScript để kích hoạt Timepicker cho input có class "timepicker"
    document.addEventListener("DOMContentLoaded", function() {
        $(document).ready(function() {
            $('.timepicker').timepicker({
                minuteStep: 1, // Bước nhảy tăng/giảm thời gian là 1 phút
                showSeconds: false, // Không hiển thị giây
                showMeridian: true // Hiển thị AM/PM
            });
        });
    });

</script>
<script>
    // Sử dụng JavaScript để kích hoạt Datepicker cho input có class "datepicker"
    $(document).ready(function() {
        $('.datepicker').datepicker({
            todayBtn: true, // Hiển thị nút "Hôm nay" để chọn ngày hiện tại
            clearBtn: true, // Hiển thị nút "Xóa" để xóa giá trị ngày
            autoclose: true,// Tự động đóng Datepicker sau khi chọn ngày
            format: 'yyyy-mm-dd',
            todayHighlight: true
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Lấy ngày hôm nay
        var today = new Date();

        // Tăng ngày hôm nay lên một ngày để có ngày hôm sau
        var tomorrow = new Date(today);
        tomorrow.setDate(today.getDate() + 1);

        // Định dạng lại ngày hôm sau thành chuỗi YYYY-MM-DD
        var formattedTomorrow = tomorrow.toISOString().slice(0, 10);

        // Đặt ngày hôm sau cho input
        document.getElementById('autoChooseDate').value = formattedTomorrow;
    });
</script>

</body>

</html>
