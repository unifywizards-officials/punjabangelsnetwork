<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>

<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>

<script>
$.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>

<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>

<!-- <script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script> -->
<!-- <script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script> -->

<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>

<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>

<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>

<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>

<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{asset('plugins/toastr/toastr.min.js')}}"></script>

<script src="{{asset('dist/js/adminlte.js?v=3.2.0')}}"></script>

<script src="{{asset('dist/js/demo.js')}}"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- <script src="{{asset('dist/js/pages/dashboard.js')}}"></script> -->
<script>
document.getElementById('submitLink').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('myForm').submit();
});


$(document).ready(function() {
    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right",
        "timeOut": 2000
    };
    @if(Session::has('error'))
    toastr.error('{{ Session::get('error') }}');
    @elseif(Session::has('success'))
    toastr.success('{{ Session::get('success') }}');
    @endif
});
</script>
<script>
$(".deleteRecord").click(function() { /// Delete single record using ajax

    var id = $(this).data("id");
    var status = $(this).data("status");
    var token = $("meta[name='csrf-token']").attr("content");
    var textContent = $(this).data("heading");
    var confirmButtonText = $(this).data("buttonstatus");
    var method = $(this).data("method");
    // console.log(id,status,token,textContent,confirmButtonText,method);
    // return;

    Swal.fire({
        title: 'Are you sure?',
        // text: "You won't be able to revert this!",
        text: textContent,
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        // confirmButtonText: 'Yes, delete it!'
        confirmButtonText: confirmButtonText
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: location.href + '/' + id,
                // type: 'DELETE',
                type: method,
                data: {
                    "id": id,
                    "_token": token,
                    "status": status
                },
                success: function(res) {
                    toastr.options = {
                        "closeButton": true,
                        "newestOnTop": true,
                        "positionClass": "toast-top-right",
                        "timeOut": 2000
                    };
                    if (status == '1') {
                        toastr.success(res.success);
                    } else {
                        toastr.error(res.success);

                    }

                    // toastr.error(res.success);
                    setTimeout(function() {
                        location.reload(true);
                    }, 1000)
                }
            });

        }
    })
});


$(document).ready(function() {
    // Select all rows
    $('#select-all').click(function() {
        $('.row-checkbox').prop('checked', this.checked);
    });

    // Handle individual row selection
    $('.row-checkbox').change(function() {
        if ($('.row-checkbox:checked').length === $('.row-checkbox').length) {
            $('#select-all').prop('checked', true);
        } else {
            $('#select-all').prop('checked', false);
        }
    });

    // Handle delete button click
    $('#deleteAllSelected').click(function() {

        var selectedItems = [];
        $('.row-checkbox:checked').each(function() {
            selectedItems.push($(this).val());
        });
        // console.log(selectedItems)

        if (selectedItems.length === 0) {
            Swal.fire('Error', 'Please select items to delete', 'error');
            return;
        }

        var table = $(this).data("table");
        var token = $("meta[name='csrf-token']").attr("content");
            @if(Auth::user()->role == 'admin')
                roleBasedRoute = '{{ route('admin.delete.selected') }}';
            @elseif(Auth::user()->role == 'event-manager')
                roleBasedRoute = '{{ route('event-manager.delete.selected') }}';
            @endif

        Swal.fire({
            title: 'Are you sure?',
            text: 'You won\'t be able to revert this!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then(function(result) {
            if (result.isConfirmed) {
                $.ajax({
                    url: roleBasedRoute,
                    type: 'DELETE',
                    data: {
                        ids: selectedItems,
                        table: table,
                        _token: token
                    },

                    success: function(res) {
                        toastr.options = {
                            "closeButton": true,
                            "newestOnTop": true,
                            "positionClass": "toast-top-right",
                            "timeOut": 2000
                        };
                        toastr.success(res.success);
                        setTimeout(function() {
                            location.reload(true);
                        }, 1000)
                        // Reload or update your table here if needed
                    },
                    error: function(xhr) {
                        toastr.error('Something went wrong!');
                    }
                });
            }
        });
    });
});
</script>