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
                        <p>Quisque facilisis libero maximus non.
                            <br />Lolutpat venenatis lacus sed hendrerit nisi.</p>
                        {{-- <div class="item">
                            <p><b>Phone</b> : +1 650-444-0000</p>
                        </div>
                        <div class="item">
                            <p><b>Fax</b> : +1 650-444-0011</p>
                        </div>
                        <div class="item">
                            <p><b>Address</b> : 525 West Ave, CT 06850 Norwalk</p>
                        </div> --}}
                        <div class="item">
                            <p><b>Email</b> : atendimento@patriciabs.com.br</p>
                        </div>
                        <div class="item">
                            <p><b>Atendimento</b> : Seg-Sex: 08.00 - 19.00, Domingo: Fechado</p>
                        </div>
                    </div>
                    <div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
                        <div class="alert alert-success message-contact-envited" style="display:none">
                            <strong>Obrigado!</strong> Mensagem enviada com sucesso.
                        </div>
                        <p><b>GET IN TOUCH</b></p>
                        <form class="row" id="contact-default-form">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nome *" required name="name"> </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Email" name="email"> </div>
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
                    </div>
                </div>
            </div>
        </section>
<script type="text/javascript">
    var contactFormTargetEndpoint = "{{ route('send-contact-default') }}";
</script>
