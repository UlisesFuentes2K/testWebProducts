import $ from 'jquery';
import './bootstrap';
import 'boxicons';

$(function () {
    const path = window.location.pathname;
    //Ruta raiz
    if (path === '/') {
        import('./modules/camaraModal.js').then(x => x.initCamaraModal?.());
    }

    //Rutas descendientes
    // if (path.startsWith('/')) {
    //     import('./modules/camaraModal.js').then(x => x.initCamaraModal?.());
    // }
})