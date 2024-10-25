<!-- Modal -->
<div class="modal fade" id="registroalumno" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header estilomodal">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registro Alumno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container">

                    <fieldset>
                        <legend>



                            <div class="form-header">
                                <h4 class="form-title" style="text-align: left;
                                border-radius: 10px;
                                background-color: rgb(97, 162, 184);
                                color: aliceblue;
                                margin-top:c15px;
                                font-size: 15px;
                                text-align: center;">Datos Alumno</h4>
                            </div>

                            <div class="row">


                                <div class="col-md-3">
                                    <strong style="font-size: 12px;">Nombre del Alumno</strong>
                                    <input id="name_Estudent" name="name_Estudent" type="text" class="control form-control"
                                        value="" style="font-size: 12px;">
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12px;">Matricula</strong>
                                    <input id="student_enrollment" name="student_enrollment" type="number" class="control form-control" value=""
                                        style="font-size: 12px;">
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12px;">Semestre</strong>
                                    <select name="Semestre" id="Semestre" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Primer Semestre">Primer Semestre</option>
                                        <option value="Segundo Semestre">Segundo Semestre</option>
                                        <option value="Tercer Semestre">Tercer Semestre</option>
                                        <option value="Cuarto Semestre">Cuarto Semestre</option>
                                        <option value="Quinto Semestre">Quinto Semestre</option>
                                        <option value="Sexto Semestre">Sexto Semestre</option>
                                        <option value="Septimo Semestre">Septimo Semestre</option>
                                        <option value="Octavo Semestre">Octavo Semestre</option>
                                        <option value="Noveno Semestre">Noveno Semestre</option>
                                        <option value="Decimo Semestre">Decimo Semestre</option>
                                    </select>
                                </div>


                                <div class="col-md-3">
                                    <strong style="font-size: 12px;">Carrera</strong>
                                    <select name="carrera" id="carrera" class="form-select" style="font-size: 12px;">
                                        <option value="Seleccione">Seleccione</option>
                                        <option value="Ing. Sistemas Computacionales">Ing. Sistemas Computacionales</option>
                                        <option value="Ing. Informatica">Ing. Informatica</option>
                                        <option value="Ing. Biomedica">Ing. Biomedica</option>
                                        <option value="Ing. Electronica">Ing. Electronica</option>
                                        <option value="Ing. Ambiental">Ing. Ambiental</option>
                                        <option value="Lic. Administración">Lic. Administración</option>
                                        <option value="Lic. Arquitectura">Lic. Arquitectura</option>
                                    </select>
                                </div>
                        </legend>
                    </fieldset>

                    <div class="container">

                        <fieldset>
                            <legend>
                                <div class="form-header">
                                    <h4 class="form-title" style="text-align: left; border-radius: 10px;
                                 background-color: rgb(97, 162, 184); color: aliceblue;
                                  font-size: 15px; text-align: center;">Capturar Fotos</h4>
                                </div>

                                <!-- Captura de fotos -->

                                <video id="videoCapture1" class="unique-video" style="display:none;" autoplay muted></video>
                                <button id="startButton1" class="unique-button">Iniciar Captura</button>
                                <button id="stopButton1" class="unique-button" disabled>Detener Captura</button>

                            </legend>
                        </fieldset>

                    </div>
                </div>


            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>