function comprarVivienda(id, logged) {
    let url = window.location.protocol + "//" + window.location.host + "/comprarTransaccion";

    if (logged) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Quieres comprar esta vivienda?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d48d08',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, comprar!',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: { id: id }, 
                    success: function(response) {
                        swal.fire(
                            'Vivienda comprada!',
                            'Encontraras tu vivienda en "mis propiedades"',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    },
                });
            } 
            else if (result.dismiss === Swal.DismissReason.cancel) {
                swal.fire(
                    'Compra cancelada',
                    'Se ha cancelado tu proceso de compra',
                    'error'
                )
            }
        })
    } else {
        window.location.href = window.location.protocol + "//" + window.location.host + "/login";
    }
}

function alquilarVivienda(id, logged) {
    let url = window.location.protocol + "//" + window.location.host + "/alquilarTransaccion";
    
    if (logged) {
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¿Quieres alquilar esta vivienda?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d48d08',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, alquilar!',
            cancelButtonText: 'No, cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: url,
                    method: "POST",
                    data: { id: id }, 
                    success: function(response) {
                        swal.fire(
                            'Vivienda alquilada!',
                            'Encontraras tu vivienda en "mis propiedades"',
                            'success'
                        ).then(() => {
                            location.reload();
                        });
                    },
                    error: function(xhr, status, error) {
                        console.log(error);
                    },
                });
            } 
            else if (result.dismiss === Swal.DismissReason.cancel) {
                swal.fire(
                    'Alquiler cancelado',
                    'Se ha cancelado tu proceso de alquiler',
                    'error'
                )
            }
        })
    } else {
        window.location.href = window.location.protocol + "//" + window.location.host + "/login";
    }
}

