


$(".blockid").click(function () {
    // get the para from data-
    const host_fib = $(this).attr("data-id");
    $.ajax({
        url: "ajax/block_account.php",
        method: "GET",
        data: {
            host_fib: host_fib,
        },
        success: function (data) {
            swal("Good job!", "This Account Has Been Blocked", "success");
            setTimeout(
                function () {
                    location.reload();
                }, 3000);

            if (data.trim() == 'done') {

            }
        }
    });
});


$(".blockida").click(function () {
    // get the para from data-
    const host_fib = $(this).attr("data-id");
    $.ajax({
        url: "ajax/activate_account.php",
        method: "GET",
        data: {
            host_fib: host_fib,
        },
        success: function (data) {
            swal("Good job!", "This Account Has Been Activated", "success");
            setTimeout(
                function () {
                    location.reload();
                }, 3000);

            if (data.trim() == 'done') {

            }
        }
    });
});

$(".del_hospital").click(function () {

    // get the para from data-
    const host_fib = $(this).attr("data-id");
    $.ajax({
        url: "ajax/d_hospital.php",
        method: "GET",
        data: {
            host_fib: host_fib,
        },
        success: function (data) {
            swal("Good job!", "This Account Has Been Removed", "success");
            setTimeout(
                function () {
                    location.reload();
                }, 3000);

            if (data.trim() == 'done') {

            }
        }
    });
});



$(".del_patients").click(function () {

    // get the para from data-
    const host_fib = $(this).attr("data-id");
    $.ajax({
        url: "ajax/d_patients.php",
        method: "GET",
        data: {
            host_fib: host_fib,
        },
        success: function (data) {
            swal("Good job!", "This Account Has Been Removed", "success");
            setTimeout(
                function () {
                    location.reload();
                }, 3000);

            if (data.trim() == 'done') {

            }
        }
    });
});



$("#add_staffs").click(function () {

    // get the para from data-
    const fullname = $("#fullname").val();
    const department = $("#department").val();
    const age = $("#age").val();
    const sex = $("#sex").val();
    const occupation = $("#occupation").val();
    const qualifications = $("#qualifications").val();
    const marital_status = $("#marital_status").val();
    const address = $("#address").val();
    const tribe = $("#tribe").val();
    const religion = $("#religion").val();
    const next_of_kin = $("#next_of_kin").val();
    const phone_number = $("#phone_number").val();
    const email = $("#email").val();
    const password = $("#password").val();
    const rg_date = $("#rg_date").val();
    const state_og = $("#state_og").val();
    const nationality = $("#nationality").val();
    const guarantor = $("#guarantor").val();
    const qualification = $("#qualification").val();

    if (fullname == "") {
        // alert("All form must be filled out");
        swal("Try Again!", "All form must be filled out", "error");
        return false;
    }else {
        $.ajax({
            url: "ajax/add_staffs.php",
            method: "GET",
            data: {state_og:state_og,nationality:nationality,guarantor:guarantor,qualification:qualification,
                fullname:fullname,department:department,age:age, sex:sex, occupation:occupation, qualifications:qualifications,marital_status:marital_status,address:address,tribe:tribe,religion:religion,next_of_kin:next_of_kin,phone_number:phone_number,email:email,password:password,rg_date: rg_date
            },
            success: function (data) {

                swal("Good job!", "This Account Has Been Added", "success");
                setTimeout(
                    function () {
                        window.location.href='setup_staffs.php';
                    }, 3000);

                if (data.trim() == 'done') {

                }
            }
        });
    }
});



$("#add_ac").click(function () {
    // get the para from data-
    const fullname = $("#fullname").val();
    const age = $("#age").val();
    const sex = $("#sex").val();
    const occupation = $("#occupation").val();
    const rg_date = $("#rg_date").val();
    const marital_status = $("#marital_status").val();
    const address = $("#address").val();
    const tribe = $("#tribe").val();
    const religion = $("#religion").val();
    const next_of_kin = $("#next_of_kin").val();
    const email = $("#email").val();
    const phone_number = $("#phone_number").val();

    if (fullname == "") {
        // alert("All form must be filled out");
        swal("Try Again!", "All form must be filled out", "error");
        return false;
    }else {
        $.ajax({
            url: "ajax/add_patient.php",
            method: "GET",
            data: {
                fullname: fullname, age: age, sex: sex, occupation: occupation, rg_date: rg_date, marital_status: marital_status,address:address,tribe:tribe,religion:religion,next_of_kin:next_of_kin,email:email,phone_number:phone_number
            },
            success: function (data) {
                swal("Good job!", "This Account Has Been Added", "success");
                setTimeout(
                    function () {
                        window.location.href='setup_patients.php';

                    }, 3000);

                if (data.trim() == 'done') {

                }
            }
        });
    }
});



$("#update_users").click(function () {

    // get the para from data-
    const pid = $("#pid").val();
    const fullname = $("#fullname").val();
    const age = $("#age").val();
    const sex = $("#sex").val();
    const occupation = $("#occupation").val();
    const rg_date = $("#rg_date").val();
    const marital_status = $("#marital_status").val();
    const address = $("#address").val();
    const tribe = $("#tribe").val();
    const religion = $("#religion").val();
    const next_of_kin = $("#next_of_kin").val();
    const email = $("#email").val();
    const phone_number = $("#phone_number").val();

    if (fullname == "") {
        // alert("All form must be filled out");
        swal("Try Again!", "All form must be filled out", "error");
        return false;
    }else {
        $.ajax({
            url: "ajax/edit_patient.php",
            method: "GET",
            data: {
                fullname: fullname, age: age, sex: sex, occupation: occupation, rg_date: rg_date, marital_status: marital_status,address:address,tribe:tribe,religion:religion,next_of_kin:next_of_kin,email:email,phone_number:phone_number,pid:pid
            },
            success: function (data) {
                swal("Good job!", "This Account Has Been Updated", "success");
                setTimeout(
                    function () {
                        location.reload();
                    }, 3000);

                if (data.trim() == 'done') {

                }
            }
        });
    }
});
