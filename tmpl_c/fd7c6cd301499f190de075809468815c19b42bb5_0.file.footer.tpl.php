<?php /* Smarty version 3.1.27, created on 2023-10-04 01:22:27
         compiled from "/home/assetpin/public_html/tmpl/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:907287733651cbe53022223_01101095%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fd7c6cd301499f190de075809468815c19b42bb5' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/footer.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '907287733651cbe53022223_01101095',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_651cbe53035d75_61629265',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_651cbe53035d75_61629265')) {
function content_651cbe53035d75_61629265 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '907287733651cbe53022223_01101095';
?>
  </div>

  </div>
  </div>
  </div>



  </div>
  </div>
  </div>
  </section>
  </main>




  
  <?php echo '<script'; ?>
 src="styles/js/jquery-3.4.1.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/js/owl.carousel.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/js/tilt.jquery.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="styles/js/clipboard.min.js"><?php echo '</script'; ?>
>

  <?php echo '<script'; ?>
>
      $(window).scroll(function() {
          var scroll = $(window).scrollTop();
          if (scroll >= 50) {
              $("#header-main-menu").addClass("darkHeader");
          } else {
              $("#header-main-menu").removeClass("darkHeader");
          }
      });

  <?php echo '</script'; ?>
>
  

  </body>

  </html>
<?php }
}
?>