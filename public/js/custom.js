function getContact() {
    axios.get('/getContact')
        .then(function(response) {
            if (response.status == 200) {

                $('.contactMainDiv').removeClass('d-none');
                $('#contactLoader').addClass('d-none');
                $('#contactTable').DataTable().destroy();
                $('#ContactInfo').empty();
                var json_data = response.data;
                $.each(json_data, function(i) {
                    $('<tr>').html(
                        "<td class='th-sm'>" + json_data[i].contact_name + "</td>" +
                        "<td class='th-sm'>" + json_data[i].contact_mobile + "</td>" +
                        "<td class='th-sm'>" + json_data[i].contact_email + "</td>" +
                        "<td class='th-sm'>" + json_data[i].contact_msg + "</td>" +
                        "<td class='th-sm'><a data-id=" + json_data[i].id + " class='contactEditId' ><i class='fas fa-edit'></i></a></td>" +
                        "<td class='th-sm'><a data-id=" + json_data[i].id + " class='contactDelete'><i class='fas fa-trash-alt'></i></a></td>"
                    ).appendTo('#ContactInfo')
                });

                //Contact Delete Modal Show Onclick function************
                $('.contactDelete').click(function() {
                    var id = $(this).data('id');
                    $('#contactDelId').html(id);
                    $('#contactDelete').modal('show');

                })

                //Contact Edit Modal Show Onclick Function ************
                $('.contactEditId').click(function() {
                    var id = $(this).data('id');
                    $('#contactEditModal').modal('show');
                    contactEditMethod(id);
                })


                $('#contactTable').DataTable();
                $('.dataTables_length').addClass('bs-select');
            } else {

                $('#contactLoader').addClass('d-none');
                $('#contactWrongDiv').removeClass('d-none');
            }
        })
        .catch(function(error) {
            $('#contactLoader').addClass('d-none');
            $('#contactWrongDiv').removeClass('d-none');
        });
}


//Contact Delete Confirm Method

$('#contactDeleteConfirmBtn').click(function() {
    var id = $('#contactDelId').html();
    contactDeleteMehod(id);
})

function contactDeleteMehod(id) {
    $('#contactDeleteConfirmBtn').html("<div class='spinner-border text-dark' role='status'><span class='visually-hidden'></span></div>");
    axios.post('/contactDeleteMehod', {
            id: id
        })
        .then(function(response) {

            if (response.status == 200) {
                toastr.success('Delete Successfull');
                $('#contactDelete').modal('hide');
                $('#contactDeleteConfirmBtn').html("Yes");
                getContact();
            } else {
                toastr.error('Delete Faield');
                $('#contactDelete').modal('hide');
                getContact();
            }
        })
        .catch(function(error) {
            toastr.error('Delete Faield');
            $('#contactDelete').modal('hide');
            getContact();
        })
}

//Contact Edit Method*****************
function contactEditMethod(id) {

    axios.post('/contactEditMethod', {
            id: id
        })
        .then(function(response) {
            if (response.status == 200) {
                $('#contactEditLoader').addClass('d-none');
                $('#contactEditFormShow').removeClass('d-none');

                var jsonData = response.data;
                $('#contactEditId').html(jsonData[0].id);
                $('#contactName').val(jsonData[0].contact_name);
                $('#contactMobile').val(jsonData[0].contact_mobile);
                $('#cotactEmail').val(jsonData[0].contact_email);
                $('#contactMsg').val(jsonData[0].contact_msg);
            } else {
                $('#contactEditLoader').addClass('d-none');
                $('#contactEditWrongMsg').removeClass('d-none');
            }
        })
        .catch(function(error) {
            $('#contactEditLoader').addClass('d-none');
            $('#contactEditWrongMsg').removeClass('d-none');
        });
}
// Contact Update Method ********************

$('#contactUpdateConfirmBtn').click(function() {
    var id = $('#contactEditId').html();
    var name = $('#contactName').val();
    var mobile = $('#contactMobile').val();
    var email = $('#cotactEmail').val();
    var msg = $('#contactMsg').val();

    contactUpdateMethod(id, name, mobile, email, msg);
});

function contactUpdateMethod(id, name, mobile, email, msg) {
    $('#contactUpdateConfirmBtn').html("<div class='spinner-border text-dark' role='status'><span class='visually-hidden'></span></div>");
    axios.post('/contactUpdateMethod', {
            id: id,
            name: name,
            mobile: mobile,
            email: email,
            msg: msg
        })
        .then(function(response) {

            if (response.status == 200) {
                toastr.success('Update is Successfull');
                $('#contactEditModal').modal('hide');
                $('#contactUpdateConfirmBtn').html("UPDATE DATA");
                getContact();
            } else {
                toastr.error('Update is Failed');
                $('#contactEditModal').modal('hide');
                getContact();
            }
        })
        .catch(function(error) {
            toastr.success('Update is Successfull');
            $('#contactEditModal').modal('hide');
            getContact();
        })
}