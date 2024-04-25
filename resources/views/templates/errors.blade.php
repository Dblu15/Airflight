@if ( Session::has('success') )

    <div id="successAlert" class="alert alert-success alert-dismissible" role="alert">
        <strong>{{ Session::get('success') }}</strong>
        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>

@endif

{{--@if ( Session::has('error') )--}}
{{--    <div class="alert alert-danger alert-dismissible" role="alert">--}}
{{--        <strong>{{ Session::get('error') }}</strong>--}}
{{--        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>--}}
{{--    </div>--}}
{{--@endif--}}

{{--@if ($errors->any())--}}
{{--    <div class="alert alert-danger alert-dismissible" role="alert">--}}
{{--        <ul>--}}
{{--            @foreach ($errors->all() as $error)--}}
{{--                <li>{{ $error }}</li>--}}
{{--            @endforeach--}}
{{--        </ul>--}}
{{--        <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>--}}
{{--    </div>--}}
{{--@endif--}}

<script>
    // Function để ẩn thông báo sau 3 giây
    function hideAlert() {
        var alertElement = document.getElementById('successAlert');
        setTimeout(function() {
            alertElement.style.display = 'none';
        }, 3000); // Thời gian ẩn thông báo (3 giây)
    }

    // Gọi function khi trang được tải lên
    window.onload = hideAlert;
</script>
