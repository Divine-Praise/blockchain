<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{$settings.site_name}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon" />
    <link rel="stylesheet" href="styles/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/css/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="styles/css/animate.css">
    <script>
        document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")

    </script>
</head>


<body>
    <header class="header fixed-top smalex" id="header-main-menu">
        <nav class="navbar navbar-expand-lg navbar-light main-nav">
            <div class="container-fluid">
                {literal}
                <a href="/" class="navbar-brand">

                                        <img src="styles/img/logo.png" alt="Template Rex" width="130px" >


                </a>
                {/literal}
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

                    {if $userinfo.logged != 1}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=login" class="login nav-btn">Access Your Account</a>
                        </li>
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=signup" class="register nav-btn">Register</a>
                        </li>
                    </ul>
                    {else}
                    <ul class="navbar-nav navbar-nav--right ml-auto d-flex">
                        <li class="nav-item right-navi d-flex">
                            <a href="?a=account" class="register nav-btn">Dashboard</a>
                        </li>
                    </ul>
                    {/if}


                </div>
            </div>
        </nav>

    </header>
    <main>




        <section id="affiliate-banners" class="mt-2 mt-lg-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 d-flex flex-column mb-5">
                        <h2><b>{$settings.site_name}</b> Terms & Conditions</h2>
                    </div>
                    <div class="col-lg-10 d-flex flex-column">
                        <p>
                            This User Agreement (“Agreement”) is between you (also referred to herein as “user”, “you” and “your”) and {$settings.site_name} Inc. (“{$settings.site_name}”, “we”, “us” and “our”). This Agreement governs your use of the services provided by {$settings.site_name} described below (“{$settings.site_name} Services” or the “Services”). By signing up to use an account through {$settings.site_name} (the “Site”) you agree that you have read, understand, and accept all of the terms and conditions contained in this Agreement.
                        </p>

                        <p>
                            We may make changes to the Agreement from time to time. If we do this, we will post the changed Agreements on the Site and will indicate at the top of this page the date the was last revised. You understand and agree that your continued use of the Service or the Site after we have made any such changes constitutes your acceptance of the new Agreement.
                        </p>


                        <div class="d-flex aff-list mt-3">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">1. ACCOUNT SET UP</h5>
                                <p class="mt-2 mb-0"><b>1.1 Eligibility </b> : To be eligible to use the Site you must be at least eighteen (18) years of age or older.</p>
                                <p class="mt-2 mb-0"><b>1.2 Terms</b> : If you violate any of this Agreement, or otherwise violate an agreement between you and us, {$settings.site_name} may terminate your membership, delete your profile and any content or information that you have posted on the Site and/or prohibit you from using or accessing the Service or the Site (or any portion, aspect or feature of the Service or the Site), at any time in its sole discretion, with or without notice.
                                </p>
                                <p class="mt-2 mb-0"><b>1.3 Registration of {$settings.site_name} Account</b> : By using a {$settings.site_name} Account, you agree and represent that you will use {$settings.site_name} only for yourself, and not on behalf of any third party, unless you have obtained prior approval from {$settings.site_name}. You are fully responsible for all activity that occurs under your {$settings.site_name} Account. We may, in our sole discretion, refuse to open a {$settings.site_name} Account, or limit the number of {$settings.site_name} Accounts that you may hold or suspend or terminate.</p>
                                <p class="mt-2 mb-0"><b>1.4 Registration Data; Account Security.</b> : In consideration of your use of the Site, you agree to (i) provide accurate, current and complete information about you as may be prompted by any registration forms on the Site or otherwise requested by {$settings.site_name} ("Registration Data"); (ii) maintain the security of your password and identification; (iii) maintain and promptly update the Registration Data, and any other information you provide to {$settings.site_name}, to keep it accurate, current and complete; (iv) promptly notify {$settings.site_name} regarding any material changes to information or circumstances that could affect your eligibility to continue to use the Site or Service or the terms on which you use the Site or Service; and (v) be fully responsible for all use of your account and for any actions that take place using your account.</p>

                            </div>
                        </div>


                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">2. USING THE SERVICES</h5>
                                <p class="mt-2 mb-0"><b>2.1 {$settings.site_name} Investment</b> : {$settings.site_name} investment allows users to earn interest by uploading BTC, BCH, ETH, LTD, Dash or Doge as collateral for the purpose of receiving interest. {$settings.site_name} may amend the list of accepted Digital Currency from time to time by revising this Agreement updating the Site. Should {$settings.site_name} remove any Digital Currency from the list of permitted collateral, deposits already made with such Digital Currency shall remain in force, unless {$settings.site_name} informs the user otherwise.</p>
                                <p class="mt-2 mb-0"><b>2.2 Not an Offering of Securities or Commodities</b> : The content of the Site and the Services do not constitute an offer to buy or sell or a solicitation of an offer to buy or sell investments, securities, partnership interests, commodities or any other financial instruments; the content or the Site and the Services also do not constitute, and may not be used for or in connection with, an offer or solicitation by anyone in any state or jurisdiction in which such an offer or solicitation is not authorized or permitted, or to any person to whom it is unlawful to make such offer or solicitation.</p>
                                <p class="mt-2 mb-0"><b>2.3 No Advice</b> : {$settings.site_name} makes no representation or warranty, express or implied, to the extent not prohibited by applicable law, regarding the advisability of investing in securities, funds, commodity interests, partnership interests or other investments or funding. The past performance of any investment, loan, security, partnership interest, commodity or financial instrument is not a guide to future performance. {$settings.site_name} does not offer fiduciary services and is not your agent, advisor or fiduciary.</p>
                                <p class="mt-2 mb-0"><b>2.4 Taxes</b> : It is your sole responsibility to determine whether, and to what extent, any taxes apply to any interest received through the Services, and to withhold, collect, report and remit the correct amount of tax to the appropriate tax authorities.</p>
                            </div>
                        </div>



                        


                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">3. SITE AVAILABILITY AND ACCURACY</h5>
                                <p class="mt-2 mb-0"><b>3.1 Access and Availability</b> : Access to the Services may become degraded or unavailable during times of significant volatility or volume. This could result in the inability to buy or sell for periods of time and may also lead to support response time delays. Although we strive to provide you with excellent service, we do not guarantee that the Site or Services will be available without interruption and we do not guarantee that investment requests digital assets in connection with the Services will be successful.</p>
                                <p class="mt-2 mb-0"><b>3.2 Site Accuracy</b> : Although we intend to provide accurate and timely information on the Site, the Site (including, without limitation, the content may not always be entirely accurate, complete or current and may also include technical inaccuracies or typographical errors. In an effort to continue to provide you with as complete and accurate information as possible, information may, to the extent permitted by applicable law, be changed or updated from time to time without notice, including without limitation information regarding our policies, products and services. Accordingly, you should verify all information before relying on it, and all decisions based on information contained on the Site are your sole responsibility and we shall have no liability for such decisions. Links to third party materials (including without limitation any websites) may be provided as a convenience but are not controlled by us. You acknowledge and agree that we are not responsible for any aspect of the information, content, or services contained in any such third party materials accessible or linked to from the Site.</p>
                            </div>
                        </div>


                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">4. CONSENT TO ELECTRONIC DISCLOSURES AND SIGNATURES</h5>
                                <p class="mt-2 mb-0"><b>4.1 General</b> : Because {$settings.site_name} operates only on the Internet, it is necessary for you to consent to transact business with us online and electronically. As part of doing business with us, therefore, we also need you to consent to our providing you certain disclosures electronically, either via our Site or to the email address you provide to us. By agreeing to the , you agree to receive electronically all documents, communications, notices, contracts, and agreements arising from or relating to your use of the Site and Service.</p>
                                <p class="mt-2 mb-0"><b>4.2 Communications</b> : By accepting this Agreement, you expressly consent to be contacted by us, our agents, representatives, affiliates, or anyone calling on our behalf for any and all purposes, at any telephone number, or physical or electronic address you provide or at which you may be reached. You agree we may contact you in any way, including SMS messages (including text messages), calls using prerecorded messages or artificial voice, and calls and messages delivered using auto telephone dialing system or an automatic texting system. Notwithstanding the aforementioned, any s will be provided to you electronically through the Site or via email to the email address you provided us. If you require paper copies of any agreements or disclosures, you may sign in to your account on our Site and print the documents desired.</p>
                                <p class="mt-2 mb-0"><b>4.3 Scope of Consent</b> : Your consent to receive disclosures and transact business electronically, and our agreement to do so, applies to any transactions to which such disclosures relate, whether between you and {$settings.site_name} or a third party by and through the Service. Your consent will remain in effect for so long as you are a user and, if you are no longer a user, will continue until such a time as all disclosures relevant to Services received through the Site.</p>
                                <p class="mt-2 mb-0"><b>4.4 Withdrawing Consent</b> : The {$settings.site_name} platform consists of a simple bit interface where you can track your investments, make new investments and withdraw your money from existing investments. You can order withdrawals exactly 24 hours after your deposit. In this case, your commission will be charged the amount shown on the platform. If you are having problems with this process, you are expected to contact our team and speed up the process.</p>
                                <p class="mt-2 mb-0"><b>4.5 Change in Your Contact Information</b> : You must keep {$settings.site_name} informed of any change in their email so that you can continue to receive all agreements and disclosures in a timely fashion. If your registered email address changes, you must notify us of the change by sending an email to {$settings.site_name} team. You also agree to update your registered wallet if it changes. If you are a business or entity user or are acting on behalf of a business or entity, you will keep us informed of any change to your email address, telephone number and primary business address.</p>
                            </div>
                        </div>

                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">5. INTELLECTUAL PROPERTY, COPYRIGHTS AND IDENTIFYING MARKS</h5>
                                <p class="mt-2 mb-0"><b>5.1 Limited License</b> : All content on the Site, including but not limited to designs, text, graphics, pictures, video, information, software, music, sound and other files, and their selection and arrangement (the “Site Content”), are the proprietary property of {$settings.site_name} with all rights reserved. No Site Content may be modified, copied, distributed, framed, reproduced, republished, downloaded, displayed, posted, transmitted, or sold in any form or by any means, in whole or in part, without {$settings.site_name}'s prior written permission, except as provided in the following sentence and except that the foregoing does not apply to your own User Content (as defined below) that you legally post on the Site. Provided that you are eligible for use of the Site, you are granted a limited license to access and use the Site and to download or print a copy of any portion of the Site Content solely for your use in connection with your use of the Site or Service, provided that you keep all copyright or other proprietary notices intact. Except for your own User Content (as defined below), you may not republish Site Content on any Internet, Intranet or Extranet site or incorporate the information in any other database or compilation, and any other use of the Site Content is strictly prohibited. Any use of the Site or the Site Content other than as specifically authorized herein, without the prior written permission of {$settings.site_name}, is strictly prohibited and will terminate the license granted herein. Such unauthorized use may also violate applicable laws including without limitation copyright and trademark laws and applicable communications regulations and statutes. Unless explicitly stated herein, nothing in this Agreement shall be construed as conferring any license to intellectual property rights, whether by estoppel, implication or otherwise. This license is revocable by us at any time without notice and with or without cause.</p>
                                <p class="mt-2 mb-0"><b>5.2 Trademarks</b> : {$settings.site_name} and other {$settings.site_name} graphics, logos, designs, page headers, button icons, scripts and service names are registered trademarks, trademarks or trade dress of {$settings.site_name} in the U.S. and/or other countries. {$settings.site_name}'s trademarks and trade dress may not be used, including as part of trademarks and/or as part of domain names, in connection with any product or service in any manner that is likely to cause confusion and may not be copied, imitated, or used, in whole or in part, without the prior written permission of {$settings.site_name}. {$settings.site_name} may, at its sole discretion, limit access to the Site and/or terminate the memberships of any users who infringe any intellectual property rights of {$settings.site_name} or others.</p>
                                <p class="mt-2 mb-0"><b>5.3 Copyright Complaints</b> : If you believe that any material on the Site infringes upon any copyright which you own or control, you may send a written notification of such infringement to our {$settings.site_name} as set forth below:
                                    <br><br>Attention: Legal Department<br>
                                    {$settings.site_name}<br>
                                    Palazzo CA'Brugnera, Valley Road, Birkirkara Malta.<br><br>

                                    To meet the notice requirements under the Digital Millennium Copyright Act, the notification must be a written communication that includes the following:
                                    <br>- A physical or electronic signature of a person authorized to act on behalf of the owner of an exclusive right that is allegedly infringed;
                                    <br>- Identification of the copyrighted work claimed to have been infringed, or, if multiple copyrighted works at a single online site are covered by a single notification, a representative list of such works at that site;
                                    <br>- Identification of the material that is claimed to be infringing or to be the subject of infringing activity and that is to be removed or access to which is to be disabled, and information reasonably sufficient to permit us to locate the material;
                                    <br>- Information reasonably sufficient to permit us to contact the complaining party, such as an address, telephone number and, if available, an electronic mail address at which the complaining party may be contacted;
                                    <br>- A statement that the complaining party has a good-faith belief that use of the material in the manner complained of is not authorized by the copyright owner, its agent or the law; and
                                    <br>- A statement that the information in the notification is accurate, and under penalty of perjury, that the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed.


                                </p>
                                <p class="mt-2 mb-0"><b>5.4 Submissions</b> : You acknowledge and agree that any questions, comments, suggestions, ideas, feedback or other information about the Site or the Service ("Submissions"), provided by you to {$settings.site_name} are non-confidential and shall become the sole property of {$settings.site_name}. {$settings.site_name} shall own exclusive rights, including all intellectual property rights, and shall be entitled to the unrestricted use and dissemination of these Submissions for any purpose, commercial or otherwise, without acknowledgment or compensation to you.</p>
                            </div>
                        </div>


                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">6. DATA PROTECTION AND SECURITY</h5>
                                <p class="mt-2 mb-0"><b>6.1 Password Security</b> : In order to access the Services you will be required to provide your name and email address and to create a password. You are responsible for keeping the electronic device through which you access Services safe and maintaining adequate security and control of any and all security details that you use to access the Services. This includes taking all reasonable steps to avoid the loss, theft or misuse of such electronic device and ensuring that such electronic device is both encrypted and password protected. {$settings.site_name} assumes no responsibility for any loss that you may sustain due to compromise of account login credentials due to no fault of {$settings.site_name} and/or failure to follow the requirements set out in this Section 7.1, or follow or act on any notices or alerts that we may send to you.</p>
                                <p class="mt-2 mb-0"><b>6.2 Loss or Compromise</b> : Any loss or compromise of your electronic device or your security details may result in unauthorized access to your Account by third-parties and the loss or theft of Digital Currency held in your Account and any associated accounts, including your linked bank account(s) and credit card(s). You must keep your security details safe at all times. For example, you should not write them down or otherwise make them visible to others.</p>
                                <p class="mt-2 mb-0"><b>6.3 Shared Access</b> : You should never allow remote access or share your computer screen with someone else when you are logged on to your Account. {$settings.site_name} will never under any circumstances ask you for your passwords or to screen share or otherwise seek to access your computer or account. You should not provide your details to any third party for the purposes of remotely accessing your amount unless. Always log into your Account through the Site to review any required actions if you have any uncertainty regarding the authenticity of any communication or notice.</p>
                                <p class="mt-2 mb-0"><b>6.4 Personal Data</b> : You acknowledge that we may process personal data in relation to you (if you are an individual), and personal data that you have provided or in the future provide to us in relation to your employees and other associated or other individuals, in connection with this Agreement, or the Services. Accordingly, you represent and warrant that: (i) your disclosure to us of any personal data relating to individuals other than yourself was or will be made in accordance with all applicable data protection and data privacy laws, and those data are accurate, up to date and relevant when disclosed; (ii) before providing any such personal data to us, you have read and understood our Privacy Policy, which is available here, and, in the case of personal data relating to an individual other than yourself, have (or will at the time of disclosure have) provided a copy of that Privacy Policy (as amended from time to time), to that individual; and (iii) if from time to time we provide you with a replacement version of the Privacy Policy, you will promptly read that notice and provide a copy to any individual whose personal data you have provided to us.</p>
                                <p class="mt-2 mb-0"><b>6.5 Security Breach</b> : f you suspect that your {$settings.site_name} Account or any of your security details have been compromised or if you become aware of any fraud or attempted fraud or any other security incident (including a cyber-security attack) affecting you and / or {$settings.site_name} (together a “Security Breach”), you must notify {$settings.site_name} as soon as possible by email free of charge at info@{$settings.site_name}.com and continue to provide accurate and up to date information throughout the duration of the Security Breach. You must take any steps that we reasonably require to reduce, manage or report any Security Breach. Failure to provide prompt notification of any Security Breach may be taken into account in our determination of the appropriate resolution of the matter.</p>
                                <p class="mt-2 mb-0"><b>6.6 Safety and Security of Your Computer and Devices</b> : {$settings.site_name} is not liable for any damage or interruptions caused by any computer viruses or other malicious code that may affect your computer or other equipment, or any phishing, spoofing or other attack. We advise the regular use of a reputable and readily available virus screening and prevention software. You should also be aware that SMS and email services are vulnerable to spoofing and phishing attacks and should use care in reviewing messages purporting to originate from us.</p>
                            </div>
                        </div>

                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">7. USER FEEDBACK, QUERIES, COMPLAINTS, DISPUTES</h5>
                                <p class="mt-2 mb-0"><b>7.1 Contact {$settings.site_name}</b> : If you have feedback, or general questions, please contact us via our User Support at info@{$settings.site_name}.com. When you contact us please provide us with your name, email address, and any other information we may need to identify you, your {$settings.site_name} Account(s), and the transaction on which you have feedback or questions. {$settings.site_name} requires that all legal documents (including civil subpoenas, complaints, and small claims) be served to our Notice address as set forth in Section 8.7 (Notice).</p>
                                <p class="mt-2 mb-0"><b>7.2 Complaints Process</b> : If you have a dispute with {$settings.site_name} (a “Complaint”), you agree to contact {$settings.site_name} through our support team to attempt to resolve any such dispute amicably. If we cannot resolve the dispute through the {$settings.site_name} support team, you and {$settings.site_name} agree to use the Formal Complaint Process set forth below. You agree to use this process before filing any arbitration claim or small claims action. If you do not follow the procedures set out in this Section before filing an arbitration claim or suit in small claims court, we shall have the right to ask the arbitrator or small claims court to dismiss your filing unless and until you complete the following steps.</p>
                                
                                <p class="mt-2 mb-0"><b>7.3 Arbitration Procedures</b> : The arbitration will be conducted by a single, neutral arbitrator and shall take place in the county or parish in which you reside, or another mutually agreeable location, in the English language. The arbitrator may award any relief that a court of competent jurisdiction could award and the arbitral decision may be enforced in any court. An arbitrator’s decision and judgment thereon will not have a precedential or collateral estoppel effect. At your request, hearings may be conducted in person or by telephone and the arbitrator may provide for submitting and determining motions on briefs, without oral hearings. To the extent permitted by law, the prevailing party in any action or proceeding to enforce this Agreement, any arbitration pursuant to this Agreement, or any small claims action shall be entitled to costs and attorneys’ fees.</p>
                                <p class="mt-2 mb-0">7.4 Waiver of Class Action and Jury Trial. YOU AND WE AGREE THAT, BY ENTERING INTO THIS AGREEMENT, THE YOU AND {$settings.site_name} ARE EACH WAIVING THE RIGHT TO A TRIAL BY JURY OR TO PARTICIPATE IN A CLASS ACTION. YOU AND WE ACKNOWLEDGE THAT ARBITRATION WILL LIMIT YOUR LEGAL RIGHTS, INCLUDING THE RIGHT TO PARTICIPATE IN A CLASS ACTION, THE RIGHT TO A JURY TRIAL, THE RIGHT TO CONDUCT FULL DISCOVERY, AND THE RIGHT TO APPEAL (EXCEPT AS PERMITTED IN PARAGRAPH 8.3 OR UNDER THE FEDERAL ARBITRATION ACT).</p>
                                <p class="mt-2 mb-0"><b>7.5 Disclaimers</b> : None of {$settings.site_name}'s, its parent, any of its affiliates, subsidiaries, providers or their respective officers, directors, employees, agents, independent contractors or licensors (collectively the "{$settings.site_name} Parties") guarantees the accuracy, adequacy, timeliness, reliability, completeness, or usefulness of any of the Content and the {$settings.site_name} Parties disclaim liability for errors or omissions in the Content. This Site and all of the Content is provided "as is" and "as available," without any warranty, either express or implied, including the implied warranties of merchantability, fitness for a particular purpose, non-infringement or title. Additionally, there are no warranties as to the results of your use of the Content. The {$settings.site_name} Parties do not warrant that the Site is free of viruses or other harmful components. This does not affect those warranties which are incapable of exclusion, restriction or modification under the laws applicable to this Agreement. {$settings.site_name} cannot guarantee and does not promise any specific results from use of the Site and/or the Service to provide or to obtain a interest return.</p>
                                <p class="mt-2 mb-0"><b>7.6 Availability</b> : The Site and the Service may be temporarily unavailable from time to time for maintenance or other reasons. {$settings.site_name} assumes no responsibility for any error, omission, interruption, deletion, defect, delay in operation or transmission, communications line failure, theft or destruction or unauthorized access to, or alteration of, user communications. {$settings.site_name} is not responsible for any problems or technical malfunction of any telephone network or lines, computer online systems, servers or providers, computer equipment, software, failure of email or players on account of technical problems or traffic congestion on the Internet or on the Site or combination thereof, including injury or damage to users or to any other person's computer related to or resulting from participating or downloading materials in connection with the Web and/or in connection with the Service. Under no circumstances will {$settings.site_name} be responsible for any loss or damage, including any loss or damage to any user Content, financial damages or lost profits, loss of business, or personal injury or death, resulting from anyone's use of the Site or the Service, any User Content or Third Party Content posted on or through the Site or the Service or transmitted to users, or any interactions between users of the Site, whether online or offline.</p>
                                <p class="mt-2 mb-0"><b>7.7 Limitation on Liability</b> : EXCEPT IN JURISDICTIONS WHERE SUCH PROVISIONS ARE RESTRICTED, IN NO EVENT WILL {$settings.site_name} OR ITS DIRECTORS, EMPLOYEES OR AGENTS BE LIABLE TO YOU OR ANY THIRD PARTY FOR ANY INDIRECT, CONSEQUENTIAL, EXEMPLARY, INCIDENTAL, SPECIAL OR PUNITIVE DAMAGES, INCLUDING FOR ANY LOST PROFITS OR LOST DATA ARISING FROM YOUR USE OF THE SITE OR THE SERVICE OR ANY OF THE SITE CONTENT OR OTHER MATERIALS ON OR ACCESSED THROUGH THE SITE, EVEN IF {$settings.site_name} IS AWARE OR HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES.
                                    <br><br>NOTWITHSTANDING ANYTHING TO THE CONTRARY CONTAINED HEREIN, TO THE EXTENT PERMITTED BY APPLICABLE LAW {$settings.site_name}'S LIABILITY TO YOU FOR ANY CAUSE WHATSOEVER, AND REGARDLESS OF THE FORM OF THE ACTION, WILL AT ALL TIMES BE LIMITED TO THE AMOUNT PAID, IF ANY, BY YOU TO {$settings.site_name} FOR THE SERVICE DURING THE TERM OF MEMBERSHIP. IN NO CASE WILL {$settings.site_name}’S LIABILITY TO YOU EXCEED $1000. YOU ACKNOWLEDGE THAT IF NO FEES ARE PAID TO {$settings.site_name} FOR THE SERVICE, YOU SHALL BE LIMITED TO INJUNCTIVE RELIEF ONLY, UNLESS OTHERWISE PERMITTED BY LAW, AND SHALL NOT BE ENTITLED TO DAMAGES OF ANY KIND FROM {$settings.site_name}, REGARDLESS OF THE CAUSE OF ACTION.<br><br>CERTAIN FEDERAL AND STATE LAWS DO NOT ALLOW THE EXCLUSION OR LIMITATION OF CERTAIN DAMAGES OR LIMITATIONS ON IMPLIED WARRANTIES. IF THESE LAWS APPLY TO YOU, SOME OR ALL OF THE ABOVE DISCLAIMERS, EXCLUSIONS OR LIMITATIONS MAY NOT APPLY TO YOU, AND YOU MAY HAVE ADDITIONAL RIGHTS.</p>
                                <p class="mt-2 mb-0"><b>7.8 Governing Law; Venue and Jurisdiction</b> : By visiting or using the Site and/or the Service, you agree that the laws of England, without regard to any principles of conflict of laws that would require or permit the application of the laws of any other jurisdiction, will govern this Agreement. If you obtain an interest return, the terms of the investment will be governed by federal laws and the laws of England to the extent not preempted, without regard to any principle of conflicts of laws that would require or permit the application of the laws of any other jurisdiction.</p>
                                <p class="mt-2 mb-0"><b>7.9 Indemnity</b> : You agree to indemnify and hold {$settings.site_name}, its subsidiaries and affiliates, and each of their directors, officers, agents, contractors, partners and employees, harmless from and against any loss, liability, claim, demand, damages, costs and expenses, including reasonable attorney's fees, arising out of any dispute with another user of the Site or any third-party. You also agree to indemnify and hold {$settings.site_name}, its subsidiaries and affiliates and service providers, and each of its or their respective officers, directors, agents, joint venturers, employees and representatives, harmless from any claim or demand (including attorneys' fees and any fines, fees or penalties imposed by any regulatory authority) arising out of or related to your breach of this Agreement or your violation of any law, rule or regulation, or the rights of any third party.</p>
                            </div>
                        </div>

                        <div class="d-flex aff-list">
                            <div class="d-flex pr-4">
                                <i class="fas fa-circle color-yellow"></i>
                            </div>
                            <div>
                                <h5 style="line-height:1;">8. GENERAL PROVISIONS</h5>
                                <p class="mt-2 mb-0"><b>8.1 Amendments</b> : We may amend or modify this Agreement by posting on the Site or emailing to you the revised Agreement, and the revised Agreement shall be effective at such time. If you do not agree with any such modification, your sole and exclusive remedy is to terminate your use of the Services and close your account. You agree that we shall not be liable to you or any third party for any modification or termination of the Services, or suspension or termination of your access to the Services, except to the extent otherwise expressly set forth herein. If the revised Agreement includes a material change, we will endeavor to provide you advanced notice via our website and/or email before the material change becomes effective.</p>
                                <p class="mt-2 mb-0"><b>8.2 Assignment</b> : You may not assign any rights and/or licenses granted under this Agreement. We reserve the right to assign our rights without restriction, including without limitation to any {$settings.site_name} affiliates or subsidiaries, or to any successor in interest of any business associated with the Services. Any attempted transfer or assignment in violation hereof shall be null and void. Subject to the foregoing, this Agreement will bind and inure to the benefit of the parties, their successors and permitted assigns. In the event that {$settings.site_name} is acquired by or merged with a third party entity or undergoes a change of control, we reserve the right, in any of these circumstances, to transfer or assign the information we have collected from you as part of such merger, acquisition, sale, or other change of control.</p>
                                <p class="mt-2 mb-0"><b>8.3 Force Majeure</b> : {$settings.site_name} shall not be liable for delays, failure in performance or interruption of service which result directly or indirectly from any cause or condition beyond our reasonable control, including but not limited to, significant market volatility, any delay or failure due to any act of God, act of civil or military authorities, act of terrorists, civil disturbance, war, strike or other labor dispute, fire, interruption in telecommunications or Internet services or network provider services, failure of equipment and/or software, other catastrophe or any other occurrence which is beyond our reasonable control and shall not affect the validity and enforceability of any remaining provisions.</p>
                                <p class="mt-2 mb-0"><b>8.4 Governing Law; Venue</b> : You agree that the laws of the State of Delaware, without regard to principles of conflict of laws, will govern this Agreement and any claim or dispute that has arisen or may arise between you and {$settings.site_name}, except to the extent governed by federal law. You and {$settings.site_name} consent to personal jurisdiction on the courts of London.</p>
                                <p class="mt-2 mb-0"><b>8.5 Links to Other Web Sites and Content</b> : The Site contains (or you may be sent through the Site or the Services) links to other web sites (“Third Party Sites”), as well as articles, photographs, text, graphics, pictures, designs, music, sound, video, information, software and other content belonging to or originating from third parties (the “Third Party Content”). Such Third Party Sites and Third Party Content are not investigated, monitored or checked for accuracy, appropriateness, or completeness by us, and we are not responsible for any Third Party Sites accessed through the Site or any Third Party Content posted on the Site, including without limitation the content, accuracy, offensiveness, opinions, reliability or policies of or contained in the Third Party Sites or the Third Party Content. Inclusion of or linking to any Third Party Site or any Third Party Content does not imply approval or endorsement thereof by us. If you decide to leave the Site and access the Third Party Sites, you do so at your own risk and you should be aware that our terms and policies no longer govern. You should review the applicable terms and policies, including privacy and data gathering practices, of any site to which you navigate from the Site.</p>
                                <p class="mt-2 mb-0"><b>8.6 No-Waiver</b> : The failure of {$settings.site_name} to exercise or enforce any right or provision of this Agreement shall not constitute a waiver of such right or provision in that or any other instance. If any provision of this Agreement is held invalid, the remainder of this Agreement shall continue in full force and effect. If any provision of this Agreement shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from this Agreement and shall not affect the validity and enforceability of any remaining provisions.</p>
                                <p class="mt-2 mb-0"><b>8.7 Notices</b> : To give us notice under this Agreement, the user must contact {$settings.site_name} by facsimile transmission or personal delivery, overnight courier or registered or certified mail to:
                                    <br><br>Attention: Legal Department<br>
                                    {$settings.site_name}<br>
                                    Palazzo CA'Brugnera, Valley Road, Birkirkara Malta.<br>
                                </p>
                                <p class="mt-2 mb-0"><b>8.8 Promotions</b> : From time to time, {$settings.site_name} may make available special offers or conduct promotions for qualifying users. Subject to applicable laws, {$settings.site_name} may establish qualifying criteria to participate in any special promotion its sole discretion. {$settings.site_name} may revoke any special offer at any time without notice. {$settings.site_name} shall have no obligation to make special offers available to all users. {$settings.site_name} makes no recommendation and does not provide any advice about the value or utility of any investment subject to a high return.</p>
                                <p class="mt-2 mb-0"><b>8.9 Severability</b> : If any provision of this Agreement shall be determined to be invalid or unenforceable under any rule, law, or regulation of any local, state, or federal government agency, such provision will be changed and interpreted to accomplish the objectives of the provision to the greatest extent possible under any applicable law and the validity or enforceability of any other provision of this Agreement shall not be affected. If such construction is not possible, the invalid or unenforceable portion will be severed from this Agreement but the rest of the Agreement will remain in full force and effect.</p>
                                <p class="mt-2 mb-0"><b>8.10 Survival</b> : The following provisions of this Agreement shall survive termination of your use or access to the Site: the sections concerning Indemnification, Disclaimer of Warranties, Limitation of Liability, Waiver, Applicable Law and Dispute Resolution, and General Provisions, and any other provision that by its terms survives termination of your use or access to the Site.</p>
                            </div>
                        </div>





                    </div>
                </div>
            </div>
        </section>




    </main>

    {include file="footera.tpl"}
