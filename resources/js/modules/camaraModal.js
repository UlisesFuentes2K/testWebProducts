import $ from 'jquery';
import swal from 'sweetalert2';

export const initCamaraModal = () => {

    //VARIABLE GLOBALES
    let fotoActual = null;
    let indexActual = 0;
    let observaciones = [];

    //INICIALIZAR FUNCION Y MODAL
    $(function () {
        configurarEventosModal();

        $('#btnObservacion').on('click', function () {
            $('#cancelarfotoComentario').prop('hidden', true);
            validarBotonesModal();
        });
    });

    // LOGICA DE CARGAR FOTO/COMENTARIO
    function configurarEventosModal() {
        // Botón abrir cámara
        $('#imagenActual').on('click', function () {
            $('#almacenamiento').click();
        });

        // Cargar imagen tomada
        $('#almacenamiento').on('change', function () {
            const archivo = this.files[0];
            if (!archivo) {
                fotoActual = null;
            } else {
                fotoActual = archivo;
            }

            const observacion = $('#observacionFoto').val().trim() || null;
            MostrarArchivos(fotoActual, observacion);
            $(this).val('');
        });

        // Guardar observación
        $('#btnGuardarFotoComentario').on('click', function () {
            const observacion = $('#observacionFoto').val().trim() || null;
            if (fotoActual === null && observacion === null) {
                Respuesta("Error", " Debes Agregar una foto o un comentario", "error");
                return;
            }

            let validation = observaciones.some(x => x.image?.name === fotoActual?.name);
            if (validation && fotoActual != null) {
                Respuesta("Error", " La foto ya existe", "error");
                NoFotoNoComentario();
                return;
            }

            observaciones.push({
                index: observaciones.length,
                image: fotoActual || null,
                observacion: observacion
            });
            console.log(observaciones);
            Respuesta("Exito", "Datos Ingresados con exito", "success");
            Desactivarboton();
            validarBotonesModal();
        });

        // Actualizar observación
        $('#btnactualizarFotoComentario').on('click', function () {
            const observacion = $('#observacionFoto').val().trim() || null;
            observaciones[indexActual] = {
                ...observaciones[indexActual],
                image: fotoActual,
                observacion: observacion
            };
            Respuesta("Exito", " Observación actualizada", "success");
            Desactivarboton();
            validarBotonesModal();
        });

        //Nueva observación
        $('#nuevaObservacion').on('click', function () {
            NoFotoNoComentario();
            DesactivarNavegacion();
            Activarboton();
        });

        // Navegar a siguiente
        $('#btnCamaraModalRight').on('click', function () {
            $('#cancelarfotoComentario').prop('hidden', true);

            if (observaciones.length === 0) return;
            indexActual = (indexActual + 1) % observaciones.length;
            const obs = observaciones[indexActual];
            MostrarArchivos(obs.image, obs.observacion);
        });

        // Navegar a anterior
        $('#btnCamaraModalLef').on('click', function () {
            if (observaciones.length === 0) return;
            indexActual = (indexActual - 1 + observaciones.length) % observaciones.length;
            const obs = observaciones[indexActual];
            MostrarArchivos(obs.image, obs.observacion);
        });

        //Cancelar nueva observacion
        $('#cancelarfotoComentario').on('click', function () {
            NoFotoNoComentario();
            validarBotonesModal();
            Desactivarboton();
            $('#btnCamaraModalRight').click();
        });

        // Eliminar observación
        $('#eliminarfotoComentario').on('click', function () {
            if (observaciones.length === 0) return;
            observaciones.splice(indexActual, 1);
            Respuesta("Exito", "Observación eliminada", "success");
            validarBotonesModal();
            if (indexActual >= observaciones.length)
                indexActual = observaciones.length - 1;

            if (observaciones.length > 0) {
                console.log('Tiene datos: ' + observaciones.length);
                const obs = observaciones[indexActual];
                MostrarArchivos(obs.image, obs.observacion);
            } else {
                NoFotoNoComentario();
            }
        });

        //Cerrar Modal
        $('#cerrarModalfoto').on('click', function () {
            NoFotoNoComentario(observaciones[indexActual].image, observaciones[indexActual].observacion);
            Desactivarboton();
            DesactivarNavegacion();
        });
    }

    // Muestra imagen y texto
    function MostrarArchivos(img, observacion) {
        if (!img) {
            NoFotoNoComentario();
        } else {
            const url = URL.createObjectURL(img);
            $('#imagenActual').attr('src', url);
        }
        $('#observacionFoto').val(observacion || '');
    }

    // VALIDAR BOTONES DE MODAL
    function validarBotonesModal() {

        if (observaciones.length === 0) {
            // No hay fotos: ocultar navegación, mostrar captura
            $('#nuevaObservacion').prop('hidden', true);
            DesactivarNavegacion();
            $('#eliminarfotoComentario').prop('hidden', true);
            $('#cancelarfotoComentario').prop('hidden', true);
            $('#btnGuardarFotoComentario').prop('hidden', false);
            $('#btnactualizarFotoComentario').prop('hidden', true);
            return;
        }

        if (observaciones.length === 1) {
            // Solo una observación: mostrar captura, ocultar navegación
            $('#nuevaObservacion').prop('hidden', false);
            $('#eliminarfotoComentario').prop('hidden', false)
            $('#btnactualizarFotoComentario').prop('hidden', false);
            DesactivarNavegacion();
            const obs = observaciones[indexActual];
            MostrarArchivos(obs.image, obs.observacion);
            return;
        }

        // Más de una observación: ocultar captura, mostrar navegación
        $('#eliminarfotoComentario').prop('hidden', false)
        $('#nuevaObservacion').prop('hidden', false);
        $('#btnactualizarFotoComentario').prop('hidden', false);
        ActivarNavegacion();
    }

    //BOTONES ACTIVOS E INACTIVOS DE NUEVA FOTO/COMENTARIO
    function Activarboton() {
        $('#cancelarfotoComentario').prop('hidden', false);
        $('#eliminarfotoComentario').prop('hidden', true);
        $('#btnGuardarFotoComentario').prop('hidden', false);
        $('#nuevaObservacion').prop('hidden', true);
        $('#btnactualizarFotoComentario').prop('hidden', true);
    }

    function Desactivarboton() {
        $('#cancelarfotoComentario').prop('hidden', true);
        $('#eliminarfotoComentario').prop('hidden', false);
        $('#btnGuardarFotoComentario').prop('hidden', true);
        $('#nuevaObservacion').prop('hidden', false);
        $('#btnactualizarFotoComentario').prop('hidden', false);
    }

    //LIMPIAR FOTO/COMENTARIO
    function NoFotoNoComentario(img = null, text = null) {
        fotoActual = img;
        console.log('foto es: ' + fotoActual?.name);
        if (fotoActual === null) {
            $('#imagenActual').attr('src', '/imgs/tresdt/img.png').attr('alt', 'Sin imagen');
            $('#observacionFoto').val('');
        } else {
            $('#imagenActual').attr('src', img).attr('alt', 'Sin imagen');
            $('#observacionFoto').val(text);
        }
        $('#observacionFoto').val('');
    }

    //NAVEGACION DE FOTOS/COMENTARIOS CARGADAS
    function DesactivarNavegacion() {
        $('#btnCamaraModalRight').prop('hidden', true);
        $('#btnCamaraModalLef').prop('hidden', true);
    }

    function ActivarNavegacion() {
        $('#btnCamaraModalRight').prop('hidden', false);
        $('#btnCamaraModalLef').prop('hidden', false);
    }

    // MENSAHE SWEET ALERT2
    function Respuesta(Estado, mensaje, icono) {
        swal.fire({
            title: Estado,
            text: mensaje,
            icon: icono,
            buttons: ["Aceptar"],
            width: '500px'
        });
    }
}