$(document).ready(function () {

    toastr.options = {
        "closeButton": true,
        "newestOnTop": true,
        "positionClass": "toast-top-right"
    };


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

});

function addCompareList(property_id = null, user_id){
    $.ajax({
        url: '/user/compare/add',
        type: 'POST',
        data: {
            "property_id": property_id,
            "user_id": user_id,
        },
        dataType: 'JSON',
        success: function (response) {
            // alert(response.success)
            if(response.success === true){
                let toastr;
                toastr.success("Propiedad agregada a la lista de comparación");
            }else{
                toastr.error("La propiedad ya esta agregada a su lista de comparacion");
            }
        },

        error: function (xhr, status, error) {
            const err = eval("(" + xhr.responseText + ")");
            if (error === "Unauthorized" || err.message === "Unauthenticated.") {
                // alert("mal")
                toastr.error("Sin autorización");
            }
        }
    })
}


function addWishlist(property_id = null) {
    const user_id = document.getElementById(property_id).getAttribute("user_id");

    $.ajax({
        url: '/user/wishlist/add',
        type: 'POST',
        data: {
            "property_id": property_id,
            "user_id": user_id,
        },
        dataType: 'JSON',
        success: function (response) {
            // alert(response.success)
            if(response.success === true){
                toastr.success("Propiedad agregada a la lista de deseados");
            }else{
                toastr.error("La propiedad ya esta agregada a su lista de deseados");
            }
        },

        error: function (xhr, status, error) {
            const err = eval("(" + xhr.responseText + ")");
            if (error === "Unauthorized" || err.message === "Unauthenticated.") {
                // alert("mal")
                toastr.error("Sin autorización");
            }
        }
    })
}
