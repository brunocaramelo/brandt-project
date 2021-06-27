<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

		</div><!-- #main -->
		</div><!-- #main -->

	<!-- hr class="line-vr-section" -->

    <!-- Footer -->
    <footer id="colophon" class="footer-section" role="contentinfo">

    <section class="newsletter-area">
        <form id ="newsletter_form" action="POST" target="<?php echo APPLICATION_URL_BASE;?>/api/v1/register-contacts">
            <div class="row">
                <div class="colunas-md-5">
                    <h6 style="color:white">GOSTARIA DE RECEBER NOSSA NEWSLETTER? INSCREVA-SE</h6>
                    <input type="name" class="form-control" name="name" id="contact_name"  placeholder="NOME COMPLETO *" >
                    <div class="alert alert-success message-newsletter-envited" style="display:none;margin-top:10px">
                        <strong>Obrigado!</strong> Inscrição realizada sucesso.
                    </div>
                    <div class="alert alert-danger message-newsletter-notenvited" style="display:none;margin-top:10px">
                        <strong>Erro!</strong> Favor corrigir os seguintes erros:
                        <div id="errors_on_newsletter_send"></div>
                    </div>

                </div>

                <div class="colunas-md-5">
                    <input type="email" class="form-control" name="email" id="contact_email"  placeholder="EMAIL *" style="margin-top:68px">
                </div>
                <div class="colunas-sm-1">
                    <div class="form-group">
                        <button class="btn fl-btn btn-submit-newsletter" style="background: black;margin: 65px 0 0 0; padding:7px 30px" type="submit">OK</button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <hr class="line-vr-section">


    <div class="container">
            <div class="row">
                <div class="colunas-md-3">
                    <div class="logo"> <img src="<?php echo get_site_url();?>/wp-content/themes/twentyfourteen-wpcom/images/logocinza.png" class="logo" alt="">
                        <p><small>&copy; 2021 Patrícia Brandt Schefer.</small></p>
                    </div>
                </div>
                <div class="colunas-md-3" style="display:none">
                    <p><b>Contato</b>
                        <br><a href="#">Alunos</a>
                        <br><a href="#">Pacientes Modelos</a>
                        <br><a href="#">Endereço do Instituto</a>
                        </p>
                </div>
                <div class="colunas-md-3">
                    <p class="mb-0"><b>Redes Sociais</b></p>
                    <ul class="ovon-footer-social-link">
                        <li><a href="https://www.facebook.com/drapatriciabrandtschefer"><i class="ti-facebook"></i></a></li>
                        <li><a href="https://www.instagram.com/patriciabschefer/"><i class="ti-instagram"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCIOei5WlqVtUrjWqbZ6jhPQ"><i class="ti-youtube"></i></a></li>
                        <li><a href="mailto:atendimento@patriciabs.com.br"><i class="ti-email"></i></a></li>
                    </ul>
                </div>
                <div class="colunas-md-3">
                    <div class="brand">
                        <p class="mb-0" style="padding-left:5px"><b>ABRAHOF</b></p>
                        <br />
                        <img src="<?php echo get_site_url();?>/wp-content/themes/twentyfourteen-wpcom/images/selo-abrahof.jpg" class="logo" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
       <?php wp_footer(); ?>
</body>
</html>
