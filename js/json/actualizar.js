function update_modal(id_personal_update){
    const data_update={
        idPersonal:id_personal_update,
    };

    fetch('librerias/consulta_individual.php', {
        method: 'POST',
        body: JSON.stringify(data_update),
        headers: {
            'Content-Type': 'application/json'
        },
    })
    
    .then(response => response.json())
    .then(data => {
        const formulario_update= document.querySelector("#form-update");
        formulario_update.innerHTML = ""; 
        data.forEach(item => {
            const tipoPersona_div = document.createElement('div');
            tipoPersona_div.className = 'col-md-12';
            tipoPersona_div.innerHTML = `<label for="selTipoIdentificacion" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                                        <select class="form-select" aria-label="Default select example" id="tipoPersonaId_Update"
                                            name="txtTipoPersonaId" required>
                                            <option value="${item.tipoPersonaId}" selected>${item.tipoPersonaNombre}</option>
                                            
                                        </select>`; 

            const tipoDocumento_div = document.createElement('div');
            tipoDocumento_div.className = 'col-md-12';
            tipoDocumento_div.innerHTML = `<label for="txtTipoDocumentoId_update" class="form-label"><i class="obligacion">*</i> Tipo de Documento</label>
                                        <select class="form-select" aria-label="Default select example" id="txtTipoDocumentoId_update"
                                            name="txtTipoDocumentoId" required>
                                            <option value="${item.tipoDocumentoId}" selected>${item.tipoDocumentoNombre}</option>
                                            
                                        </select>`; 

            const documento_div = document.createElement('div');
            documento_div.className = 'col-md-12';
            documento_div.innerHTML = `<label for="txtIdentificacion" class="form-label"><i class="obligacion">*</i> Identificación</label>
                                            <input type="text" class="form-control" id="txtIdentificacion_update" name="txtIdentificacion_update" value="${item.personalMauxiDocumento}" required>
                                            <div class="valid-feedback">
                                                Digitar el numero de Indentificacion
                                            </div>`; 

            const cargo_div = document.createElement('div');
            cargo_div.className = 'col-md-12';
            cargo_div.innerHTML = `<label for="txtCargo" class="form-label"><i class="obligacion">*</i> Cargo</label>
                                    <input type="text" class="form-control" id="txtCargo_update" name="txtCargo_update" value="${item.personalMauxiCargo}" required>
                                    <div class="valid-feedback">
                                        Digitar El cargo
                                    </div>`; 

            const primerNombre_div = document.createElement('div');
            primerNombre_div.className = 'col-md-12';
            primerNombre_div.innerHTML = `<label for="txtNombres" class="form-label"><i class="obligacion">*</i> Primer nombre</label>
                                    <input type="text" class="form-control" id="txtNombres_update_update" name="txtNombres_update"
                                        required value="${item.personalMauxiNombres}">
                                    <div class="valid-feedback">
                                        Digitar sus nombres
                                    </div>`; 

            const primerApellido_div = document.createElement('div');
            primerApellido_div.className = 'col-md-12';
            primerApellido_div.innerHTML = `<label for="txtPrimerApellido" class="form-label"><i class="obligacion">*</i> Primer apellido</label>
                                            <input type="text" class="form-control" id="txtPrimerApellido_update" name="txtPrimerApellido_update"
                                                required value="${item.personalMauxiPrimerApellido}">
                                            <div class="valid-feedback">
                                                Digitar el primer apellido
                                            </div>`; 

            const segundoApellido_div = document.createElement('div');
            segundoApellido_div.className = 'col-md-12';
            segundoApellido_div.innerHTML = `<label for="txtSegundoApellido" class="form-label"><i class="obligacion">*</i> Segundo apellido</label>
                                            <input type="text" class="form-control" id="txtSegundoApellido_update" name="txtSegundoApellido_update"
                                                required value="${item.personalMauxiSegundoApellido}"}>
                                            <div class="valid-feedback">
                                                Digitar el segundo apellido
                                            </div>`; 

            const municipioResidencia_div = document.createElement('div');
            municipioResidencia_div.className = 'col-md-12';
            municipioResidencia_div.innerHTML = `<label for="setMunicipioResidencia" class="form-label"><i class="obligacion">*</i> Municipio Residencia </label>
                                            <select class="form-select municipioResidenciaUp" aria-label="Default select example" id="setMunicipioResidencia_update"
                                                name="setMunicipioResidencia_update" required>
                                                <option value="${item.personalMauxiMunicipioResidencia}" selected>${item.nombreMunicipioResidencia}</option>
                                                
                                            </select>`; 

            const municipioNacimiento_div = document.createElement('div');
            municipioNacimiento_div.className = 'col-md-12';
            municipioNacimiento_div.innerHTML = `<label for="selMunicipioNacimiento" class="form-label"><i class="obligacion">*</i> Municipio Nacimiento</label>
                                                <select class="form-select municipioNacimientoUp" aria-label="Default select example" id="selMunicipioNacimiento_update"
                                                    name="selMunicipioNacimiento_update" required>
                                                    <option value="${item.personalMauxiMunicipioNacimiento}" selected>${item.nombreMunicipioNacimiento}</option>
                                                    
                                                </select>`; 

            const telefono_div = document.createElement('div');
            telefono_div.className = 'col-md-12';
            telefono_div.innerHTML = ` <label for="txtTelefono" class="form-label"><i class="obligacion">*</i> Telefono</label>
                                        <input type="text" class="form-control" id="txtTelefono_update" name="txtTelefono_update" value="${item.personalMauxiTelefono}" required>
                                        <div class="valid-feedback">
                                            Digitar el telefono
                                        </div>`; 

            const fechaNacimiento_div = document.createElement('div');
            fechaNacimiento_div.className = 'col-md-12';
            fechaNacimiento_div.innerHTML = `  <label for="selFechaNacimiento" class="form-label"> <i class="obligacion">*</i> Fecha Nacimieto</label>
                            <input type="date" class="form-control" id="selFechaNacimiento_update" name="selFechaNacimiento_update"
                                required value="${item.personalMauxiFechaNacimiento}">
                            <div class="valid-feedback">
                                Seleccione la fecha de nacimiento
                            </div>`; 

            const email_div = document.createElement('div');
            email_div.className = 'col-md-12';
            email_div.innerHTML = `<label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Correo Eletronico</label>
                        <input type="text" class="form-control" id="txtCorreoEletronico_update" name="txtCorreoEletronico_update"
                            required value="${item.personalMauxiEmail}">
                        <div class="valid-feedback">
                            Digitar el correo eletronico
                        </div>`; 

            const experiencia_div = document.createElement('div');
            experiencia_div.className = 'col-md-12';
            experiencia_div.innerHTML = `<label for="txtExperiencia" class="form-label"><i class="obligacion">*</i> Experiencia Laboral</label>
                                    <textarea type="text" class="form-control" id="txtExperiencia_update" name="txtExperiencia_update"
                                        required>${item.personalMauxiExperiencia}</textarea>
                                    <div class="valid-feedback">
                                        Digitar Experiencia Laboral
                                    </div>`; 
                                    
            const anoExperiencia_div = document.createElement('div');
            anoExperiencia_div.className = 'col-md-12';
            anoExperiencia_div.innerHTML = `<label for="numAnosExperiencia" class="form-label"><i class="obligacion">*</i> Años De Experiencia</label>
                                        <input type="number" class="form-control" id="numAnosExperiencia_update" name="numAnosExperiencia_update"
                                            required value="${item.personalMauxiAnosExperiencia}">
                                        <div class="valid-feedback">
                                            Digitar Años De Experiencia
                                        </div>`; 

            const estudios_div = document.createElement('div');
            estudios_div.className = 'col-md-12';
            estudios_div.innerHTML = `<label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Estudios Realizados</label>
                                        <textarea type="text" class="form-control" id="txtEstudiosRealizados_update" name="txtEstudiosRealizados_update"
                                            required>${item.personalMauxiEstudios}</textarea>
                                        <div class="valid-feedback">
                                            Digitar Los Estudios Realizados
                                        </div>`; 

            const footer_modal = document.createElement('div');
            footer_modal.className = 'modal-footer';
            footer_modal.innerHTML = `<button type="button" class="btn btn-secondary" id="cerrar_udate" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary" id="btnUpdate">Actualizar</button>`; 

            formulario_update.appendChild(tipoPersona_div);
            formulario_update.appendChild(tipoDocumento_div);
            formulario_update.appendChild(documento_div);
            formulario_update.appendChild(cargo_div);
            formulario_update.appendChild(primerNombre_div);
            formulario_update.appendChild(primerApellido_div);
            formulario_update.appendChild(segundoApellido_div);
            formulario_update.appendChild(municipioResidencia_div);
            formulario_update.appendChild(municipioNacimiento_div);
            formulario_update.appendChild(telefono_div);
            formulario_update.appendChild(fechaNacimiento_div);
            formulario_update.appendChild(email_div);
            formulario_update.appendChild(experiencia_div);
            formulario_update.appendChild(anoExperiencia_div);
            formulario_update.appendChild(estudios_div);
            formulario_update.appendChild(footer_modal);
        });
    })
    .catch(error => console.log(error)) 

    document.getElementById('btnUpdate').onclick = function(){
        // boton de cerrar modal update
        const boton_close_update= document.getElementById('cerrar_udate');

        // toma de datos en el formulario ya consultado
        const id_personalMauxi = id_personal_update;
        const tipoPersonaId = document.getElementById("txtTipoPersonaId_update").value;
        const tipoDocumentoId = document.getElementById("txtTipoDocumentoId_update").value;
        const personalMauxiDocumento = document.getElementById("txtIdentificacion_update").value;
        const personalMauxiCargo = document.getElementById("txtCargo_update").value;
        const personalMauxiNombres = document.getElementById("txtNombres_update").value;
        const personalMauxiPrimerApellido = document.getElementById("txtPrimerApellido_update").value;
        const personalMauxiSegundoApellido = document.getElementById("txtSegundoApellido_update").value;
        const personalMauxiMunicipioResidencia = document.getElementById("setMunicipioResidencia_update").value;
        const personalMauxiMunicipioNacimiento = document.getElementById("selMunicipioNacimiento_update").value;
        const personalMauxiTelefono = document.getElementById("txtTelefono_update").value;
        const personalMauxiFechaNacimiento = document.getElementById("selFechaNacimiento_update").value;
        const personalMauxiEmail = document.getElementById("txtCorreoEletronico_update").value;
        const personalMauxiExperiencia = document.getElementById("txtExperiencia_update").value;
        const personalMauxiAnosExperiencia = document.getElementById("numAnosExperiencia_update").value;
        const personalMauxiEstudios = document.getElementById("txtEstudiosRealizados_update").value;

        // Crear un objeto con los datos
        const dataPersonal_update = {
            id_personalMauxi:id_personalMauxi,
            tipoPersonaId: parseFloat(tipoPersonaId),
            tipoDocumentoId: parseFloat(tipoDocumentoId),
            personalMauxiDocumento:personalMauxiDocumento,
            personalMauxiCargo:personalMauxiCargo,
            personalMauxiNombres:personalMauxiNombres,
            personalMauxiPrimerApellido:personalMauxiPrimerApellido,
            personalMauxiSegundoApellido:personalMauxiSegundoApellido,
            personalMauxiMunicipioResidencia: parseFloat(personalMauxiMunicipioResidencia),
            personalMauxiMunicipioNacimiento: parseFloat(personalMauxiMunicipioNacimiento),
            personalMauxiTelefono:personalMauxiTelefono,
            personalMauxiFechaNacimiento:personalMauxiFechaNacimiento,
            personalMauxiEmail:personalMauxiEmail,
            personalMauxiExperiencia:personalMauxiExperiencia,
            personalMauxiAnosExperiencia:personalMauxiAnosExperiencia,
            personalMauxiEstudios:personalMauxiEstudios,
        };

        fetch('librerias/actualizar_personal.php', {
            method: 'POST',
            body: JSON.stringify(dataPersonal_update),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        
        .then(response => response.json())
        .then(data => {
            if(data.registroEjecutado == "OK"){
                tablaPersonal();
                boton_close_update.click();
            }else{
                botonCerrar.click();
            }
        })
        .catch(error => console.log(error))
    }
}
