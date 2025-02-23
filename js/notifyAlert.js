function showInfo(title, message) {
    Swal.fire({
        title: title,
        text: message,
        icon: "info",
        confirmButtonColor: "#2A6B7A",
        confirmButtonText: "OK",
        customClass: {
            popup: "custom-gradient-bg"
        },
        color: "#fff"
    }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire({
                toast: true,
                position: "top-end",
                icon: "success",
                title: "<strong>Success</strong>: Message!",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                background: "#28a745", 
                color: "#fff",     
            });
        }
    });
}