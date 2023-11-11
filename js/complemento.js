
//   Funcionamiento de galeria   //

document.querySelectorAll('.image-contenedor img').forEach( image=>{
    image.onclick = () =>{
        document.querySelector('.popup-image').style.display = 'block';
        document.querySelector('.popup-image img').src = image.getAttribute('src');
    }
});

document.querySelector('.popup-image span').onclick = () =>{
    document.querySelector('.popup-image').style.display = 'none';
}

document.querySelectorAll('.forma img').forEach( image=>{
    image.onclick = () =>{
        document.querySelector('.popup-imagen').style.display = 'block';
        document.querySelector('.popup-imagen img').src = image.getAttribute('src');
    }
});

document.querySelector('.popup-imagen span').onclick = () =>{
    document.querySelector('.popup-imagen').style.display = 'none';
}