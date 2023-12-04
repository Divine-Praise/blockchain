<?php /* Smarty version 3.1.27, created on 2023-10-10 07:28:55
         compiled from "/home/assetpin/public_html/tmpl/custom/privacy.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:11528356476524fd37bac3c8_03272786%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64900b3db96f42c9dd33bd6ed97fb652e717eb66' => 
    array (
      0 => '/home/assetpin/public_html/tmpl/custom/privacy.tpl',
      1 => 1696380923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11528356476524fd37bac3c8_03272786',
  'variables' => 
  array (
    'settings' => 0,
    'userinfo' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_6524fd37bef6f0_79124946',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_6524fd37bef6f0_79124946')) {
function content_6524fd37bef6f0_79124946 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_myescape')) require_once '/home/assetpin/public_html/inc/libs/smarty3/plugins/modifier.myescape.php';

$_smarty_tpl->properties['nocache_hash'] = '11528356476524fd37bac3c8_03272786';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    <?php echo '<script'; ?>
>
        document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")

    <?php echo '</script'; ?>
>
</head>


<body>
    <header class="header fixed-top smalex" id="header-main-menu">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                
                <a href="/" class="navbar-brand">

                                        <img src="styles/img/logo.png" alt="Template Rex" width="130px" >


                </a>
                
                <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#MainNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="MainNav">
                    <ul class="navbar-nav mr-auto mt-sms-3">
                        <li class="nav-item">
                            <a class="nav-link text-center" href="/">Homepage</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=aboutus">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=invest">Invest With Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=affiliate">Earn Passively</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="https://paxful.com">Buy Cryptocurrency</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=cust&amp;page=faq">Questions Guide</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  text-center" href="?a=support">Contact Us</a>
                        </li>
                    </ul>

                    <?php if ($_smarty_tpl->tpl_vars['userinfo']->value['logged'] != 1) {?>
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=login" class="login nav-btn">Access Your Account</a>
                        </li>
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=signup" class="register nav-btn">Register</a>
                        </li>
                    </ul>
                    <?php } else { ?>
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=account" class="register nav-btn">Dashboard</a>
                        </li>
                    </ul>
                    <?php }?>


                </div>
            </div>
        </nav>

    </header>
    <main>










        <section id="affiliate-banners" class="mt-2 mt-lg-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 d-flex flex-column mb-3">
                        <h2><b><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</b> Privacy Policy</h2>
                    </div>
                    <div class="col-lg-10 d-flex flex-column">

                        <p>This Privacy Policy of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 Inc. (“<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
,” “us,” “we,” and “our”) describes the information we collect about you when you access our website, enter into agreements with us, use our services and products, send us communications, or otherwise engage with us, and what we do with such information. Any references to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 in this Privacy Policy also refers to its wholly owned subsidiaries. This Privacy Policy covers all of our services and products and all methods by which you may access our website.
                        </p>
                        <p>By opening an account with us and utilizing our services, products, and website, you agree to the terms of our Privacy Policy. If you do not agree to the terms of our Privacy Policy, you cannot use our services or products and should not access our website.</p>
                        <p>We understand that privacy is an important issue to you and we respect the privacy of all of our customers and aim to protect the security and confidentiality of non-public personal information about you that we acquire.</p>
                        <p>Under the law you have the right to limit some, but not all, sharing of your personal information. The law also requires us to disclose to you how we collect, share and protect your personal information.</p>
                        <h6>Personal Information Collected</h6>
                        <p>
                            We collect information about you when you provide it to us and when you use our services and products, open an account with us, request information or otherwise interact with our website. The personal information we may collect includes:
                            <ul class="efe-privacy">
                                <li>your name, address, telephone and mobile phone numbers, date of birth, cryptocurrency wallet address(es);</li>
                                <li>information relating to your transactions, including details regarding cryptocurrency wallet addresses or related information for deposits or withdrawals;</li>
                                <li>information that may be received from consumer reporting agencies,</li>
                                <li>information in any emails, chat messages, phone conversations, or other communications you send to us;</li>
                                <li>information which may be received from other sources with your consent.</li>
                            </ul>
                        </p>
                        <p>Non-public information that is associated only with you and identifies you as an individual is called Personally Identifiable Information (“PII”). This Privacy Policy does not apply to anonymized data as it cannot be used to identify you.</p>

                        <h6>Other Information Collected</h6>
                        <p>We also collect other information that does not uniquely identify you as an individual. This information is referred to as “Non-Personally Identifiable Information (“Non-PII”). We collect Non-PII when you interact with us and use our services and products. Examples of Non-PII that we collect includes, information on the links that you click, the features of our website that you use, what types of information you upload, information about your hardware, including your computer, phone, tablet or other devices you use to access our website, and about your software, including your operating system, browser type, Internet protocol, your connection type and your settings and related information. We may share Non-PII with our advertising and marketing agents to evaluate the effectiveness of our marketing programs. We may use Non-PII to analyze your usage of our website and for other research that help us improve the services and products we offer.</p>

                        <h6>Information From Third Party Sources</h6>
                        <p>From time to time, we may obtain information about you from third party sources as required or permitted by applicable law, such as public databases, credit bureaus, ID verification partners, resellers and channel partners, joint marketing partners, and social media platforms.</p>
                        <p>We also receive information about you when you link a third-party service to our services. Such linkage may include interactions with our social media sites. Third-party sites are governed by their own privacy policies, and you should review those privacy policies before using those sites.</p>

                        <h6>Use of Your Personal Information</h6>
                        <p>We use your personal information in connection with our provision of services and products to you in order to meet our contractual obligations to you. We will also process your PII to meet our legitimate interests, for example to verify your background, open your account, send you notices regarding your money/cryptocurrency transfers to and from <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
, send confirmations and other information on your digital asset transactions, to create your account statements, to maintain records on your transactions and to support your account generally. We may use your personal information and information about how your use our services to send promotional and other information to you. We also may use your personal information to conduct analysis regarding your usage of our services and products and the effectiveness of our marketing initiatives.</p>
                        <p>We will not use your personal information for purposes other than those purposes we have disclosed to you, without your permission. From time to time we may request your permission to allow us to share your personal information with third parties. You may opt out of having your personal information shared with third parties, or from allowing us to use your personal information for any purpose that is incompatible with the purposes for which we originally collected it or subsequently obtained your authorization. If you choose to so limit the use of your personal information, certain features or <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 services may not be available to you.</p>

                        <h6>Sharing of Your Personal Information</h6>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 does not disclose nonpublic personal information relating to current or former customers to any third-parties, except to those who require access to the data in order to perform their tasks and duties, and to share with third parties who have a legitimate purpose for accessing it. This may include but is not limited to, any obligations of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 under the law of England, and in order to facilitate the execution of our customers’ cryptocurrency transactions in the ordinary course of business.</p>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 has multiple affiliates and relationships with third-party companies. Examples of these companies include financial and non‐financial companies that perform services such as data processing, administrative services, regulatory support, legal services, liquidity providers, banks, cloud storage, Google in connection with its Google Analytic services, companies that host our wallets, auditors, accountants, cryptocurrency exchange and custodians, cryptocurrency forensic analysis services and other service providers we engage from time to time that enable us to provide our services to you. We may share PII with such service providers. We may share information among our affiliates, as permitted by law, in order to better service your financial needs.</p>
                        <p>
                            We do not sell, license, lease or otherwise disclose your personal information to any third-party for any reason other than the purposes described below:
                            <ul class="efe-privacy">
                                <li>We may disclose personal information to qualified third-parties in order to administer or process a transaction, product or service you have authorized or requested, or in the context of facilitating the execution of a transaction.</li>
                                <li>We are required to validate our customers’ identities by applicable laws and regulatory requirements and rely on qualified third-party services to perform these validations. PII that you provide to us during the account opening process is passed to these services at account opening and on an ongoing basis thereafter.</li>
                                <li>We provide PII that you provide during the account opening process, as required by applicable laws and regulatory requirements, to carry out or aid in certain functions, such as, but not limited to, account processing, surveillance, reconciliation, execution, document retention requirements, and document dissemination.</li>
                                <li>We share your information with financial institutions with which we partner to process payments which you have authorized.</li>
                                <li>We may disclose or transfer information we collect to a purchaser of our business.</li>
                                <li>We may disclose or transfer information we collect upon account closing where you have a deficient balance, or upon excessive instances where you do not have sufficient funds in your account.</li>
                                <li>We may disclose personal information should you decide to participate in certain promotions and special offers when the nature of the promotion or special offer requires us to gather and share your personal information (such as your mailing address) with a third-party for delivery of goods or services. Should you choose to purchase a product or service offered by another company by way of a promotion or special offer, any personal information you share with that company would no longer be governed by our Privacy Policy.</li>
                                <li>We may disclose personal information to qualified third-parties and/or affiliate companies who provide services, such as, but not limited to, consulting, sales, customer support operations, payment processing, authentication services, and technical support or services.</li>
                                <li>We may share your information with law enforcement, and officials, or other third-parties when we are compelled to do so by a subpoena, court order, or similar legal procedure, or when we believe in good faith that the disclosure of personal information is necessary to prevent physical harm or financial loss, to report suspected illegal activity or to investigate violations of any of our terms and conditions or any other applicable policies.</li>
                                <li>We may disclose information to third-parties about your account or the transactions you make if you give us your written permission.</li>
                            </ul>
                        </p>
                        <p>If an affiliate company or qualified third-party needs access to certain personal or customer information in order to carry out certain functions on our behalf, they do so under our instructions. All affiliate companies and qualified third-parties with whom we share personal or other customer information have their own privacy policies, however, they are expected to protect your information in a manner that aligns with the protocols described in our Privacy Policy. We do not share your personal information with affiliates for their own benefit, unless you have given us your consent. We do not share your personal information with non-affiliates for their benefit.</p>
                        <p>Other circumstances under which we may disclose your personal information in order to:
                            <ul class="efe-privacy">
                                <li>Comply, as necessary, with applicable laws and regulatory requirements, as well as legal process;</li>
                                <li>Respond to mandatory legal or governmental requests or demands for information;</li>
                                <li>Meet national security requirements;</li>
                                <li>Enforce our agreements, policies, procedures and terms of use;</li>
                                <li>Protect ourselves, our affiliates, our customers or the general public from illegal activities; and</li>
                                <li>Respond to an emergency that requires disclosure of specified</li>
                            </ul>
                        </p>



                        <h6>Third-Party Websites</h6>
                        <p>We may have links to third-party websites on our website. Third-party websites have their own privacy policies. We have no involvement with their policies. You are encouraged to review the privacy policies of all third-party websites you visit.</p>

                        <h6>Use of Cookies</h6>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 uses cookies in order to provide better service, to facilitate our customers’ use of our website, to track usage of the website, to collect data and to address certain security issues. When you access our website, we send the cookies to your computer or phone. Your computer or phone stores the cookie in a file located inside your web browser. The cookies help <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 keep track of your visits to our website and your activity on our website and to understand how you interact with us.</p>
                        <p>We may link the information collected by cookies with other information we collect from you pursuant to this Privacy Policy and use the combined information as set forth herein. Similarly, the third parties who serve cookies on our site may link your name or email address to other information they collect, which may include past purchases made offline or online, or your online usage information.</p>

                        <table class="evc-privacy">
                            <tr>
                                <td>Name of Cookie/Identifier</td>
                                <td>What does the cookie generally do (e.g., website function and administration, analytics, marketing)?</td>
                                <td>Is it a 1st or 3rd party cookie and what is the name of the party providing it?</td>
                                <td>What type of cookie is it (persistent or session)?</td>
                                <td>What is the duration of the cookie on the website (if not cleared by the user)?</td>
                            </tr>
                            <tr>
                                <td><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
</td>
                                <td>User Session</td>
                                <td>1st</td>
                                <td>Persistent</td>
                                <td>1 day</td>
                            </tr>
                            <tr>
                                <td>Google Ads</td>
                                <td>Analytics, Caching, Ads</td>
                                <td>3rd – Google</td>
                                <td>Persistent</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>Google Analytics</td>
                                <td>Analytics</td>
                                <td>3rd – Google</td>
                                <td>Persistent</td>
                                <td>2 years</td>
                            </tr>
                            <tr>
                                <td>Drift</td>
                                <td>Analytics, Chat</td>
                                <td>3rd – Drift</td>
                                <td>Persistent</td>
                                <td>Forever</td>
                            </tr>
                            <tr>
                                <td>HotJar</td>
                                <td>Analytics</td>
                                <td>3rd – HotJar</td>
                                <td>Persistent</td>
                                <td>Forever</td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td>Analytics, Ads</td>
                                <td>3rd – Facebook</td>
                                <td>Persistent</td>
                                <td>90 days</td>
                            </tr>

                            <tr>
                                <td>LinkedIn</td>
                                <td>Analytics, Ads</td>
                                <td>3rd – LinkedIn</td>
                                <td>Persistent</td>
                                <td>90 days</td>
                            </tr>

                            <tr>
                                <td>Twitter</td>
                                <td>Analytics, Ads</td>
                                <td>3rd – Twitter</td>
                                <td>Persistent</td>
                                <td>90 days</td>
                            </tr>

                            <tr>
                                <td>Reddit</td>
                                <td>Analytics, Ads</td>
                                <td>3rd – Reddit</td>
                                <td>Persistent</td>
                                <td>90 days</td>
                            </tr>

                        </table>

                        <p>You can generally activate or later deactivate the use of cookies through a functionality built into your web browser. If you want to learn more about cookies, or how to control, disable or delete them, please visit https://www.aboutcookies.org for detailed guidance. In addition, certain third-party advertising networks, including Google, permit users to opt out of or customize preferences associated with your internet browsing.</p>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 also uses Google Analytics. The following link explains how Google uses data when you use its partners’ websites and applications: www.google.com/policies/privacy/partners/. Your use of <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
’s website is evidence of your consent to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 storing and accessing cookies and other information on your computer or phone and <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
’s use of Google Analytics in connection with such activities. Please read the information at the link provided so you understand what you are consenting to.</p>



                        <h6>Security</h6>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 strives to ensure that our systems are secure and that they meet industry standards. We seek to protect non-public personal information that is provided to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 by third-parties and by you by implementing physical and electronic safeguards. Where we believe appropriate, we employ firewalls, intrusion prevention, encryption technology, user authentication systems (i.e. passwords) and access control mechanisms to control access to systems and data. <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 endeavors to engage third-party service providers that have security and confidentiality policies, if such third-party service providers have access to our customer’s PII. We instruct our employees to use strict standards of care in handling the personal financial information of customers. As a general policy our staff will not discuss or disclose information regarding an account except with authorized personnel of our service providers or as required by applicable law and regulatory requirements law or pursuant to regulatory request and/or authority.</p>
                        <p>Despite our efforts to protect the security of your information, no security system is always effective and we cannot guarantee that our systems will be completely secure.</p>

                        <h6>How You Can Request to Access, Change, or Erase Your Information</h6>

                        <p>You are entitled to make requests regarding the processing and storage of your PII. Specifically, you may submit a request to us to take the following actions in relation to your personal information that we hold:
                            <ul class="efe-privacy">
                                <li>Opt-out. You may request that we stop sending you direct marketing communications which you have previously consented to receive. We may continue to send you service-related and other non-marketing communications.</li>
                                <li>Access. You may request we provide you with information about our processing of your personal information and give you access to your personal information.</li>
                                <li>Rectify. You may request we update or correct inaccuracies in your personal information.</li>
                                <li>Erase. You may request we erase your personal information.</li>
                                <li>Export. You may request we transfer a machine-readable copy of your personal information to you or a third party of your choice.</li>
                                <li>Restrict. You may request we restrict the processing of your personal information.</li>
                                <li>Object. You may object to our reliance on our legitimate interests as the basis of our processing of your personal information that impacts your rights.</li>
                            </ul>
                        </p>
                        <p>You may do this at any time by logging in to your account and clicking the Profile or My Account tab or by emailing info@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.com. Note that we may refuse to grant your requests in whole or in part as permitted by applicable law.</p>
                        <p>If you close your <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 account, we will mark your account in our database as “Closed,” but will keep your account information in our database for a period of time described below. This is necessary in order to deter fraud, by ensuring that persons who try to commit fraud will not be able to avoid detection simply by closing their account and opening a new account. However, if you close your account, your personal information will not be used by us for any further purposes, nor sold or shared with third parties, except as necessary to prevent fraud and assist law enforcement, as required by law, or in accordance with this Privacy Policy.</p>



                        <h6>Retention of Personal Information</h6>
                        <p>We are required under applicable laws and regulatory requirements to retain certain information, including personal information of customers, customer profiles, identification verification materials, information we used to satisfy our know-your-customer and anti-money laundering obligations, account information, account agreements, trade orders, trade confirmations and other agreements between us, account statements, and other records.</p>
                        <p>Such records are generally retained as required by law, rule or regulation or for the minimum amount of time necessary to accomplish the purpose for which it was collected, and thereafter no longer than is permitted under <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
’s data retention policies.</p>
                        <p>However, even after you deactivate your account, we can retain copies of information about you and any transactions or services in which you may have participated for a period of time that is consistent with applicable law, applicable statute of limitations or as we believe is reasonably necessary to comply with applicable law, regulation, legal process, or governmental request, to detect or prevent fraud, to collect fees owed, to resolve disputes, to address problems with our services, to assist with investigations, to enforce any of our terms and conditions or other applicable agreements or policies, or to take any other actions consistent with applicable law.</p>


                        <h6>“Do Not Track” Policy</h6>
                        <p>England law requires us to inform you how we respond to web browser Do Not Track (“DNT”) signals. Because no industry or legal standard exists for recognizing or honoring DNT signals, we do not respond to them at this time. This policy is subject to change as the privacy community and industry develop best practices for responding to DNT signals.</p>
                        <p>AN ENGLAND RESIDENT WHO HAS PROVIDED PERSONAL DATA TO A BUSINESS WITH WHOM HE/SHE HAS ESTABLISHED A BUSINESS RELATIONSHIP FOR PERSONAL, FAMILY, OR HOUSEHOLD PURPOSES (A “CALIFORNIA CUSTOMER”) MAY REQUEST INFORMATION ABOUT WHETHER THE BUSINESS HAS DISCLOSED PERSONAL INFORMATION TO ANY THIRD PARTIES FOR THE THIRD PARTIES’ DIRECT MARKETING PURPOSES. IN GENERAL, IF THE BUSINESS HAS MADE SUCH A DISCLOSURE OF PERSONAL DATA, UPON RECEIPT OF A REQUEST BY AN ENGLISH CUSTOMER, THE BUSINESS IS REQUIRED TO PROVIDE A LIST OF ALL THIRD PARTIES TO WHOM PERSONAL DATA WAS DISCLOSED IN THE PRECEDING CALENDAR YEAR, AS WELL AS A LIST OF THE CATEGORIES OF PERSONAL DATA THAT WERE DISCLOSED. CALIFORNIA CUSTOMERS MAY REQUEST FURTHER INFORMATION ABOUT OUR COMPLIANCE WITH THIS LAW BY E-MAILING PRIVACY@<?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
.com. PLEASE NOTE THAT WE ARE REQUIRED TO RESPOND TO ONE REQUEST PER CALIFORNIA CUSTOMER EACH YEAR AND WE ARE NOT REQUIRED TO RESPOND TO REQUESTS MADE BY MEANS OTHER THAN THROUGH THIS E-MAIL ADDRESS.</p>

                        <h6>When Do We Store, Transfer or Process PII Internationally?</h6>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 has committed to meeting the requirements of local data protection laws, including EU law, to the extent required. Please be aware that your PII will be transferred to, processed, and stored in our data servers located within the United Kingdom. You consent to the transfer of your information, including PII,. as set forth in this Privacy Policy by visiting our site or using our service.
                        </p>

                        <h6>Changes to <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
’s Privacy Policy</h6>
                        <p><?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 reserves the right to make changes to this Privacy Policy. You should review our Privacy Policy frequently. Our Privacy Policy is available on our website. If we make material changes to our Privacy Policy, our revised Privacy Policy will be posted on our website and it will either be noted on our website that material changes have been made or we will notify our customers by email. The date of the most recent update to our Privacy Policy will be set forth at the end of the Privacy Policy.</p>


                        <h6>How to Get in Touch with <?php echo smarty_modifier_myescape($_smarty_tpl->tpl_vars['settings']->value['site_name']);?>
 about this Privacy Policy</h6>
                        <p>This Privacy Policy is available on our website at www.fortetradelimited.com. If you have questions or concerns regarding this Privacy Policy, or if you have a complaint, you should first contact us either by emailing us at contact@fortetradelimited.com</p>
                        <p>If you would like to submit a complaint about our use of your PII or response to your requests regarding your PII, you may contact us at contact@fortetradelimited.com or submit a complaint to the data protection regulator in your jurisdiction. You can find your data protection regulator here.</p>










                    </div>
                </div>
            </div>
        </section>


    </main>


    <?php echo $_smarty_tpl->getSubTemplate ("footera.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>