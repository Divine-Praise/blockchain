<?php /* Smarty version 3.1.27, created on 2023-10-10 03:01:50
         compiled from "/home/assetpin/public_html/tmpl/account_main.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18677721936524be9e6cb3e3_68412223%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9ff5c3d1c9686fe1bc6317cb24f657da26563000' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/account_main.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18677721936524be9e6cb3e3_68412223',
  'variables' => 
  array (
    'tfa_enabled' => 0,
    'userinfo' => 0,
    'currency_sign' => 0,
    'ab_formated' => 0,
    'last_deposit' => 0,
    'last_withdrawal' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6524be9e7087b2_50117752',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6524be9e7087b2_50117752')) {
function content_6524be9e7087b2_50117752 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '18677721936524be9e6cb3e3_68412223';
echo $_smarty_tpl->getSubTemplate ("logomain.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<main>

<section id="dashboard" class="btc-background">
	<div class="container full-height ">




<div class="row phone-nodisplay mb-4">
	
	
    <div class="col-lg-12 col-xl-8 d-flex align-items-stretch flex-column">
		 
		   <?php if ($_smarty_tpl->tpl_vars['tfa_enabled']->value) {?>
		   <div class="status-box errors p-3 mb-4" style="background:#F98998;">
				<p><i class="fas fa-bell"></i>Security Note: Please activate <a href="?a=security" style="font-size:.75rem;color:#374A5F;text-decoration:underline;font-weight:500;">Two Factor Authentication</a> to keep your account safe.</p>
		   </div>
		   <?php } else { ?>
		  
		   <?php }?>
		        <div class="wbox depboxHome d-flex flex-column">
            
			<div class="d-flex align-items-center title p-3 pr-4 pl-4">
				<i class="icon icon-organize "></i>
				<h6 class="m-0 ml-3">New Investment</h6>
				
			</div>
				
			<div class="p-4 d-flex flex-column justify-content-center flex-fill">
			
				<div class="depInput d-flex align-items-center mb-4">
					<div class="d-flex align-items-center pl-3 pr-3 p-2 pl-md-4 pr-md-4 plaN">
						<h4 class="m-0">2%</h4>
						<span>Daily<br>Interest</span>
					</div>
					
					<input type="number" value="100" id="inputsmoney" autocomplete="off" required="" style="min-width:100px;" onfocus="calcthis();" oninput="calcthis();" onblur="calcthis();">
					
					<div class="d-flex align-items-center currsym pl-2 pr-4">
									<svg width="16" height="16" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486">
                                <path d="M243,0C108.8,0,0,108.8,0,243s108.8,243,243,243s243-108.8,243-243S377.2,0,243,0z M312.8,338.8 c-10.6,12.9-24.4,21.6-40.5,26c-7,1.9-10.2,5.6-9.8,12.9c0.3,7.2,0,14.3-0.1,21.5c0,6.4-3.3,9.8-9.6,10
									c-4.1,0.1-8.2,0.2-12.3,0.2c-3.6,0-7.2,0-10.8-0.1c-6.8-0.1-10-4-10-10.6c-0.1-5.2-0.1-10.5-0.1-15.7c-0.1-11.6-0.5-12-11.6-13.8
									c-14.2-2.3-28.2-5.5-41.2-11.8c-10.2-5-11.3-7.5-8.4-18.3c2.2-8,4.4-16,6.9-23.9c1.8-5.8,3.5-8.4,6.6-8.4c1.8,0,4.1,0.9,7.2,2.5
									c14.4,7.5,29.7,11.7,45.8,13.7c2.7,0.3,5.4,0.5,8.1,0.5c7.5,0,14.8-1.4,21.9-4.5c17.9-7.8,20.7-28.5,5.6-40.9
									c-5.1-4.2-11-7.3-17.1-10c-15.7-6.9-32-12.1-46.8-21c-24-14.4-39.2-34.1-37.4-63.3c2-33,20.7-53.6,51-64.6
									c12.5-4.5,12.6-4.4,12.6-17.4c0-4.4-0.1-8.8,0.1-13.3c0.3-9.8,1.9-11.5,11.7-11.8c1.1,0,2.3,0,3.4,0c1.9,0,3.8,0,5.7,0
									c0.8,0,1.6,0,2.3,0c18.6,0,18.6,0.8,18.7,20.9c0.1,14.8,0.1,14.8,14.8,17.1c11.3,1.8,22,5.1,32.4,9.7c5.7,2.5,7.9,6.5,6.1,12.6
									c-2.6,9-5.1,18.1-7.9,27c-1.8,5.4-3.5,7.9-6.7,7.9c-1.8,0-4-0.7-6.8-2.1c-14.4-7-29.5-10.4-45.3-10.4c-2,0-4.1,0.1-6.1,0.2
									c-4.7,0.3-9.3,0.9-13.7,2.8c-15.6,6.8-18.1,24-4.8,34.6c6.7,5.4,14.4,9.2,22.3,12.5c13.8,5.7,27.6,11.2,40.7,18.4
									C330.9,250.9,342.1,303.2,312.8,338.8z" fill="#F8AC4A" />
                                   </svg> 
						<p class="m-0 ml-2">USD</p>
					</div>
					
					<a href="?a=deposit" class="d-flex align-items-center deposit-btn">
						<span class="d-flex all-center">Deposit</span>
						<i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
					</a>
				</div>
                <div class="depInput d-flex align-items-center mb-4">
					<div class="d-flex align-items-center pl-3 pr-3 p-2 pl-md-4 pr-md-4 plaN">
						<h4 class="m-0">3%</h4>
						<span>Daily<br>Interest</span>
					</div>
					
					<input type="number" value="10000" id="inputsmoney" autocomplete="off" required="" style="min-width:100px;" onfocus="calcthis();" oninput="calcthis();" onblur="calcthis();">
					
					<div class="d-flex align-items-center currsym pl-2 pr-4">
									<svg width="16" height="16" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486">
                                <path d="M243,0C108.8,0,0,108.8,0,243s108.8,243,243,243s243-108.8,243-243S377.2,0,243,0z M312.8,338.8 c-10.6,12.9-24.4,21.6-40.5,26c-7,1.9-10.2,5.6-9.8,12.9c0.3,7.2,0,14.3-0.1,21.5c0,6.4-3.3,9.8-9.6,10
									c-4.1,0.1-8.2,0.2-12.3,0.2c-3.6,0-7.2,0-10.8-0.1c-6.8-0.1-10-4-10-10.6c-0.1-5.2-0.1-10.5-0.1-15.7c-0.1-11.6-0.5-12-11.6-13.8
									c-14.2-2.3-28.2-5.5-41.2-11.8c-10.2-5-11.3-7.5-8.4-18.3c2.2-8,4.4-16,6.9-23.9c1.8-5.8,3.5-8.4,6.6-8.4c1.8,0,4.1,0.9,7.2,2.5
									c14.4,7.5,29.7,11.7,45.8,13.7c2.7,0.3,5.4,0.5,8.1,0.5c7.5,0,14.8-1.4,21.9-4.5c17.9-7.8,20.7-28.5,5.6-40.9
									c-5.1-4.2-11-7.3-17.1-10c-15.7-6.9-32-12.1-46.8-21c-24-14.4-39.2-34.1-37.4-63.3c2-33,20.7-53.6,51-64.6
									c12.5-4.5,12.6-4.4,12.6-17.4c0-4.4-0.1-8.8,0.1-13.3c0.3-9.8,1.9-11.5,11.7-11.8c1.1,0,2.3,0,3.4,0c1.9,0,3.8,0,5.7,0
									c0.8,0,1.6,0,2.3,0c18.6,0,18.6,0.8,18.7,20.9c0.1,14.8,0.1,14.8,14.8,17.1c11.3,1.8,22,5.1,32.4,9.7c5.7,2.5,7.9,6.5,6.1,12.6
									c-2.6,9-5.1,18.1-7.9,27c-1.8,5.4-3.5,7.9-6.7,7.9c-1.8,0-4-0.7-6.8-2.1c-14.4-7-29.5-10.4-45.3-10.4c-2,0-4.1,0.1-6.1,0.2
									c-4.7,0.3-9.3,0.9-13.7,2.8c-15.6,6.8-18.1,24-4.8,34.6c6.7,5.4,14.4,9.2,22.3,12.5c13.8,5.7,27.6,11.2,40.7,18.4
									C330.9,250.9,342.1,303.2,312.8,338.8z" fill="#F8AC4A" />
                                   </svg> 
						<p class="m-0 ml-2">USD</p>
					</div>
					
					<a href="?a=deposit" class="d-flex align-items-center deposit-btn">
						<span class="d-flex all-center">Deposit</span>
						<i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
					</a>
				</div>
				
				
				
			</div>
			
		
        </div>
    </div>
	<div class="col-lg-5 col-xl-4 mt-4 mt-xl-0 d-flex flex-column align-items-stretch member-info">
        <div class="ybox d-flex flex-column" style="flex:1;">
            <h6 class="d-flex align-items-center username p-3 pr-4 pl-4">
				<i class="icon icon-user mr-2"></i>
				<span style="flex:1;"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['name']);?>
</span>
				<a href="?a=edit_account"><i class="fas fa-cog"></i></a>
			</h6>
			
			<div class="d-flex flex-column align-items-stretch justify-content-center flex-fill">
				<div class="m-3 mr-4 ml-4 accBalance d-flex align-items-center p-2 pt-3 pb-3">
								<div class="svg d-flex all-center p-3">
									<svg width="24" height="24" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486 486">
                                <path d="M243,0C108.8,0,0,108.8,0,243s108.8,243,243,243s243-108.8,243-243S377.2,0,243,0z M312.8,338.8 c-10.6,12.9-24.4,21.6-40.5,26c-7,1.9-10.2,5.6-9.8,12.9c0.3,7.2,0,14.3-0.1,21.5c0,6.4-3.3,9.8-9.6,10
									c-4.1,0.1-8.2,0.2-12.3,0.2c-3.6,0-7.2,0-10.8-0.1c-6.8-0.1-10-4-10-10.6c-0.1-5.2-0.1-10.5-0.1-15.7c-0.1-11.6-0.5-12-11.6-13.8
									c-14.2-2.3-28.2-5.5-41.2-11.8c-10.2-5-11.3-7.5-8.4-18.3c2.2-8,4.4-16,6.9-23.9c1.8-5.8,3.5-8.4,6.6-8.4c1.8,0,4.1,0.9,7.2,2.5
									c14.4,7.5,29.7,11.7,45.8,13.7c2.7,0.3,5.4,0.5,8.1,0.5c7.5,0,14.8-1.4,21.9-4.5c17.9-7.8,20.7-28.5,5.6-40.9
									c-5.1-4.2-11-7.3-17.1-10c-15.7-6.9-32-12.1-46.8-21c-24-14.4-39.2-34.1-37.4-63.3c2-33,20.7-53.6,51-64.6
									c12.5-4.5,12.6-4.4,12.6-17.4c0-4.4-0.1-8.8,0.1-13.3c0.3-9.8,1.9-11.5,11.7-11.8c1.1,0,2.3,0,3.4,0c1.9,0,3.8,0,5.7,0
									c0.8,0,1.6,0,2.3,0c18.6,0,18.6,0.8,18.7,20.9c0.1,14.8,0.1,14.8,14.8,17.1c11.3,1.8,22,5.1,32.4,9.7c5.7,2.5,7.9,6.5,6.1,12.6
									c-2.6,9-5.1,18.1-7.9,27c-1.8,5.4-3.5,7.9-6.7,7.9c-1.8,0-4-0.7-6.8-2.1c-14.4-7-29.5-10.4-45.3-10.4c-2,0-4.1,0.1-6.1,0.2
									c-4.7,0.3-9.3,0.9-13.7,2.8c-15.6,6.8-18.1,24-4.8,34.6c6.7,5.4,14.4,9.2,22.3,12.5c13.8,5.7,27.6,11.2,40.7,18.4
									C330.9,250.9,342.1,303.2,312.8,338.8z" fill="#F8AC4A" />
                                    </svg>
								</div>
								<div class="d-flex flex-column">
									<p class="m-0 p-0 pBalance">Account Balance</p>
									<h4 class="m-0 p-0 mBalance"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['total']);?>
 <small> USD</small></h4>
								</div>
				</div>
			
				<div class="row m-0 mr-4 ml-4 mb-4 earningSmall">
					<div class="col-6 p-0">
						<span>Total Earnings</span>
						<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['earning']);?>
 <span> USD</span></p>
					</div>
					<div class="col-6 p-0">
						<span>Active Deposit</span>
						<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
 <span> USD</span></p>
					</div>
					<div class="col-12 mt-4 p-0">
						<a href="?a=withdraw" class="d-flex align-items-center withdraw-btn">
							<span class="d-flex all-center">Withdraw</span>
							<i class="fas fa-long-arrow-alt-right d-flex all-center"></i>
						</a>
					</div>
				</div>
				
			</div>
			
			<div class="pt-3 pr-4 pl-4 pb-3  d-flex flex-column dataAccount mt-auto">
				<div class="d-flex align-items-center p-0 pb-1">
					<i class="icon icon-rr-1-1"></i>
					<span>E-mail</span>
					<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['email']);?>
</p>
				</div>
				<div class="d-flex align-items-center p-0">
					<i class="icon icon-sidebar"></i>
					<span>Registration Date</span>
					<p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['create_account_date']);?>
</p>
				</div>
			</div>
           
        </div>
		
    </div>

	<div class="col-lg-7 col-xl-12 mt-4">
        <div class="wbox p-4">
			<div class="row mainAccStatus">
				
							<div class="col-md-6 balance-boxes rightBorder mb-4 pb-4 mb-md-0 pb-md-0">
								<div class="d-flex align-items-center title mb-4">
									<h5 class="m-0">Investment Status</h5>
									<span>Total <br>Deposit</span>
								</div>
								
								<div class="d-flex align-items-center number p-2 pr-3" style="background:#E9F2EC;">
									<i class="icon icon-transform head-icon m-0" style="background:#fff;"></i>
									<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['deposit']);?>
</b>
									<p class="m-0">USD</p>
								</div>
								<div class="d-flex mt-4">
									<div class="row flex-fill">
										<div class="col-xl-6 mt-1 mb-1 mt-xl-0 mb-xl-0 flex-grow-1 statusNum d-flex align-items-center">
											<p class="m-0">Active<br>Deposit</p>
											<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['active_deposit']);?>
</b>
											<span>USD</span>
										</div>
										<div class="col-xl-6 mt-1 mb-1 mt-xl-0 mb-xl-0  d-flex align-items-center statusNum">
											<p class="m-0">Last<br>Deposit</p>
											<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_deposit']->value)===null||$tmp==='' ? "0.00" : $tmp));?>
</b>
											<span>USD</span>
										</div>
									</div>
								</div>
							</div>
							
							<div class="col-md-6 balance-boxes">
								<div class="d-flex align-items-center title mb-4">
									<h5 class="m-0">Withdrawal Status</h5>
									<span>Total <br>Withdrawals</span>
								</div>
								
								<div class="d-flex align-items-center number p-2 pr-3">
									<i class="icon icon-chart2 head-icon m-0" style="background:#fff;"></i>
									<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdrawal']);?>
</b>
									<p class="m-0">USD</p>
								</div>
								<div class="d-flex mt-4">
									<div class="row flex-fill">
										<div class="col-xl-6 mt-1 mb-1 mt-xl-0 mb-xl-0  flex-grow-1 statusNum d-flex align-items-center">
											<p class="m-0">Last<br>Withdrawal</p>
											<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape((($tmp = @$_smarty_tpl->tpl_vars['last_withdrawal']->value)===null||$tmp==='' ? "0.00" : $tmp));?>
</b>
											<span>USD</span>
										</div>
										<div class="col-xl-6 mt-1 mb-1 mt-xl-0 mb-xl-0  d-flex align-items-center statusNum">
											<p class="m-0">Pending <br>Withdrawal</p>
											<b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['currency_sign']->value);
echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['ab_formated']->value['withdraw_pending']);?>
</b>
											<span>USD</span>
										</div>
									</div>
								</div>
							</div>
							
			</div>
		</div>
	</div>
</div>

<div class="row mb-4">
	<div class="col-12">
        <div class="wbox p-4 d-flex">
			<div class="row flex-fill">
			
			
				<div class="col-12 col-md-6 col-xl-4 d-flex">
					<div>
						<svg id="Layer_35" viewBox="0 0 64 64" height="40" width="40" xmlns="http://www.w3.org/2000/svg"><path d="m25.649 48.937-2.623 2.624c-.662.66-1.026 1.539-1.026 2.474v6.965h-4.351c.218-.456.351-.961.351-1.5 0-1.93-1.57-3.5-3.5-3.5h-8.5v2h8.5c.827 0 1.5.673 1.5 1.5s-.673 1.5-1.5 1.5h-3.5-6.5c-.827 0-1.5-.673-1.5-1.5v-3.5c0-4.963 4.038-9 9-9h3.488c3.149 0 6.199-.924 8.82-2.671l2.246-1.497-1.109-1.664-2.246 1.497c-.54.36-1.102.676-1.68.955.929-1.307 1.481-2.899 1.481-4.62 0-4.411-3.589-8-8-8s-8 3.589-8 8c0 2.498 1.152 4.73 2.951 6.199-5.088.963-8.951 5.436-8.951 10.801v3.5c0 1.93 1.57 3.5 3.5 3.5h6.5 3.5 9.5v-8.965c0-.4.156-.777.439-1.061l2.624-2.624zm-16.649-9.937c0-3.309 2.691-6 6-6s6 2.691 6 6-2.691 6-6 6-6-2.691-6-6z" fill="#353448"></path><path d="m58 27h-28c-2.757 0-5 2.243-5 5v16c0 2.757 2.243 5 5 5h9l1-5h8l1 5h9c2.757 0 5-2.243 5-5v-16c0-2.757-2.243-5-5-5z" fill="#f0bc5e"></path>
						<g fill="#353448"><path d="m54 5h-18c0-2.206-1.794-4-4-4h-18c-2.206 0-4 1.794-4 4v12c0 2.206 1.794 4 4 4h5.734l8.266 4.723v-4.723h4c0 2.206 1.794 4 4 4h3v4.723l8.266-4.723h6.734c2.206 0 4-1.794 4-4v-12c0-2.206-1.794-4-4-4zm-28 14v3.277l-5.734-3.277h-3.96c.89-2.373 3.154-4 5.777-4h1.835c2.622 0 4.887 1.627 5.777 4zm-3-6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm9-4v10h-.202c-.724-2.635-2.692-4.682-5.198-5.547.863-.898 1.4-2.112 1.4-3.453 0-2.757-2.243-5-5-5s-5 2.243-5 5c0 1.341.537 2.555 1.4 3.453-2.507.865-4.474 2.911-5.198 5.547h-.202c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h18c1.103 0 2 .897 2 2v.556c-1.19.694-2 1.97-2 3.444zm14.734 14-5.734 3.277v-3.277h-2.694c.89-2.373 3.154-4 5.777-4h1.835c2.622 0 4.887 1.627 5.777 4zm-1.734-6c-1.654 0-3-1.346-3-3s1.346-3 3-3 3 1.346 3 3-1.346 3-3 3zm11 4c0 1.103-.897 2-2 2h-.202c-.724-2.635-2.692-4.682-5.198-5.547.863-.898 1.4-2.112 1.4-3.453 0-2.757-2.243-5-5-5s-5 2.243-5 5c0 1.341.537 2.555 1.4 3.453-2.507.865-4.474 2.911-5.198 5.547h-.202c-1.103 0-2-.897-2-2v-12c0-1.103.897-2 2-2h18c1.103 0 2 .897 2 2z"></path><path d="m55 57h-4.18l-2-10h-9.64l-2 10h-4.18c-2.757 0-5 2.243-5 5v1h32v-1c0-2.757-2.243-5-5-5zm-14.18-8h6.36l1.6 8h-9.56zm-10.649 12c.413-1.164 1.525-2 2.829-2h22c1.304 0 2.416.836 2.829 2z"></path><path d="m57 31h2v2h-2z"></path><path d="m57 35h2v2h-2z"></path><path d="m57 39h2v2h-2z"></path></g></svg>
					</div>
					<div class="d-flex flex-column pl-4">
						<h6 class="mb-2">Regular: 10% Commission</h6>
						<p class="mb-2" style="font-size:12px;">
							Refer us to your friends to earn more income as they make investments. 
						</p>
						<a target="blank" href="?a=cust&page=affiliate" style="font-size:13px;">Affiliate <i class="fas fa-long-arrow-alt-right"></i></a>
					</div>
				</div>
				
				
				
				
				
				<div class="col-12 col-lg-12 col-xl-4 mt-4 mt-xl-0 d-flex flex-column">
					<div class="d-flex flex-fill align-items-center withdraw-btn" style="border-radius:5px;border:1px solid #E7E7EF;">
							<input class="d-flex all-center" style="flex:1;background:none;border:0;outline:0;text-align:center;font-size:12px;border-right:1px solid #E7E7EF;" readonly="readonly" value="<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
" id="reflink">
							<button class="icon icon-todo d-flex all-center btn" data-clipboard-action="copy" data-clipboard-target="#reflink" style="background:#fff;margin:0;border:0;outline:0;width:36px;height:36px;font-size:14px;" data-original-title="" title=""></button>
					</div>
					
				</div>
				
				
			</div>
		</div>
	</div>
</div>



</div>
</div>
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
>$(window).scroll(function() {        var scroll = $(window).scrollTop();    if (scroll >= 50) {        $("#header-main-menu").addClass("darkHeader");    } else {        $("#header-main-menu").removeClass("darkHeader");    }});<?php echo '</script'; ?>
>


</body></html>








<!-- Modal -->
<div class="modal fade" id="bannersModal" tabindex="-1" role="dialog" aria-labelledby="bannersModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="bannersModalTitle"><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Banners</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row m-0">
			<div class="col-12 d-flex flex-column p-0">
				
				<div class="banner-list d-flex flex-column">
                    <label class="fl1">970x90.gif</label>
                    <label class="fl1"><img src="styles/banners/970x90.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/970x90.gif&#34; /&#62;&#60;/a&#62;"></label>
				</div>


				<div class="banner-list d-flex flex-column">
                    <label class="fl1">728x90.gif</label>
                    <label class="fl1"><img src="styles/banners/728x90.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/728x90.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">468x60.gif</label>
					<label class="fl1"><img src="styles/banners/468x60.gif"></label>
					<label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/468x60.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
					<label class="fl1">320x100.gif</label>
					<label class="fl1"><img src="styles/banners/320x100.gif"></label>
					<label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/320x100.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">                
                    <label class="fl1">320x50.gif</label>
                    <label class="fl1"><img src="styles/banners/320x50.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/320x50.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">234x60.gif</label>
                    <label class="fl1"><img src="styles/banners/234x60.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/234x60.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">250x250.gif</label>
                    <label class="fl1"><img src="styles/banners/250x250.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/250x250.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">200x200.gif</label>
                    <label class="fl1"><img src="styles/banners/200x200.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/200x200.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">125x125.gif</label>
                    <label class="fl1"><img src="styles/banners/125x125.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/125x125.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">336x280.gif</label>
                    <label class="fl1"><img src="styles/banners/336x280.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/336x280.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>


				<div class="banner-list d-flex flex-column">
                    <label class="fl1">300x250.gif</label>
                    <label class="fl1"><img src="styles/banners/300x250.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/300x250.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">180x150.gif</label>
                    <label class="fl1"><img src="styles/banners/180x150.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/180x150.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>


				<div class="banner-list d-flex flex-column">
                    <label class="fl1">300x600.gif</label>
                    <label class="fl1"><img src="styles/banners/300x600.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/300x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>


				<div class="banner-list d-flex flex-column">
                    <label class="fl1">160x600.gif</label>
                    <label class="fl1"><img src="styles/banners/160x600.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/160x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

				<div class="banner-list d-flex flex-column">
                    <label class="fl1">120x600.gif</label>
                    <label class="fl1"><img src="styles/banners/120x600.gif"></label>
                    <label class="fl1"><input readonly value="&#60;a href=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/?ref=<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['userinfo']->value['username']);?>
&#34; target=&#34;_blank&#34;&#62;&#60;img src=&#34;<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_url']);?>
/styles/banners/120x600.gif&#34; /&#62;&#60;/a&#62;"></label>
                </div>

	  
			</div>
		</div>
      </div>
    </div>
  </div>
</div>


                 
 <?php echo '<script'; ?>
>

$('button').tooltip({
  trigger: 'click',
  placement: 'bottom'
});

function setTooltip(btn, message) {
  $(btn).tooltip('hide')
    .attr('data-original-title', message)
    .tooltip('show');
}

function hideTooltip(btn) {
  setTimeout(function() {
    $(btn).tooltip('hide');
  }, 1000);
}

// Clipboard

var clipboard = new Clipboard('button');

clipboard.on('success', function(e) {
  setTooltip(e.trigger, 'Copied!');
  hideTooltip(e.trigger);
});

clipboard.on('error', function(e) {
  setTooltip(e.trigger, 'Failed!');
  hideTooltip(e.trigger);
});
 <?php echo '</script'; ?>
>


          


<?php echo '<script'; ?>
 type="text/javascript">


function calcthis()
{
	var depo = document.getElementById("inputsmoney").value;

	if (depo < 0.001) {
		document.getElementById("inpvar1").innerHTML =  '0.00';
		document.getElementById("inpvar2").innerHTML =  '0.00';
		document.getElementById("inpvar3").innerHTML =  '0.00';
		document.getElementById("inpvar4").innerHTML =  '0.00';
	}
	else if (depo > 1000000) {
		document.getElementById("inpvar1").innerHTML =  '--';
		document.getElementById("inpvar2").innerHTML =  '--';
		document.getElementById("inpvar3").innerHTML =  '--';
		document.getElementById("inpvar4").innerHTML =  '--';
	}
	else {
		 var n1 = depo / 100 * 0.15;
         var m1 = n1.toFixed(2);
         var n2 = depo / 100 * 3.6;
         var m2 = n2.toFixed(2);
         var n3 = depo / 100 * 3.6 * 7;
         var m3 = n3.toFixed(2);
         var n4 = depo / 100 * 3.6 * 30;
         var m4 = n4.toFixed(2);
		 document.getElementById("inpvar1").innerHTML = m1 + " <small>USD</small>";
         document.getElementById("inpvar2").innerHTML = m2 + " <small>USD</small>";
         document.getElementById("inpvar3").innerHTML = m3 + " <small>USD</small>";
         document.getElementById("inpvar4").innerHTML = m4 + " <small>USD</small>";
	}
};


<?php echo '</script'; ?>
>
<?php }
}
?>