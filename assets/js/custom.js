console.log('Hola desde custom js');
// document.getElementById("s").classList.add('form-control');
// document.getElementById("searchsubmit").classList.add("btn", "btn-primary", "mt-2");


const widgetBuscar = document.querySelectorAll('#searchform #s');
if (widgetBuscar) {

  for (const iterator of widgetBuscar) {
    iterator.className += ' form-control mb-2';    
  }
  
  const btnWidgetBuscar = document.querySelectorAll('#searchsubmit');
  
  for (const iterator of btnWidgetBuscar) {
    iterator.className += ' btn btn-primary'; 
  }
}

const comentariosRecientes = document.querySelector('#recentcomments');
if (comentariosRecientes) {
    comentariosRecientes.className += ' list-group';

    comentariosRecientes.querySelectorAll('.recentcomments').forEach(item => {
        item.className += ' list-group-item';
    });
}

// Estilos comentarios
const botonComentarios = document.querySelector('.form-submit #submit');
if(botonComentarios){
  botonComentarios.className = 'btn btn-primary';
}

const inputTextArea = document.querySelector('.comment-form-comment textarea');
if(inputTextArea){
  inputTextArea.className = 'form-control';
  inputTextArea.setAttribute('placeholder', 'Ingresa aquí tu comentario *');
}

const comentariosNuevos = document.querySelector('#commentform');
if(comentariosNuevos
  && comentariosNuevos.querySelector('.comment-form-author label')
  && comentariosNuevos.querySelector('.comment-form-author input')
  && comentariosNuevos.querySelector('.comment-form-email label')
  && comentariosNuevos.querySelector('.comment-form-email input')
  && comentariosNuevos.querySelector('.comment-form-url label')
  && comentariosNuevos.querySelector('.comment-form-url input')
  ){

  comentariosNuevos.querySelector('.comment-form-author label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-author input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-author input').setAttribute('placeholder', 'Nombre *');

  comentariosNuevos.querySelector('.comment-form-email label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-email input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-email input').setAttribute('placeholder', 'Email *');

  comentariosNuevos.querySelector('.comment-form-url label').className = 'd-none';
  comentariosNuevos.querySelector('.comment-form-url input').className = 'form-control';
  comentariosNuevos.querySelector('.comment-form-url input').setAttribute('placeholder', 'Sitio web');

}

const botonEditarComentarios = document.querySelectorAll('.comment-edit-link');
if(botonEditarComentarios){
  botonEditarComentarios.forEach(boton => {
    boton.className = 'btn btn-outline-info btn-sm'
  })
}

const botonResponderComentarios = document.querySelectorAll('.comment-reply-link');
if(botonResponderComentarios){
  botonResponderComentarios.forEach(boton => {
    boton.className = 'btn btn-outline-info btn-sm'
  })
}

// const parentCheckConsent = document.getElementById('wp-comment-cookies-consent').parentNode;
// parentCheckConsent.className += ' form-check';

// const checkConsent = document.getElementById('wp-comment-cookies-consent');
// checkConsent.className += ' form-check-input ';

// const ulRespuesta = querySelectorAll('.media ul.children');
// console.log(ulRespuesta);

