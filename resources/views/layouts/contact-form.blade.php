    <section id="contact" class="contact section-padding" data-scroll-index="5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title"> <span>Localização</span>
                            <h2 class=" animate-box" data-animate-effect="fadeInLeft">Contato</h2>
                            <hr class="line line-hr-secondary">
                        </div>
                    </div>
                    <div class="col-md-6 info mb-30 animate-box" data-animate-effect="fadeInLeft">
                        <div class="item">
                            <p><b>Endereço</b> : Instituto Dra. Patricia Brandt Schefer
                                <br />
                                Ed. Bento Gonçalves <br />
                                Rua Bento Gonçalves, N. 1731 - sala 111, Centro<br />
                                93510-365 Novo Hamburgo - RS
                                </p>
                        </div>
                        <div class="item">
                            <p><b>Email</b> : atendimento@patriciabs.com.br</p>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="alert alert-success message-contact-envited" style="display:none">
                            <strong>Obrigado!</strong> Mensagem enviada com sucesso.
                        </div>
                        <p><b>ENTRE EM CONTATO:</b>
                            <select class="form-control" id="form-contact-type" onchange="javascript:activeTypeForm($(this).val())">
                                <option value="student">Aluno </option>
                                <option value="teacher">Professor</option>
                                <option value="patient">Paciente Modelo</option>
                            </select>
                        </p>

                        <form class="row contact-form-model" id="contact-student-form" target="@if(env("USE_SSL",false)) {{str_replace("http","https", route('send-contact-student') )}} @else {{route('send-contact-student')}} @endif">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Nome *" required name="name"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Email*" required name="email"> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                        placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn fl-btn btn-submit-contact" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>

                        <form class="row contact-form-model" id="contact-teacher-form" style="display:none" target="@if(env("USE_SSL",false)) {{str_replace("http","https", route('send-contact-teacher') )}} @else {{route('send-contact-teacher')}} @endif">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Nome *" required name="name"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Email*" required name="email"> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                        placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn fl-btn btn-submit-contact" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>

                        <form class="row contact-form-model" id="contact-patient-form" style="display:none" target="@if(env("USE_SSL",false)) {{str_replace("http","https", route('send-contact-patient') )}} @else {{route('send-contact-patient')}} @endif">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Nome *" required name="name"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control required" placeholder="Email*" required name="email"> </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" cols="30" rows="4" class="form-control"
                                        placeholder="Mensagem"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <button class="btn fl-btn btn-submit-contact" type="submit">Enviar</button>
                                </div>
                            </div>
                        </form>
                        <br /><br />
                    </div>
                </div>
            </div>

