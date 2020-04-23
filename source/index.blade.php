@extends('_layouts.master')

@section('body')
    <section class="bg-cover bg-no-repeat relative" id="hero-section">
        <div class="text-center max-w-5xl px-4 m-auto">
            <h1 class="text-gray-100 font-bold text-4xl lg:text-6xl mb-6">Hosting just got even better</h1>
            <p class="text-primary-100 lg:text-2xl leading-tight px-8 mb-10">
                Stop spending countless hours worrying about your infrastructure and competition's features. We'll take you to the top.
            </p>
            <div class="flex items-center justify-center">
                <a href="#" class="inline-flex items-center text-white bg-primary-900 font-medium px-5 py-2 rounded-lg mr-1 sm:mr-3">Get Started for free</a>
            </div>

        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                <path fill="#fff" fill-opacity="1" d="M0,128L40,112C80,96,160,64,240,90.7C320,117,400,203,480,229.3C560,256,640,224,720,186.7C800,149,880,107,960,112C1040,117,1120,171,1200,160C1280,149,1360,75,1400,37.3L1440,0L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <section class="bg-white">

        <div class="lg:relative px-5 py-12 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
            <div class="flex flex-col flex-wrap md:flex-row items-center sm:-mx-6">
                <div class="w-full md:w-1/2 px-6 my-4 md:my-0">
                    <h2 class="text-2xl lg:text-3xl font-medium tracking-tight text-gray-900 leading-snug">Built for Serious Companies</h2>
                    <p class="mt-3 text-lg text-gray-700">
                        Bring the best to the table for your clients with our most requested features.
                    </p>
                    <div class="flex mt-10">
                        <div>
                            <i class="fal fa-plug fa-fw fa-lg w-10 h-10 text-primary-500"></i>
                        </div>
                        <div class="ml-4 mt-2">
                            <div class="font-bold text-primary-900 text-lg">Plugin Manager</div>
                            <p class="mt-2 text-gray-700">Our plugin manager is game-agnostic, allowing you to set up multiple plugins for different games without the hair pulling.</p>
                        </div>
                    </div>
                    <div class="flex mt-10">
                        <div>
                            <i class="fal fa-eye fa-fw fa-lg w-10 h-10 text-primary-500"></i>
                        </div>
                        <div class="ml-4 mt-2">
                            <div class="font-bold text-primary-900 text-lg">Audit Logs</div>
                            <p class="mt-2 text-gray-700">Your clients can be their own watchdog, making sure their community and server is safe from untrustworthy partners..</p>
                        </div>
                    </div>
                    <div class="flex mt-10">
                        <div>
                            <i class="fal fa-exchange fa-fw fa-lg w-10 h-10 text-primary-500"></i>
                        </div>
                        <div class="ml-4 mt-2">
                            <div class="font-bold text-primary-900 text-lg">Node to Node Transfers</div>
                            <p class="mt-2 text-gray-700">Need a user to switch from London to the states? We got you covered. Our hyper fast node transfer service will get the job done in no time.</p>
                        </div>
                    </div>

                    <div class="flex mt-10">
                        <a href="#" class="inline-flex items-center text-white bg-primary-500 font-medium px-5 py-2 rounded-lg mx-auto md:mx-0">Get Started for free</a>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-6 md:pl-12 my-4 md:my-0">
                    <div class="block">
                        <img src="assets/images/panel.svg" class="h-auto max-w-lg shadow-lg" alt="logo">
                    </div>
                </div>


            </div>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                <path fill="#1a202c" fill-opacity="1" d="M0,224L40,224C80,224,160,224,240,192C320,160,400,96,480,96C560,96,640,160,720,170.7C800,181,880,139,960,144C1040,149,1120,203,1200,224C1280,245,1360,235,1400,229.3L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <section class="bg-gray-900">
        <div class="lg:relative px-5 py-12 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
            <h2 class="text-3xl text-gray-100 mt-2 text-center">Our Features Keep on Coming</h2>
            <p class="mt-3 text-lg text-gray-200 text-center">
                We are constantly working on new features to bring the absolute apex of any panel on the market.
            </p>
            <div class="flex flex-wrap sm:-mx-6 mt-10">

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-database fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Backup Manager</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Keep your clients data safe and secure while allowing them to restore backups at anytime. Bring the power and control to your clients you know they deserve.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-fill-drip fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Theme Switcher</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Stop putting up with messy, broken solutions for allowing your brand or clients to change panel themes on the fly. Our theme switcher is built to give you the granular controls you desire.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-spray-can fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">CSS Injector</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Give the personality your brand needs to personalize our panel to your vision. Become an artisan with our tools.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-file-alt fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Sub-Domain Manager</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Give your clients the ability to use vanity sub domains that connect them to their servers. Providing clarity and ease of access for their community.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-megaphone fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Announcement Manager</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Spread info quickly and safely with our announcement manager, no longer do you need to worry if everyone saw your announcement in Discord.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-bell-exclamation fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Notifications</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Give your clients more info and interactivity with notifications for everything, whether it be their node finished transferring or their server crashed.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-ticket-alt fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Ticket System</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Answer questions and issues directly inside our panel, instead of having to rely on third party software, keep the bloat out of your website and brand.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-code-branch fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Git Integration</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Our panel comes Git ready to truly give your clients the tools needed for professional development.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-sync fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">User Re-installs</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        No more annoying tickets that bog down your support team about reinstalling another server. Give access to something clients should've had in first place.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-file-signature fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Quick Server Files</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Create simple and elegant shortcuts for your clients, allowing them to quickly navigate our panel.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-broadcast-tower fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Server Detail Querying</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Get the most out of our panel with deep dive details about each of your client's servers. No more unoptimized code muddying up your response time.
                    </p>
                </div>

                <div class="w-full sm:w-1/2 lg:w-1/3 sm:px-6 mb-12">
                    <i class="fal fa-puzzle-piece fa-fw fa-lg block h-10 w-10 mb-6 text-primary-400"></i>
                    <h3 class="text-gray-100 font-bold mb-3">Modular</h3>
                    <p class="text-lg text-gray-200 leading-tight">
                        Easily disable and enable our modules, custom fit our panel to your company's needs.
                    </p>
                </div>

            </div>
        </div>

        <div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 250">
                <path fill="#fff" fill-opacity="1" d="M0,160L48,160C96,160,192,160,288,165.3C384,171,480,181,576,192C672,203,768,213,864,218.7C960,224,1056,224,1152,218.7C1248,213,1344,203,1392,197.3L1440,192L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
            </svg>
        </div>
    </section>

    <section class="bg-white">
        <div class="lg:relative px-5 py-12 max-w-xl md:max-w-2xl lg:max-w-5xl mx-auto">
            <div class="flex flex-wrap -mx-6 mt-10 -mt-0 md:-mt-74">

                <div class="w-full px-6 mb-12">
                    <h2 class="text-3xl text-gray-900 mt-2 text-center">Predictable Pricing</h2>
                </div>

                <div class="w-full md:w-1/2 px-6 mb-12">
                    <div class="flex flex-col flex-1 justify-between shadow-lg bg-white rounded-lg h-full">
                        <div class="px-5 pt-8">
                            <div class="text-lg text-gray-900 font-medium">
                                Odin Pro
                            </div>
                            <div class="mt-2 text-gray-700">
                                Simple pricing, pay as you go.
                            </div>
                        </div>
                        <div>
                            <div class="px-5 pb-8">
                                <div class="mt-6 px-4 py-4 bg-gray-100 rounded-lg">
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3">No Hidden Fees</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3">Over 15+ enhancements</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3">Branding Removal</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3">Static Pricing</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3">High Availability</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pt-5 pb-5 bg-gray-100 rounded-b-lg">
                                <div class="flex justify-between items-center">
                                    <span class="font-bold tracking-tight text-5xl">$10</span>
                                </div>
                                <div class="flex justify-between items-center text-center mb-3">
                                    <a href="#" class="block w-full items-center text-gray-900 bg-gray-200 font-medium px-5 py-2 rounded-lg mr-1 text-white">Deploy Now</a>
                                </div>
                                <div class="text-gray-700 text-sm">*Price does not include daemon self-hosting costs.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-1/2 px-6 mb-12">
                    <div class="flex flex-col flex-1 justify-between shadow-lg bg-primary-900 rounded-lg h-full">
                        <div class="px-5 pt-8">
                            <div class="text-lg text-gray-100 font-medium">
                                Odin Business
                            </div>
                            <div class="mt-2 text-primary-100">
                                High grade enterprise solutions.
                            </div>
                        </div>
                        <div>
                            <div class="px-5 pb-8">
                                <div class="mt-6 px-4 py-4 bg-primary-800 rounded-lg">
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3 text-primary-100">Custom high-performance modules</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3 text-primary-100">On-premise hosting</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3 text-primary-100">24/7 priority support</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3 text-primary-100">Enterprise Pricing</span>
                                    </div>
                                    <div class="flex items-center mb-3">
                                        <i class="fal fa-check fa-fw block h-10 w-10 text-primary-500"></i>
                                        <span class="ml-3 text-primary-100">DRM free</span>
                                    </div>
                                </div>
                            </div>
                            <div class="px-5 pt-5 pb-5 bg-primary-800 rounded-b-lg">
                                <div class="flex justify-between items-center">
                                    <span class="font-bold tracking-tight text-primary-100 text-5xl">$??</span>
                                </div>
                                <div class="flex justify-between items-center text-center mb-3">
                                    <a href="#" class="block w-full items-center text-white bg-primary-500 font-medium px-5 py-2 rounded-lg mr-1 text-white">Contact Us</a>
                                </div>
                                <div class="text-primary-200 text-sm">*Price does not include daemon self-hosting costs.</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>


        <div class="py-12">
            <div class="max-w-xl mx-auto">
                <div class="tracking-tight text-center leading-snug text-gray-900">
                    <h1 class="text-2xl lg:text-3xl font-bold">Ready to try Odin?</h1>
                    <p class="mt-2 text-lg text-gray-700 text-center">
                        Deploy our panel in less than 60 seconds.
                    </p>
                    <a href="#" class="mt-4 inline-flex items-center text-white text-lg font-medium bg-primary-500 font-medium px-5 py-2 rounded-lg">
                        Get started for free
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection
