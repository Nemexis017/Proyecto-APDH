function updateTeacher(idTeacher){

    const dataUpdateTeacher={
        consultaProfesor:idTeacher,
    };

    fetch('../librerias/consultaComplementarias/consultaIndividual.php', {
        method: 'POST',
        body: JSON.stringify(dataUpdateTeacher),
        headers: {
            'Content-Type': 'application/json'
        },
    })

    .then(response => response.json())
    .then(data => {
        const formulario_update= document.querySelector("#form-updateProfesores");
        formulario_update.innerHTML = ""; 
        data.forEach(item => {
            const tipoPersona_div = document.createElement('div');
            tipoPersona_div.className = 'col-md-12';
            tipoPersona_div.innerHTML = `<label for="selTipoIdentificacion" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                                        <select class="form-select" aria-label="Default select example" id="txtTipoPersonaId_update"
                                            name="txtTipoPersonaId_update" required>
                                            <option value="${item.tipoPersonaId}" selected>${item.tipoPersonaNombre}</option>
                                            
                                        </select>`; 

            const tipoDocumento_div = document.createElement('div');
            tipoDocumento_div.className = 'col-md-12';
            tipoDocumento_div.innerHTML = `<label for="txtTipoDocumentoId_update" class="form-label"><i class="obligacion">*</i> Tipo de Documento</label>
                                        <select class="form-select" aria-label="Default select example" id="txtTipoDocumentoId_update"
                                            name="txtTipoDocumentoId_update " required>
                                            <option value="${item.tipoDocumentoId}" selected>${item.tipoDocumentoNombre}</option>
                                            
                                        </select>`; 

            const documento_div = document.createElement('div');
            documento_div.className = 'col-md-12';
            documento_div.innerHTML = `<label for="txtIdentificacion" class="form-label"><i class="obligacion">*</i> Identificación</label>
                                            <input type="text" class="form-control" id="txtIdentificacion_update" name="txtIdentificacion_update" value="${item.profesoresDocumento}" required>
                                            <div class="valid-feedback">
                                                Digitar el numero de Indentificacion
                                            </div>`; 

        
            const primerNombre_div = document.createElement('div');
            primerNombre_div.className = 'col-md-12';
            primerNombre_div.innerHTML = `<label for="txtNombres" class="form-label"><i class="obligacion">*</i> Primer nombre</label>
                                    <input type="text" class="form-control" id="txtNombres_update" name="txtNombres_update"
                                        required value="${item.profesoresNombres}">
                                    <div class="valid-feedback">
                                        Digitar sus nombres
                                    </div>`; 

            const primerApellido_div = document.createElement('div');
            primerApellido_div.className = 'col-md-12';
            primerApellido_div.innerHTML = `<label for="txtPrimerApellido" class="form-label"><i class="obligacion">*</i> Primer apellido</label>
                                            <input type="text" class="form-control" id="txtPrimerApellido_update" name="txtPrimerApellido_update"
                                                required value="${item.profesoresPrimerApellido}">
                                            <div class="valid-feedback">
                                                Digitar el primer apellido
                                            </div>`; 

            const segundoApellido_div = document.createElement('div');
            segundoApellido_div.className = 'col-md-12';
            segundoApellido_div.innerHTML = `<label for="txtSegundoApellido" class="form-label"><i class="obligacion">*</i> Segundo apellido</label>
                                            <input type="text" class="form-control" id="txtSegundoApellido_update" name="txtSegundoApellido_update"
                                                required value="${item.profesoresSegundoApellido}"}>
                                            <div class="valid-feedback">
                                                Digitar el segundo apellido
                                            </div>`;

            const sede_div = document.createElement('div');
            sede_div.className = 'col-md-12';
            sede_div.innerHTML = `<label for="sedeUpdteId" class="form-label"><i class="obligacion">*</i> Tipo de Persona</label>
                                        <select class="form-select" aria-label="Default select example" id="sedeUpdteId"
                                            name="sedeUpdteId" required>
                                            <option value="${item.sede_institucionalId}" selected>${item.sede_institucionalNombre}</option>
                                            
                                        </select>`;

                                            
            const materia_div = document.createElement('div');
            materia_div.className = 'col-md-12';
            materia_div.innerHTML = `<label for="materiaUpdate" class="form-label"><i class="obligacion">*</i> Cargo</label>
                                    <input type="text" class="form-control" id="materiaUpdate" name="materiaUpdate" value="${item.profesoresMateria}" required>
                                    <div class="valid-feedback">
                                        Digitar El cargo
                                    </div>`; 
                                

            const municipioResidencia_div = document.createElement('div');
            municipioResidencia_div.className = 'col-md-12';
            municipioResidencia_div.innerHTML = `<label for="setMunicipioResidencia" class="form-label"><i class="obligacion">*</i> Municipio Residencia </label>
                                            <select class="form-select municipioResidenciaUp" aria-label="Default select example" id="setMunicipioResidencia_update"
                                                name="setMunicipioResidencia_update" required>
                                                <option value="${item.profesoresMunicipioResidencia}" selected>${item.municipioNR}</option>
                                                
                                            </select>`; 

            const municipioNacimiento_div = document.createElement('div');
            municipioNacimiento_div.className = 'col-md-12';
            municipioNacimiento_div.innerHTML = `<label for="selMunicipioNacimiento" class="form-label"><i class="obligacion">*</i> Municipio Nacimiento</label>
                                                <select class="form-select municipioNacimientoUp" aria-label="Default select example" id="selMunicipioNacimiento_update"
                                                    name="selMunicipioNacimiento_update" required>
                                                    <option value="${item.profesoresMunicipioNacimiento}" selected>${item.municipioMN}</option>
                                                    
                                                </select>`; 

            const telefono_div = document.createElement('div');
            telefono_div.className = 'col-md-12';
            telefono_div.innerHTML = ` <label for="txtTelefono" class="form-label"><i class="obligacion">*</i> Telefono</label>
                                        <input type="text" class="form-control" id="txtTelefono_update" name="txtTelefono_update" value="${item.profesoresTelefono}" required>
                                        <div class="valid-feedback">
                                            Digitar el telefono
                                        </div>`; 

            const fechaNacimiento_div = document.createElement('div');
            fechaNacimiento_div.className = 'col-md-12';
            fechaNacimiento_div.innerHTML = `  <label for="selFechaNacimiento" class="form-label"> <i class="obligacion">*</i> Fecha Nacimieto</label>
                            <input type="date" class="form-control" id="selFechaNacimiento_update" name="selFechaNacimiento_update"
                                required value="${item.profesoresFechaNacimiento}">
                            <div class="valid-feedback">
                                Seleccione la fecha de nacimiento
                            </div>`; 

            const email_div = document.createElement('div');
            email_div.className = 'col-md-12';
            email_div.innerHTML = `<label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Correo Eletronico</label>
                        <input type="text" class="form-control" id="txtCorreoEletronico_update" name="txtCorreoEletronico_update"
                            required value="${item.profesoresEmail}">
                        <div class="valid-feedback">
                            Digitar el correo eletronico
                        </div>`; 

            const experiencia_div = document.createElement('div');
            experiencia_div.className = 'col-md-12';
            experiencia_div.innerHTML = `<label for="txtExperiencia" class="form-label"><i class="obligacion">*</i> Experiencia Laboral</label>
                                    <textarea type="text" class="form-control" id="txtExperiencia_update" name="txtExperiencia_update"
                                        required>${item.profesoresExperiencia}</textarea>
                                    <div class="valid-feedback">
                                        Digitar Experiencia Laboral
                                    </div>`; 
                                    
            const anoExperiencia_div = document.createElement('div');
            anoExperiencia_div.className = 'col-md-12';
            anoExperiencia_div.innerHTML = `<label for="numAnosExperiencia" class="form-label"><i class="obligacion">*</i> Años De Experiencia</label>
                                        <input type="number" class="form-control" id="numAnosExperiencia_update" name="numAnosExperiencia_update"
                                            required value="${item.profesoresAnoExperiencia}">
                                        <div class="valid-feedback">
                                            Digitar Años De Experiencia
                                        </div>`; 

            const titulos_div = document.createElement('div');
            titulos_div.className = 'col-md-12';
            titulos_div.innerHTML = `<label for="txtCorreoEletronico" class="form-label"><i class="obligacion">*</i> Estudios Realizados</label>
                                        <textarea type="text" class="form-control" id="txtEstudiosRealizados_update" name="txtEstudiosRealizados_update"
                                            required>${item.profesoresTitulos}</textarea>
                                        <div class="valid-feedback">
                                            Digit
                                            ar Los Estudios Realizados
                                        </div>`; 

            const gobierno_div = document.createElement('div');
            gobierno_div.className = 'col-md-12';
            gobierno_div.innerHTML = `<label for="gobiernoProfesores" class="form-label"><i class="obligacion">*</i> Municipio Nacimiento</label>
                                                <select class="form-select municipioNacimientoUp" aria-label="Default select example" id="gobiernoProfesores"
                                                    name="gobiernoProfesores" required>
                                                    <option value="${item.gobiernoEstudiantilId}" selected>${item.gobiernoEstudiantilNombre}</option>
                                                    
                                                </select>`; 
                                                
            const fotografia = document.createElement('div');
            fotografia.className = 'col-md-12';
            fotografia.innerHTML = `<label for="prFotografia" class="form-label"><i class="obligacion">*</i>Fotografia</label>
                                    <input type="file" class="form-control" name="prFotografia" id="prFotografia" values="${item.profesoresFotografia}">`; 

            const footer_modal = document.createElement('div');
            footer_modal.className = 'modal-footer';
            footer_modal.innerHTML = `<button type="button" class="btn btn-secondary" id="cerrar_update" data-bs-dismiss="modal">Cerrar</button>
                                    <button type="button" class="btn btn-primary btnUpdate" onclick="actualizar_profesor(${idTeacher});" id="btnUpdate">Actualizar</button>`; 
            
            formulario_update.appendChild(tipoPersona_div);
            formulario_update.appendChild(tipoDocumento_div);
            formulario_update.appendChild(documento_div);
            formulario_update.appendChild(sede_div);
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
            formulario_update.appendChild(titulos_div);
            formulario_update.appendChild(materia_div);
            formulario_update.appendChild(gobierno_div);
            formulario_update.appendChild(fotografia);
            formulario_update.appendChild(footer_modal);
        });
    })
    .catch(error => console.log(error)) 

    // document.getElementById('').addEventListener('click', ()=>{

    // })
}

function actualizar_profesor(idTeacher){
        // boton de cerrar modal update
        const boton_close_update= document.getElementById('cerrar_update');
    
        // toma de datos en el formulario ya consultado

        const profesoresId = idTeacher;
        const tipoDocumentoId = document.getElementById('txtTipoPersonaId_update').value; 
        const tipoPersonaId = document.getElementById('txtTipoDocumentoId_update').value; 
        const profesoresDocumento = document.getElementById('txtIdentificacion_update').value; 
        const profesoresNombres = document.getElementById('txtNombres_update').value; 
        const profesoresPrimerApellido = document.getElementById('txtPrimerApellido_update').value; 
        const profesoresSegundoApellido = document.getElementById('txtSegundoApellido_update').value; 
        const profesoresMunicipioResidencia = document.getElementById('setMunicipioResidencia_update').value; 
        const profesoresMunicipioNacimiento = document.getElementById('selMunicipioNacimiento_update').value;
        const profesoresTelefono = document.getElementById('txtTelefono_update').value; 
        const profesoresFechaNacimiento = document.getElementById('selFechaNacimiento_update').value; 
        const profesoresEmail = document.getElementById('txtCorreoEletronico_update').value; 
        const profesoresMateria = document.getElementById('materiaUpdate').value;
        const profesoresExperiencia = document.getElementById('txtExperiencia_update').value; 
        const profesoresAnoExperiencia = document.getElementById('numAnosExperiencia_update').value; 
        const profesoresTitulos = document.getElementById('txtEstudiosRealizados_update').value; 
        const gobiernoEstudiantilId = document.getElementById('gobiernoProfesores').value; 
        const sede_institucionalId = document.getElementById('sedeUpdteId').value; 
        const profesoresFotografia = document.getElementById('prFotografia').value; 
    
        // Crear un objeto con los datos
        const dataTeacher_update = {
            profesoresId,
            tipoDocumentoId,
            tipoPersonaId, 
            profesoresDocumento,
            profesoresNombres, 
            profesoresPrimerApellido,
            profesoresSegundoApellido, 
            profesoresMunicipioResidencia, 
            profesoresMunicipioNacimiento,
            profesoresTelefono, 
            profesoresFechaNacimiento, 
            profesoresEmail, 
            profesoresMateria,
            profesoresExperiencia, 
            profesoresAnoExperiencia, 
            profesoresTitulos,
            gobiernoEstudiantilId, 
            sede_institucionalId,
            profesoresFotografia, 
        };
    
        fetch('../librerias/crudProfesoresPhp/updateProfesores.php', {
            method: 'POST',
            body: JSON.stringify(dataTeacher_update),
            headers: {
                'Content-Type': 'application/json'
            },
        })
        
        .then(response => response.json())
        .then(data => {
            if(data.update_completado == "OK"){
                consultaProfesores();
                boton_close_update.click();
            }else{
                botonCerrar.click();
            }
        })
        .catch(error => console.log(error))
    
}
