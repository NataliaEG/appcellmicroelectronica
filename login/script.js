const loginForm= document.getElementById('formulario');

loginForm.addEventListener('submit', (e)=>{
    e.preventDefault();

    const nombre=document.getElementById('nombre').value;
    const password= document.getElementById('password').value;

    const formData= new FormData();
    formData.append('nombre', nombre);
    formData.append('password', password);

    fetch('login.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if(data.success){
            window.location.href = '../admin/index.php';
        }
        else{
            alert('Contrseña o usuario incorrecto');
        }
    })
    .catch(error => {
        console.log(error);
        alert("ERROR en la solicitud: " + error);
    });
});


