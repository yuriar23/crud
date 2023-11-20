document.addEventListener('DOMContentLoaded', function(){
    // Inicializar la tabla DataTable con configuración y URL para obtener datos
    nombre_de_su_tabla = $('#nombre_de_su_tabla').DataTable({
        ajax: {
            url: base_url + '/', // URL del controlador al que apuntamos para obtener datos
            dataSrc: '' // Nombre del objeto en la respuesta que contiene los datos
        },
        columns: [
            // Definir las columnas y la fuente de datos para DataTable
            // Aquí deberías especificar las columnas que deseas mostrar en la tabla
        ],
        responsive: false, // Desactivar la funcionalidad de respuesta para la tabla
        order: [[0, 'asc']], // Ordenar la tabla por la primera columna de forma ascendente
    });

    // Agregar lógica para el botón de limpiar (si es necesario)
   
    // Lógica del formulario (si hay un formulario en la página)
});

/**
 * Función para editar un alumno. Recibe el ID del alumno a editar como parámetro.
 * @param {number} idalumno - ID del alumno a editar.
 */
function editarAlumno(idalumno) {
    // Lógica para editar un alumno
}

/**
 * Función para eliminar un alumno. Recibe el ID del alumno a eliminar como parámetro.
 * @param {number} idalumno - ID del alumno a eliminar.
 */
function eliminarAlumno(idalumno) {
    // Lógica para eliminar un alumno
}
