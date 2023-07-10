@extends('layouts.frontend.master')

@section('title')
FAQs
@endsection

@section('page-content')
    <main class="main">
        <section class="page-banner text-center relative">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12">
                        <h1 class="page-title">FAQs</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="faq bluish-purple relative overflow-h ptb-100">
            <div class="container relative">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 relative z-index-1">
                        <div class="section-heading text-center">
                            <h2 class="title wow fadeInUp tw-bg-gradient-to-l tw-from-teal-500 tw-to-indigo-800 tw-bg-clip-text tw-text-transparent" style="visibility: hidden; -webkit-animation-name: none; -moz-animation-name: none; animation-name: none;">
                                Frequently Asked questions
                            </h2>
                        </div>
                    </div>
                    <div class="faq-content">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            {{-- <li class="nav-item" role="presentation">
                                <a class="nav-link active" href="javascript:void(0)" id="general-tab" role="tab"
                                    data-bs-target="#general" data-bs-toggle="tab">
                                    FAQs</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="javascript:void(0)" id="pre_ico-tab" role="tab"
                                    data-bs-target="#pre_ico" data-bs-toggle="tab">Data security</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" href="javascript:void(0)" id="tokens-tab" role="tab"
                                    data-bs-target="#tokens" data-bs-toggle="tab">Security awareness</a>
                            </li> --}}
                            @foreach ($faqList as $faq)
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link {{ $loop->first ? 'active' : '' }}" data-bs-target="#tab-{{ $loop->iteration }}" data-bs-toggle="tab" href="javascript:void(0)" id="tab-toggle-{{ $loop->iteration }}" role="tab">{{ $faq->category }}</a>
                                </li>
                            @endforeach
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            {{-- <div role="tabpanel" class="tab-pane fade in active show" id="general"
                                aria-labelledby="general-tab">
                                <div class="faq-box">
                                    <div class="faq-title">What is information security?</div>
                                    <div class="faq-panel">
                                        <p>
                                            Information security is the practice of protecting information and information
                                            systems from
                                            unauthorized disclosure, modification, and destruction.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is confidentiality?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Confidentiality</b> is the preservation of authorized restrictions on
                                            information access and
                                            disclosure, including means for protecting personal privacy and proprietary
                                            information.
                                            Confidentiality has to do with the privacy of information, including
                                            authorizations to view,
                                            share, and use it. Information with low confidentiality concerns may be
                                            considered "public" or
                                            otherwise not threatening if exposed beyond its intended audience. Information
                                            with high
                                            confidentiality concerns is considered secret and must be kept confidential to
                                            prevent identity
                                            theft, compromise of accounts and systems, legal or reputational damage, and
                                            other severe
                                            consequences.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is integrity?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Integrity</b> is the protection against improper modification or destruction
                                            of information. It
                                            includes non-repudiation and authenticity.
                                            Integrity concerns—along with availability concerns—contribute to data's
                                            criticality.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is availability?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Availability</b> is the timeliness and reliability of access to and use of
                                            information.
                                            Availability has to do with the accessibility and continuity of information.
                                            Information with low
                                            availability concerns may be considered supplementary rather than necessary.
                                            Information with high
                                            availability concerns is considered critical and must be accessible in order to
                                            prevent negative
                                            impact on University activities.
                                            Availability concerns—along with integrity concerns—contribute to data's
                                            criticality.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is criticality?
                                    </div>
                                    <div class="faq-panel">
                                        Criticality is a reflection of data's integrity and availability concerns. Data's
                                        criticality is the
                                        higher of its integrity and availability concerns. For example, data with high
                                        integrity concerns
                                        but moderate availability concerns would have a high criticality.
                                        There are three levels of criticality:
                                        <ul>
                                            <li>Non-critical</li>
                                            <li>Critical</li>
                                            <li>Mission critical
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="pre_ico" aria-labelledby="pre_ico-tab">
                                <div class="faq-box">
                                    <div class="faq-title">
                                        How can I manage data safely?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            The best way to manage data safely is to recognize that it's an integral part of
                                            your job
                                            responsibilities and to incorporate it into your workplace routine. Turn safe
                                            computing and
                                            information behavior into <b>new habits</b>, and be mindful of how your actions
                                            affect the
                                            security of
                                            your
                                            data and devices.
                                        </p>
                                        <p>
                                            IT provides <b>tools and services</b> to help you manage the data in your care
                                            and meet
                                            information
                                            security standards. Some of these tools and services may also be offered locally
                                            through your
                                            unit.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        How do I know whether I have sensitive data?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            In many cases, sensitive data is hidden in larger data sets or files. To find
                                            sensitive data on
                                            your computer, download a program to detect sensitive data and use it to scan
                                            your computer. Upon
                                            completing a scan, it will generate a report that will assist you in finding and
                                            protecting any
                                            unencrypted sensitive information, including Social Security numbers, on your
                                            computer or drives.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">What is a backup?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            A backup is a copy of the data stored on a device. It's useful for restoring
                                            data if your device
                                            crashes or continuing work if your device is lost or stolen.
                                        </p>
                                        <p>
                                            When you <b>back up your data</b>, you create a copy of some or all of the files
                                            on your device
                                            and store
                                            them in a separate location (which is usually either on a flash drive, removable
                                            hard drive, or in
                                            the cloud). Some kinds of backups even store your device configurations. Backup
                                            and recovery
                                            software can automate the backup process by performing backups based on a set
                                            schedule.
                                            To restore data from a backup, you use either recovery software (to restore full
                                            backups of a
                                            device's data and configurations) or manually replace files with copies from the
                                            backup (usually
                                            to restore lost or corrupted files).
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        How often should I back up my data?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            It depends on how <b>critical</b> that data is. If it's important that your data
                                            be accurate and
                                            available (to you or others), you should consider backing it up often. For
                                            example, you may want
                                            to back up critical project data at the end of each day or week.
                                            You can use backup and recovery software to automate the backup process and
                                            remove much of the
                                            effort involved in performing backups.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is encryption?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Encryption</b> is a means of protecting files and devices. When you encrypt a
                                            file, you "lock"
                                            it with
                                            an encryption key or password. The file itself is scrambled and becomes
                                            unreadable without the
                                            appropriate key or password.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        Can I just erase sensitive data?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            No. Sensitive data needs to be securely erased to ensure that it can't be
                                            recovered.
                                            When you delete a file using your computer's Recycling Bin (Windows) or Trash
                                            (Mac) feature, what
                                            you're actually doing is telling your computer to forget where that file is
                                            located. The file
                                            itself—and all the data it contains—is still on your computer, and hackers can
                                            still find it if
                                            they search your device's memory. In order to prevent a file from being
                                            recovered, you must
                                            securely erase it. When you securely erase a file, your computer overwrites it
                                            with randomly
                                            generated data to destroy its original contents, ensuring they can't be
                                            recovered.
                                            Always securely erase sensitive files to prevent them from being recovered and
                                            compromised.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        Can I use email to send sensitive data?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            No. Sensitive data needs to be securely erased to ensure that it can't be
                                            recovered.
                                            When you delete a file using your computer's Recycling Bin (Windows) or Trash
                                            (Mac) feature, what
                                            you're actually doing is telling your computer to forget where that file is
                                            located. The file
                                            itself—and all the data it contains—is still on your computer, and hackers can
                                            still find it if
                                            they search your device's memory. In order to prevent a file from being
                                            recovered, you must
                                            securely erase it. When you securely erase a file, your computer overwrites it
                                            with randomly
                                            generated data to destroy its original contents, ensuring they can't be
                                            recovered.
                                            Always securely erase sensitive files to prevent them from being recovered and
                                            compromised.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="tokens" aria-labelledby="tokens-tab">
                                <div class="faq-box">
                                    <div class="faq-title">
                                        Why are strong passwords important and how do I create one?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            The strength of your password directly affects how easy it is to guess that
                                            password or how long
                                            it takes a hacker to crack it. In many cases, hackers gain access to an account
                                            because the
                                            account's owner set a weak password.
                                        <ul>
                                            <li>Create a longer password. The more characters you use, the harder the
                                                password will be to
                                                guess and the longer it would take to crack.</li>
                                            <li>Never use a single dictionary word or name as your password.</li>
                                            <li>Use a variety of characters, including uppercase letters, lowercase letters,
                                                numerals, and
                                                special characters like punctuation marks.</li>
                                            <li>Never choose an obvious password like "password," "password1," "12345," or
                                                "00000."</li>
                                        </ul>
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is two-factor authentication (2FA)?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Two-factor authentication (2FA)</b> is a means of protecting your digital
                                            accounts from
                                            unauthorized
                                            access and use.
                                            Typically, you log in to an account by providing your username and password.
                                            This is a quick way
                                            to log in, but hackers can easily access your account if they steal or crack
                                            your password.
                                            However, if your account is protected by 2FA, then you will need to provide the
                                            standard username
                                            and password combination and then a second authentication factor (such as a
                                            temporary security
                                            code or the answer to a security question) to log in. Even if hackers steal or
                                            crack the password
                                            to a 2FA-protected account, they still can't log in to it without the second
                                            factor.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">What is phishing and how do I avoid it?</div>
                                    <div class="faq-panel">
                                        <p>
                                            <b>Phishing</b> is a cyber-attack in which scammers send fake emails with intent
                                            to steal your
                                            personal
                                            information or get you to download malware. Common examples of phishing emails
                                            include unexpected
                                            "special offers," notifications that your email account is reaching its quota or
                                            may be suspended,
                                            or classic scams like the Nigerian advance fee fraud.
                                            Most phishing emails use common tactics:
                                        <ul>
                                            <li>A fake or spoofed sender to create a sense of legitimacy. For example, "IT
                                                Help Desk" or a
                                                name from your contact list.
                                            </li>
                                            <li>A sense of urgency. For example, "Your account will be deactivated in 24
                                                hours."
                                            </li>
                                            <li>Typos, poor grammar, unusual wording, or other obvious errors.
                                            </li>
                                            <li>Suspicious attachments. For example, an unexpected "court summons" or "the
                                                files you asked
                                                for."
                                            </li>
                                        </ul>
                                        </p>
                                        <p>
                                            Spear phishing is particularly dangerous. In a spear phishing attack, scammers
                                            use a company's
                                            real logos, names, and terminology and may even spoof real email addresses in
                                            order to create
                                            convincing phishing emails to trick that company's employees.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What cryptocurrencies can I use to purchase?
                                    </div>
                                    <div class="faq-panel">
                                        Lorem ipsum dolor sit amet, consectetur adipisc elit,
                                        sed do eiusmod temp or incididunt ut labore et dolore
                                        magna aliqua. eiusmod tempor incididunt ut labore et
                                        dolore magna aliqua.
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What are some common types of computer viruses?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            Common examples of computer viruses include resident viruses, multipartite
                                            viruses, direct
                                            actions, browser hijackers, overwrite viruses, web scripting viruses, file
                                            injectors, network
                                            viruses, and boot sector viruses.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is malware?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            Malware, short for malicious software, is a program or file that is
                                            intentionally harmful to
                                            your computer, network, or website. These types of cyberthreats infect your
                                            system to gather
                                            sensitive data, disrupt operations, or spy on your digital activity.
                                            Common examples of malware include viruses, ransomware, Trojans, spyware,
                                            keyloggers, and worms.
                                        </p>
                                    </div>
                                </div>
                                <div class="faq-box">
                                    <div class="faq-title">
                                        What is ransomware?
                                    </div>
                                    <div class="faq-panel">
                                        <p>
                                            Ransomware is a specific type of cyberattack where the attacker forces you to
                                            pay a ransom fee
                                            to regain access to your system or files. Common types of ransomware attacks
                                            include scareware,
                                            lock-screen ransomware, and encryption ransomware.
                                        </p>
                                    </div>
                                </div>
                            </div> --}}
                            @foreach ($faqList as $faq)
                                <div aria-labelledby="tab-toggle-{{ $loop->iteration }}" class="tab-pane fade {{ $loop->first ? 'in active show' : '' }}" id="tab-{{ $loop->iteration }}" role="tabpanel">
                                    @foreach ($faq->categoryItems as $faqItem)
                                        <div class="faq-box">
                                            <div class="faq-title">
                                                {{ $faqItem->question }}
                                            </div>
                                            <div class="faq-panel">
                                                <p>{{ $faqItem->answer }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $('#more_menu').addClass('active');
        })
    </script>
@endsection
