$(document).ready(function () {
    // Evento submit del formulario para cargar clientes
    $('#uploadclientes').submit(async function (e) {
        e.preventDefault(); // Evitar el comportamiento predeterminado del formulario

        try {
            const formData = new FormData(this);
            // Realizar una solicitud POST asincrónica con fetch al controlador 'home/alumnoscsv'
            const response = await fetch(base_url + 'home/alumnoscsv', {
                method: 'POST',
                body: formData,
            });
            // Parsear la respuesta como JSON
            const result = await response.json();

            if (result.success) {
                // Mostrar notificación de éxito usando SweetAlert2
                Swal.fire({
                    icon: 'success',
                    title: 'Éxito',
                    text: 'Los datos se han registrado correctamente.',
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 4000,
                    customClass: { toast: 'bg-success text-white' },
                });

                // Restablecer el formulario después del éxito
                $('#file, #uploadclientes')[0].reset();
            } else {
                // Lanzar una excepción en caso de error
                throw new Error(result.error);
            }
        } catch (error) {
            // Mostrar notificación de error usando SweetAlert2
            Swal.fire({
                icon: 'error',
                title: 'Advertencia',
                text: error.message || 'Error al procesar el archivo CSV.',
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 4000,
                customClass: { toast: 'bg-warning text-white' },
            });
        }
    });

    // Evento click para recargar datos en la tabla al hacer clic en el botón de actualización
    $('#refresh-btn').click(() => $('#tblclientes').DataTable().ajax.reload());
});
