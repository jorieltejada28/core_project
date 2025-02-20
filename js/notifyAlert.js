function showInfo(title, message) {
    Swal.fire({
        title: title,
        text: message,
        icon: "info",
        confirmButtonColor: "#007BFF",
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
                title: "Richard Supot XP!",
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                background: "#28a745", 
                color: "#fff",     
            });
        }
    });
}