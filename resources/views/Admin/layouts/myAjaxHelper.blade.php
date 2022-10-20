<script>
    var loader = `
			<div class="dimmer active">
			<div class="lds-ring"><div></div><div></div><div></div><div></div></div>
			</div>
        `;
    // Show Data Using YAJRA
    async function showData(routeOfShow,columns) {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: routeOfShow,
                columns: columns,
                order: [
                    [0, "DESC"]
                ],
                "language": {
                    "sProcessing": "Loading ..",
                    "sLengthMenu": "show _MENU_ register",
                    "sZeroRecords": "No results",
                    "sInfo": "show _START_ to  _END_ From _TOTAL_ register",
                    "sInfoEmpty": "no results",
                    "sInfoFiltered": "Search",
                    "sSearch": "search :    ",
                    "oPaginate": {
                        "sPrevious": "Previous",
                        "sNext": "Next",
                    },
                    buttons: {
                        copyTitle: 'Copied to clipboard <i class="fa fa-check-circle text-success"></i>',
                        copySuccess: {
                            1: "1 row copied",
                            _: "rows %d copied successfully"
                        },
                    }
                },

                dom: 'Bfrtip',
                buttons: [
                    {
                        extend: 'copy',
                        text: 'copy',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'print',
                        text: 'print',
                        className: 'btn-primary'
                    },
                    {
                        extend: 'excel',
                        text: 'excel',
                        className: 'btn-primary'
                    },
                    // {
                    //     extend: 'pdf',
                    //     text: 'PDF',
                    //     className: 'btn-primary'
                    // },
                    {
                        extend: 'colvis',
                        text: 'show',
                        className: 'btn-primary'
                    },
                ]
            });
        }

    // Delete Using Ajax
    function deleteScript(routeOfDelete) {
        $(document).ready(function () {
            //Show data in the delete form
            $('#delete_modal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget)
                var id = button.data('id')
                var title = button.data('title')
                var modal = $(this)
                modal.find('.modal-body #delete_id').val(id);
                modal.find('.modal-body #title').text(title);
            });
        });
        $(document).on('click', '#delete_btn', function (event) {
            var id = $("#delete_id").val();
            $.ajax({
                type: 'POST',
                url: routeOfDelete,
                data: {
                    '_token': "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    if (data.status === 200) {
                        $("#dismiss_delete_modal")[0].click();
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success(data.message)
                    } else {
                        $("#dismiss_delete_modal")[0].click();
                        toastr.error(data.message)
                    }
                }
            });
        });
    }

    // show Add Modal
    function showAddModal(routeOfShow){
        $(document).on('click', '.addBtn', function () {
            $('#modal-body').html(loader)
            $('#editOrCreate').modal('show')
            setTimeout(function () {
                $('#modal-body').load(routeOfShow)
            }, 250)
        });
    }

    function addScript(){
        $(document).on('submit', 'Form#addForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#addForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#addButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">wait ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('Added successfully');
                    } else if(data.status == 405){
                        toastr.error(data.mymessage);
                    }
                    else
                        toastr.error('There is something wrong..');
                    $('#addButton').html(`add`).attr('disabled', false);
                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('There is something wrong..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value, 'error');
                                });
                            }
                        });
                    } else
                        toastr.error('There is something wrong..');
                    $('#addButton').html(`add`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }

    function showEditModal(routeOfEdit){
        $(document).on('click', '.editBtn', function () {
            var id = $(this).data('id')
            var url = routeOfEdit;
            url = url.replace(':id', id)
            $('#modal-body').html(loader)
            $('#editOrCreate').modal('show')

            setTimeout(function () {
                $('#modal-body').load(url)
            }, 500)
        })
    }

    function editScript(){
        $(document).on('submit', 'Form#updateForm', function (e) {
            e.preventDefault();
            var formData = new FormData(this);
            var url = $('#updateForm').attr('action');
            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                beforeSend: function () {
                    $('#updateButton').html('<span class="spinner-border spinner-border-sm mr-2" ' +
                        ' ></span> <span style="margin-left: 4px;">wait ..</span>').attr('disabled', true);
                },
                success: function (data) {
                    $('#updateButton').html(`edit`).attr('disabled', false);
                    if (data.status == 200) {
                        $('#dataTable').DataTable().ajax.reload();
                        toastr.success('Edited successfully');
                    } else
                        toastr.error('There is something wrong..');

                    $('#editOrCreate').modal('hide')
                },
                error: function (data) {
                    if (data.status === 500) {
                        toastr.error('There is something wrong..');
                    } else if (data.status === 422) {
                        var errors = $.parseJSON(data.responseText);
                        $.each(errors, function (key, value) {
                            if ($.isPlainObject(value)) {
                                $.each(value, function (key, value) {
                                    toastr.error(value, 'error');
                                });
                            }
                        });
                    } else
                        toastr.error('There is something wrong..');
                    $('#updateButton').html(`edit`).attr('disabled', false);
                },//end error method

                cache: false,
                contentType: false,
                processData: false
            });
        });
    }
</script>
