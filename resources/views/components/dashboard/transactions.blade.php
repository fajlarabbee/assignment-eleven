<div class="panel h-full">
    <div class="mb-5 flex items-center justify-between dark:text-white-light">
        <h5 class="text-lg font-semibold">Transactions</h5>
        <div x-data="dropdown" @click.outside="open = false" class="dropdown">
            <a href="javascript:;" @click="toggle">
                <svg
                    class="h-5 w-5 text-black/70 hover:!text-primary dark:text-white/70"
                    viewBox="0 0 24 24"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <circle cx="5" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                    <circle opacity="0.5" cx="12" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                    <circle cx="19" cy="12" r="2" stroke="currentColor" stroke-width="1.5" />
                </svg>
            </a>
            <ul x-cloak x-show="open" x-transition x-transition.duration.300ms class="ltr:right-0 rtl:left-0">
                <li><a href="javascript:;" @click="toggle">View Report</a></li>
                <li><a href="javascript:;" @click="toggle">Edit Report</a></li>
                <li><a href="javascript:;" @click="toggle">Mark as Done</a></li>
            </ul>
        </div>
    </div>
    <div>
        <div class="space-y-6">
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-success-light text-base text-success dark:bg-success dark:text-success-light"
                                                >SP</span
                                                >
                <div class="flex-1 px-3">
                    <div>Shaun Park</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$36.11</span>
            </div>
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-warning-light text-warning dark:bg-warning dark:text-warning-light"
                                                >
                                                    <svg
                                                        width="24"
                                                        height="24"
                                                        viewBox="0 0 24 24"
                                                        fill="none"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        class="h-6 w-6"
                                                    >
                                                        <path
                                                            d="M2 10C2 7.17157 2 5.75736 2.87868 4.87868C3.75736 4 5.17157 4 8 4H13C15.8284 4 17.2426 4 18.1213 4.87868C19 5.75736 19 7.17157 19 10C19 12.8284 19 14.2426 18.1213 15.1213C17.2426 16 15.8284 16 13 16H8C5.17157 16 3.75736 16 2.87868 15.1213C2 14.2426 2 12.8284 2 10Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M19.0003 7.07617C19.9754 7.17208 20.6317 7.38885 21.1216 7.87873C22.0003 8.75741 22.0003 10.1716 22.0003 13.0001C22.0003 15.8285 22.0003 17.2427 21.1216 18.1214C20.2429 19.0001 18.8287 19.0001 16.0003 19.0001H11.0003C8.17187 19.0001 6.75766 19.0001 5.87898 18.1214C5.38909 17.6315 5.17233 16.9751 5.07642 16"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            d="M13 10C13 11.3807 11.8807 12.5 10.5 12.5C9.11929 12.5 8 11.3807 8 10C8 8.61929 9.11929 7.5 10.5 7.5C11.8807 7.5 13 8.61929 13 10Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path opacity="0.5" d="M16 12L16 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                        <path opacity="0.5" d="M5 12L5 8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                                                    </svg>
                                                </span>
                <div class="flex-1 px-3">
                    <div>Cash withdrawal</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$16.44</span>
            </div>
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-danger-light text-danger dark:bg-danger dark:text-danger-light"
                                                >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="12" cy="6" r="4" stroke="currentColor" stroke-width="1.5" />
                                                        <path
                                                            opacity="0.5"
                                                            d="M20 17.5C20 19.9853 20 22 12 22C4 22 4 19.9853 4 17.5C4 15.0147 7.58172 13 12 13C16.4183 13 20 15.0147 20 17.5Z"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                    </svg>
                                                </span>
                <div class="flex-1 px-3">
                    <div>Amy Diaz</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$66.44</span>
            </div>
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-secondary-light text-secondary dark:bg-secondary dark:text-secondary-light"
                                                >
                                                    <svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        width="1em"
                                                        height="1em"
                                                        preserveAspectRatio="xMidYMid meet"
                                                        viewBox="0 0 24 24"
                                                    >
                                                        <path
                                                            fill="currentColor"
                                                            d="M5.398 0v.006c3.028 8.556 5.37 15.175 8.348 23.596c2.344.058 4.85.398 4.854.398c-2.8-7.924-5.923-16.747-8.487-24zm8.489 0v9.63L18.6 22.951c-.043-7.86-.004-15.913.002-22.95zM5.398 1.05V24c1.873-.225 2.81-.312 4.715-.398v-9.22z"
                                                        />
                                                    </svg>
                                                </span>
                <div class="flex-1 px-3">
                    <div>Netflix</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$32.00</span>
            </div>
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-info-light text-base text-info dark:bg-info dark:text-info-light"
                                                >DA</span
                                                >
                <div class="flex-1 px-3">
                    <div>Daisy Anderson</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">10 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-success ltr:ml-auto rtl:mr-auto">+$10.08</span>
            </div>
            <div class="flex">
                                                <span
                                                    class="grid h-9 w-9 shrink-0 place-content-center rounded-md bg-primary-light text-primary dark:bg-primary dark:text-primary-light"
                                                >
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M13.926 9.70541C13.5474 9.33386 13.5474 8.74151 13.5474 7.55682V7.24712C13.5474 3.96249 13.5474 2.32018 12.6241 2.03721C11.7007 1.75425 10.711 3.09327 8.73167 5.77133L5.66953 9.91436C4.3848 11.6526 3.74244 12.5217 4.09639 13.205C4.10225 13.2164 4.10829 13.2276 4.1145 13.2387C4.48945 13.9117 5.59888 13.9117 7.81775 13.9117C9.05079 13.9117 9.6673 13.9117 10.054 14.2754"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                        <path
                                                            opacity="0.5"
                                                            d="M13.9259 9.70557L13.9459 9.72481C14.3326 10.0885 14.9492 10.0885 16.1822 10.0885C18.4011 10.0885 19.5105 10.0885 19.8854 10.7615C19.8917 10.7726 19.8977 10.7838 19.9036 10.7951C20.2575 11.4785 19.6151 12.3476 18.3304 14.0858L15.2682 18.2288C13.2888 20.9069 12.2991 22.2459 11.3758 21.9629C10.4524 21.68 10.4524 20.0376 10.4525 16.753L10.4525 16.4434C10.4525 15.2587 10.4525 14.6663 10.074 14.2948L10.054 14.2755"
                                                            stroke="currentColor"
                                                            stroke-width="1.5"
                                                        />
                                                    </svg>
                                                </span>
                <div class="flex-1 px-3">
                    <div>Electricity Bill</div>
                    <div class="text-xs text-white-dark dark:text-gray-500">04 Jan 1:00PM</div>
                </div>
                <span class="whitespace-pre px-1 text-base text-danger ltr:ml-auto rtl:mr-auto">-$22.00</span>
            </div>
        </div>
    </div>
</div>
