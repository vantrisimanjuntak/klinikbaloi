$(document).ready(function () {

    // Alert Konfirmasi Pendaftaran
    $("#btnSubmit").click(function () {
        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Pastikan data yang Anda inputkan sudah benar!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Submit",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                $("#submitRegistrasi").submit();
            }
        });
    });

    const alertSuccessRegistration = $(".flash-data-for-registrasi").data("flashdata");
    if (alertSuccessRegistration) {
        Swal.fire("Berhasil", "Pendaftaran " + alertSuccessRegistration, "success");
    }

    // Pendaftar

    // Alert Validasi Pendaftar



    $(".btn-konfirmasi").click(function () {

        var base_url = window.location.origin + '/projectdika/admin/pendaftar/confirmPendaftar/';
        var id = $(this).attr('id');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Melakukan konfirmasi user",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Konfirmasi",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                window.location = base_url + id
            }
        });
    });

    const alertSuccessConfirmPendaftar = $(".flash-data-for-confirm").data("flashdata");
    if (alertSuccessConfirmPendaftar) {
        Swal.fire("Berhasil", " Pendaftar sudah " + alertSuccessConfirmPendaftar, "success");
    }
    // End Alert Validasi Pendaftar

    // Alert Hapus Pendaftar
    $(".btn-hapus").click(function () {

        var base_url = window.location.origin + '/projectdika/admin/pendaftar/deletePendaftar/';
        var id = $(this).attr('id');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Hapus data user",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                window.location = base_url + id
            }
        });
    });
    // End Alert Hapus Pendaftar

    const alertSuccessDeletePendaftar = $(".flash-data-for-delete").data("flashdata");
    if (alertSuccessDeletePendaftar) {
        Swal.fire("Berhasil", " Data sudah " + alertSuccessDeletePendaftar, "success");
    }



    const alertPendingStatusPendaftar = $(".flash-data-for-pending").data("flashdata");
    if (alertPendingStatusPendaftar) {
        Swal.fire("Login Gagal", "Akun Anda belum " + alertPendingStatusPendaftar, "error");
    }

    const alertWrongPasswordUser = $(".flash-data-for-wrongpassword").data("flashdata");
    if (alertWrongPasswordUser) {
        Swal.fire({
            position: "top-center",
            icon: "error",
            title: "Username/password salah",
            showConfirmButton: false,
            timer: 2500
        }
        );
    }


    $(".btn-submit-reg-pemeriksaan").click(function () {

        var base_url = window.location.origin + '/projectdika/user/registrasi_pemeriksaan/submit/';
        var id = $(this).attr('id');

        Swal.fire({
            title: "Apakah anda yakin?",
            text: "Pastikan data sudah benar",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Hapus",
            cancelButtonText: "Batal",
        }).then((result) => {
            if (result.value) {
                $("#submitRegistrasiPemeriksaan").submit();
            }
        });
    });

    const alertSuccessRegistrationUser = $(".flash-data-for-registration-user").data("flashdata");
    if (alertSuccessRegistrationUser) {
        Swal.fire("Berhasil", " Data sudah " + alertSuccessRegistrationUser, "success");
    }




});


