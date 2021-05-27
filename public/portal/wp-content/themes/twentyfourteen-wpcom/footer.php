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

		<hr class="line-vr-section">
    <!-- Footer -->
    <footer id="colophon" class="footer-section" role="contentinfo">
    <div class="container">
            <div class="row">
                <div class="colunas-md-3">
                    <div class="brand"> <img src="<?php echo get_site_url();?>/wp-content/themes/twentyfourteen-wpcom/images/logocinza.png" class="logo" alt="">
                        <p><small>&copy; 2021 Patricia Sheffer.</small></p>
                    </div>
                </div>
                <div class="colunas-md-3">
                    <p><b>Contato</b>
                        <br><a href="#">Alunos</a>
                        <br><a href="#">Pacientes Modelos</a>
                        <br><a href="#">Endereço do Instituto</a>
                        </p>
                </div>
                <div class="colunas-md-3">
                    <p class="mb-0"><b>Redes Sociais</b></p>
                    <ul class="ovon-footer-social-link">
                        <li><a href="#"><i class="ti-facebook"></i></a></li>
                        <li><a href="#"><i class="ti-instagram"></i></a></li>
                        <li><a href="#"><i class="ti-pinterest"></i></a></li>
                    </ul>
                </div>
                <div class="colunas-md-3">
                    <div class="brand">
                        <p class="mb-0"><b>ABRAHOF</b></p>
                        <img src="<?php echo get_site_url();?>/wp-content/themes/twentyfourteen-wpcom/images/logo-abraof.png" class="logo" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>

	<?php wp_footer(); ?>
</body>
</html>
