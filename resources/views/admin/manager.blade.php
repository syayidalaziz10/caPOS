<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>caPOS | Manajemen Manajer</title>
</head>
<body class="font-body bg-primary">
    <div class="flex">


        {{-- sidebar --}}
        <div class="flex h-screen w-36 bg-sidebar rounded-r-3xl flex-col justify-between p-10">
            <div class="flex items-center flex-col">
                <div class="pb-10">
                    <div class="sidebar-active">
                        <a href="{{ url('/admin/') }}">
                            <svg width="65" height="65" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M34.8804 0.42762C32.1711 0.634804 30.2267 0.95356 27.7883 1.57512C20.7917 3.37606 14.0661 7.48793 9.69919 12.6118C5.33232 17.7437 2.48747 23.8398 1.33201 30.5415C0.630756 34.6375 0.710444 38.2632 1.61091 42.6939C2.57513 47.4751 4.77451 52.5114 7.65919 56.5675C10.249 60.1932 12.8787 62.7273 16.7117 65.2773C20.465 67.7715 24.9833 69.6761 29.3422 70.5925C34.49 71.6762 38.1556 71.6603 43.6859 70.5287C43.7975 70.5048 44.427 70.3454 45.0804 70.1701C49.2322 69.0784 53.3679 67.142 56.9459 64.6318C60.5398 62.0978 63.1456 59.4123 65.6558 55.6431C68.8672 50.83 70.9072 45.2837 71.6164 39.4426C71.9192 36.9564 71.9272 35.0279 71.6483 32.5736C70.9789 26.6129 68.8034 20.74 65.4565 15.8392C64.8509 14.9547 63.9425 13.7275 63.5361 13.2493C63.3767 13.0661 63.0898 12.7234 62.8906 12.4843C62.4842 11.9903 60.492 9.98215 59.9023 9.46419C53.5273 3.9259 45.0565 0.594963 36.9125 0.42762C36.012 0.411682 35.1036 0.411682 34.8804 0.42762ZM43.0006 11.5122C43.0644 11.6636 43.0564 14.3729 42.9926 14.5323C42.9687 14.612 42.8014 14.6439 42.4826 14.6439H42.0125V15.7595V16.8751H43.2875H44.5625V21.4412C44.5625 23.9912 44.5943 26.0392 44.6342 26.087C44.6979 26.1587 44.8812 26.4934 45.8215 28.2704C46.0606 28.7326 46.3236 29.1948 46.3953 29.3064C46.467 29.4179 46.7698 29.9598 47.0567 30.5176C47.3515 31.0754 47.6623 31.6492 47.75 31.7926C47.8934 32.0317 47.9093 32.1911 47.9093 33.8247V35.6017H35.7968H23.6843V33.9203V32.2389L23.9712 31.705C24.1306 31.4181 24.4095 30.9081 24.5848 30.5814C24.7522 30.2547 24.9275 29.9439 24.9593 29.904C24.9912 29.8562 25.2223 29.4259 25.4773 28.9478C25.7323 28.4617 26.2025 27.6011 26.5212 27.0273L27.1109 25.9754V21.4253V16.8751L32.3942 16.8592L37.6695 16.8353L37.6934 15.7436L37.7173 14.6518L37.2153 14.6279L36.7133 14.604L36.6894 13.09C36.6814 12.2612 36.6894 11.5361 36.7053 11.4803C36.7372 11.4006 37.3986 11.3767 39.8529 11.3767C42.6819 11.3767 42.9528 11.3847 43.0006 11.5122ZM27.7006 39.6976C28.2903 39.8809 28.5293 40.2475 28.4417 40.8451C28.3859 41.1798 28.1389 41.4189 27.852 41.4189C27.7404 41.4189 27.2703 41.3232 26.8001 41.2037C26.067 41.0125 25.804 40.9886 24.8398 40.9886C23.6047 40.9965 23.1903 41.0842 22.1942 41.5384C21.4531 41.8811 20.8873 42.415 20.5526 43.0843C20.3136 43.5704 20.2976 43.6661 20.2976 44.4072C20.2976 45.0526 20.3375 45.2757 20.4729 45.5786C20.8873 46.495 21.8993 47.5229 22.8476 47.9931C23.6047 48.3756 24.3537 48.4393 25.1984 48.2082C25.5251 48.1126 26.33 47.8975 26.9834 47.7142C27.8998 47.4592 28.1867 47.4114 28.2743 47.4831C28.3381 47.5309 28.3859 47.6026 28.3859 47.6345C28.3859 47.7779 27.9476 48.2082 27.6368 48.3676C27.0073 48.6864 25.6128 49.1167 24.3059 49.3956C23.6923 49.5231 22.4253 49.4434 21.7718 49.2362C20.6323 48.8776 19.5087 48.0011 19.0784 47.1404C18.5843 46.1762 18.4728 45.3793 18.7278 44.6462C18.927 44.0725 19.8673 42.6939 20.5287 41.9926C21.3097 41.1718 22.3137 40.5025 23.3098 40.1518C24.2501 39.8092 24.8637 39.7215 27.1189 39.594C27.2304 39.594 27.4934 39.6339 27.7006 39.6976ZM39.7493 43.3393C39.9964 43.6182 39.9406 44.4151 39.582 45.5228C39.4226 46.0328 39.3031 46.4631 39.327 46.487C39.3429 46.5029 39.4545 46.3754 39.574 46.2001C39.9008 45.7061 40.7853 44.8056 41.2156 44.5267C41.6379 44.2557 42.2595 44.1203 42.5783 44.2239C42.9129 44.3354 43.0086 44.6223 43.0086 45.475C43.0086 46.4232 42.8731 46.7261 42.1161 47.5389C41.614 48.0648 41.5901 48.1126 41.7575 48.1525C42.5065 48.3357 40.849 49.1406 39.2075 49.3956L38.5062 49.4992L38.3389 49.8498C37.8209 50.9575 37.4862 52.0572 37.4543 52.7743C37.4304 53.1728 37.4304 53.1728 36.9922 53.3879C36.4981 53.627 36.0439 53.7306 35.7968 53.6509C35.6454 53.6031 35.6295 53.5473 35.6614 53.2286C35.6933 52.8381 35.9323 52.0412 36.3547 50.9017C36.6415 50.1207 36.9125 49.3637 36.9125 49.3318C36.9125 49.3239 36.7531 49.292 36.5618 49.2681C36.3626 49.2362 36.1395 49.1406 36.0678 49.0609C35.9403 48.9175 35.9403 48.8856 36.0598 48.6386C36.2033 48.3357 36.785 47.8975 37.1356 47.8257C37.3906 47.77 37.4623 47.6743 37.7014 46.997C37.8847 46.495 38.2831 44.9968 38.2433 44.957C38.1636 44.8693 37.3268 45.5706 36.9443 46.0407C36.4662 46.6304 36.3069 46.7579 36.0439 46.7579C35.7809 46.7579 35.749 46.4312 35.9801 45.9451C36.3547 45.1323 37.789 43.682 38.5859 43.3075C38.9923 43.1162 39.5581 43.1322 39.7493 43.3393ZM47.9014 43.8015C48.4672 44.3753 48.5787 44.7179 48.4751 45.6025C48.3556 46.6145 48.2839 46.9332 48.0448 47.3317C47.3117 48.5907 45.3753 49.6904 44.435 49.3876C43.6222 49.1247 43.3512 48.6386 43.5186 47.7301C43.654 46.989 43.7576 46.7101 44.0843 46.2001C44.4509 45.6264 45.5586 44.5187 45.9411 44.3354C46.1084 44.2637 46.3395 44.0884 46.459 43.9529C46.6662 43.7218 47.2001 43.419 47.4153 43.4111C47.4711 43.4111 47.6942 43.5864 47.9014 43.8015ZM52.7623 43.5784C52.9137 43.6342 53.0253 43.7378 53.0572 43.8493C53.1129 44.0725 52.9615 44.8295 52.834 44.9809C52.7225 45.1164 52.2842 45.1164 52.085 44.965C52.0053 44.9012 51.9097 44.8454 51.8778 44.8454C51.7503 44.8454 51.822 45.2917 51.9734 45.4829C52.0611 45.5945 52.1328 45.714 52.1328 45.7459C52.1328 45.7857 52.1965 45.9132 52.2842 46.0248C52.3639 46.1443 52.5153 46.4631 52.6109 46.742C52.7703 47.1882 52.7862 47.2918 52.7065 47.6345C52.5153 48.4473 51.7264 49.0848 50.5629 49.3557C50.0609 49.4753 49.9015 49.4832 49.519 49.4036C48.6106 49.2123 48.4034 48.782 48.8815 48.0648C49.1684 47.6425 49.4951 47.4353 49.774 47.507C49.8776 47.5309 50.0848 47.7461 50.2522 47.9931C50.4833 48.3357 50.5868 48.4314 50.7542 48.4314C50.9614 48.4314 50.9614 48.4314 50.9136 47.9293C50.8658 47.4432 50.7223 47.0926 50.2203 46.24C50.0928 46.0168 49.9892 45.73 49.9812 45.5945C49.9812 45.1164 51.1208 43.9848 51.9973 43.6103C52.3081 43.4748 52.4356 43.4668 52.7623 43.5784ZM34.8804 44.1282C35.4303 44.3912 35.4303 44.6622 34.8804 46.3675C34.3704 47.9612 34.3067 48.4234 34.482 49.284C34.5298 49.4992 34.5059 49.555 34.3306 49.6665C34.1633 49.7781 34.0198 49.794 33.6293 49.7542C33.3664 49.7303 33.0954 49.6665 33.0397 49.6187C32.9361 49.5311 32.7767 48.7262 32.7448 48.1206L32.7289 47.762L32.4898 48.025C31.7168 48.8537 29.8043 49.6426 29.1828 49.3876C28.7365 49.2043 28.6011 48.2959 28.9198 47.6186C29.1668 47.1086 29.7804 46.3914 30.5853 45.6901C32.4101 44.0964 33.7808 43.5943 34.8804 44.1282Z" fill="#354374"/>
                                <path d="M38.6655 14.8509C38.6177 14.9625 38.5938 15.2016 38.5938 15.3848L38.6097 15.7195L38.6655 15.4406C38.7053 15.2494 38.7292 15.4327 38.7372 16.0144L38.7452 16.875H39.8927H41.0481L41.072 15.8391C41.088 15.2653 41.088 14.7633 41.072 14.7234C41.0561 14.6756 40.578 14.6437 39.8927 14.6437H38.7452L38.6655 14.8509Z" fill="#354374"/>
                                <path d="M29.3978 19.6405C29.3101 19.7282 29.334 24.3501 29.4217 24.382C29.4615 24.3899 32.394 24.3899 35.9242 24.366L42.347 24.3262V21.9754V19.6246L35.9003 19.6007C32.3542 19.5927 29.4217 19.6087 29.3978 19.6405Z" fill="#354374"/>
                                <path d="M30.721 27.7683C30.8405 27.7843 31.0318 27.7843 31.1593 27.7683C31.2788 27.7524 31.1752 27.7364 30.9361 27.7364C30.6971 27.7364 30.5935 27.7524 30.721 27.7683Z" fill="#354374"/>
                                <path d="M35.3429 27.7683C35.55 27.7843 35.8847 27.7843 36.0999 27.7683C36.3071 27.7524 36.1318 27.7444 35.7174 27.7444C35.303 27.7444 35.1277 27.7524 35.3429 27.7683Z" fill="#354374"/>
                                <path d="M30.1231 28.9636C30.2188 28.9796 30.3622 28.9796 30.4419 28.9636C30.5136 28.9397 30.4339 28.9238 30.2586 28.9318C30.0833 28.9318 30.0195 28.9477 30.1231 28.9636Z" fill="#354374"/>
                                <path d="M30.7604 28.9636C30.8082 28.9796 30.9038 28.9796 30.9596 28.9636C31.0074 28.9397 30.9676 28.9238 30.856 28.9238C30.7444 28.9238 30.7046 28.9397 30.7604 28.9636Z" fill="#354374"/>
                                <path d="M35.7011 28.9641C35.7568 28.988 35.8286 28.98 35.8525 28.9561C35.8843 28.9322 35.8365 28.9083 35.7489 28.9163C35.6612 28.9163 35.6373 28.9402 35.7011 28.9641Z" fill="#354374"/>
                                <path d="M30.6808 30.0789C30.7286 30.0948 30.8242 30.0948 30.88 30.0789C30.9278 30.055 30.888 30.039 30.7764 30.039C30.6649 30.039 30.625 30.055 30.6808 30.0789Z" fill="#354374"/>
                                <path d="M40.8012 45.8258C40.2991 46.2322 39.6059 47.0689 39.4146 47.4992C39.1915 47.9773 39.303 48.073 40.0601 48.065C40.6657 48.065 40.6896 48.057 40.9127 47.7861C41.2395 47.4036 41.6937 46.4473 41.7495 46.0569C41.8371 45.3955 41.4466 45.2998 40.8012 45.8258Z" fill="#354374"/>
                                <path d="M46.2676 45.4586C45.7895 46.12 45.3433 47.379 45.3751 47.9687C45.3991 48.3831 45.407 48.3911 45.662 48.415C45.925 48.4389 46.2836 48.2476 46.5784 47.913C46.8414 47.6261 47.3514 46.8133 47.3514 46.6937C47.3514 46.63 47.208 46.3989 47.0326 46.1837C46.8573 45.9686 46.6741 45.6658 46.6183 45.5144C46.5705 45.363 46.4987 45.2434 46.4748 45.2434C46.4509 45.2434 46.3553 45.339 46.2676 45.4586Z" fill="#354374"/>
                                <path d="M33.4063 44.9096C32.6174 45.2921 31.1033 46.9815 30.8165 47.8023C30.7527 47.9856 30.7208 48.1609 30.7448 48.2007C30.8324 48.3442 31.1591 48.2645 31.4858 48.0334C31.9162 47.7146 32.8485 46.7584 33.2708 46.2006C33.4541 45.9615 33.6215 45.7463 33.6454 45.7224C33.7729 45.5949 33.9641 45.1487 33.9641 44.9734C33.9641 44.7263 33.8127 44.7104 33.4063 44.9096Z" fill="#354374"/>
                                </svg>
                        </a>
                    </div>
                </div>
                <div class="pb-10">
                    <a href="{{ url('/admin/') }}" class="flex flex-col items-center">
                        <svg width="40" height="36" viewBox="0 0 53 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M26.5 38.7501V31.6251M21.5946 2.69763L3.98082 15.8789C1.99832 17.3514 0.727482 20.4626 1.15957 22.7901L4.53998 41.6951C5.14998 45.0676 8.60665 47.7989 12.2666 47.7989H40.7333C44.3679 47.7989 47.85 45.0439 48.46 41.6951L51.8404 22.7901C52.2471 20.4626 50.9762 17.3514 49.0192 15.8789L31.4054 2.72138C28.6858 0.67888 24.2887 0.67888 21.5946 2.69763V2.69763Z" stroke="#354374" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="text-sm text-primary m-1">BERANDA</p>
                    </a>
                </div>
                <div class="pb-10">
                    <a href="{{ url('/admin/kasir/') }}" class="flex flex-col items-center">
                        <svg width="41" height="41" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M22.8797 5.42871C16.2191 5.42871 10.8043 10.8436 10.8043 17.5041C10.8043 24.0375 15.9141 29.3253 22.5746 29.5541C22.778 29.5287 22.9814 29.5287 23.1339 29.5541H23.3119C26.4371 29.4498 29.3993 28.1342 31.5722 25.8855C33.745 23.6367 34.9581 20.6311 34.9551 17.5041C34.9551 10.8436 29.5402 5.42871 22.8797 5.42871ZM35.794 36.3138C28.7013 31.5853 17.1343 31.5853 9.99078 36.3138C6.7622 38.4746 4.98267 41.3982 4.98267 44.5251C4.98267 47.6519 6.7622 50.55 9.96536 52.6855C13.5244 55.0751 18.2021 56.27 22.8797 56.27C27.5573 56.27 32.2349 55.0751 35.794 52.6855C38.9972 50.5246 40.7767 47.6265 40.7767 44.4742C40.7513 41.3473 38.9972 38.4492 35.794 36.3138ZM50.8184 18.9989C51.2251 23.9308 47.7169 28.2525 42.8613 28.8372H42.7342C42.5817 28.8372 42.4291 28.8372 42.302 28.888C39.8361 29.0152 37.5735 28.2271 35.8703 26.778C38.4887 24.4392 39.9886 20.931 39.6836 17.1177C39.5091 15.1348 38.8357 13.2283 37.7261 11.5757C39.0582 10.9277 40.5279 10.6134 42.0085 10.6601C43.4891 10.7067 44.9362 11.1129 46.2248 11.8436C47.5134 12.5742 48.605 13.6074 49.4052 14.854C50.2055 16.1005 50.6905 17.5231 50.8184 18.9989Z" stroke="#354374"/>
                            <path d="M55.8977 42.5197C55.6943 44.9856 54.1182 47.121 51.4743 48.5701C48.9321 49.9683 45.7289 50.6292 42.5512 50.553C44.3816 48.9006 45.4493 46.8414 45.6527 44.6551C45.9069 41.5028 44.407 38.4776 41.4072 36.0625C39.704 34.7151 37.721 33.6474 35.5602 32.8593C41.1784 31.2323 48.2457 32.3255 52.5929 35.8337C54.9317 37.7149 56.1265 40.0792 55.8977 42.5197Z" stroke="#354374"/>
                        </svg>
                        <p class="text-sm text-primary m-1">KASIR</p>
                    </a>
                </div>
                <div class="pb-10">
                    <a href="{{ url('/admin/manager/') }}" class="flex flex-col items-center">
                        <svg width="41" height="41" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M44.6116 47.6663C44.6116 39.2813 36.27 32.4997 26 32.4997C15.73 32.4997 7.38831 39.2813 7.38831 47.6663M26 25.9997C28.8732 25.9997 31.6287 24.8583 33.6603 22.8267C35.6919 20.795 36.8333 18.0395 36.8333 15.1663C36.8333 12.2932 35.6919 9.53766 33.6603 7.50602C31.6287 5.47437 28.8732 4.33301 26 4.33301C23.1268 4.33301 20.3713 5.47437 18.3397 7.50602C16.308 9.53766 15.1666 12.2932 15.1666 15.1663C15.1666 18.0395 16.308 20.795 18.3397 22.8267C20.3713 24.8583 23.1268 25.9997 26 25.9997V25.9997Z" fill="#354374" stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <p class="text-sm font-semibold text-primary m-1">MANAJER</p>
                    </a>
                </div>
                <div class="pb-10">
                    <a href="{{ url('/admin/') }}" class="flex flex-col items-center">
                        <svg width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.5 50.6C26.8125 50.6 26.125 50.4396 25.5521 50.1188C21.2667 47.7813 13.7271 45.3063 9.00629 44.6875L8.34171 44.5959C5.33962 44.2292 2.86462 41.4104 2.86462 38.3625V10.6792C2.86462 8.86879 3.57504 7.21879 4.88129 6.02712C6.18754 4.83546 7.88337 4.26254 9.67087 4.42295C14.7125 4.81254 22.3209 7.33337 26.6292 10.0375L27.1792 10.3584C27.3396 10.45 27.6834 10.45 27.8209 10.3813L28.1875 10.1521C32.4959 7.44795 40.1042 4.88129 45.1688 4.44587H45.4438C47.1167 4.28545 48.8355 4.88129 50.1188 6.07295C51.425 7.26462 52.1355 8.91462 52.1355 10.725V38.3855C52.1355 41.4563 49.6605 44.2521 46.6355 44.6188L45.8792 44.7105C41.1584 45.3292 33.5959 47.8271 29.4021 50.1417C28.8521 50.4625 28.1875 50.6 27.5 50.6ZM9.12087 7.83754C8.38754 7.83754 7.72296 8.08962 7.19587 8.57087C6.62296 9.09795 6.30212 9.8542 6.30212 10.6792V38.3625C6.30212 39.7146 7.47087 41.0209 8.77712 41.2042L9.46462 41.2959C14.6209 41.9834 22.5271 44.573 27.1105 47.0709C27.3167 47.1625 27.6146 47.1855 27.7292 47.1396C32.3125 44.5959 40.2646 41.9834 45.4438 41.2959L46.223 41.2042C47.5292 41.0438 48.698 39.7146 48.698 38.3625V10.7021C48.698 9.8542 48.3771 9.12087 47.8042 8.57087C47.2084 8.04379 46.4521 7.7917 45.6042 7.83754H45.3292C40.9521 8.22712 33.8938 10.5875 30.0438 12.9938L29.6771 13.2459C28.4167 14.025 26.6292 14.025 25.4146 13.2688L24.8646 12.948C20.9459 10.5417 13.8875 8.2042 9.39587 7.83754H9.12087Z" fill="#354374" fill-opacity="0.5"/>
                            <path d="M27.5 48.6709C26.5604 48.6709 25.7812 47.8917 25.7812 46.9522V12.5771C25.7812 11.6376 26.5604 10.8584 27.5 10.8584C28.4395 10.8584 29.2187 11.6376 29.2187 12.5771V46.9522C29.2187 47.9147 28.4395 48.6709 27.5 48.6709ZM17.7604 21.1709H12.6041C11.6645 21.1709 10.8854 20.3917 10.8854 19.4521C10.8854 18.5126 11.6645 17.7334 12.6041 17.7334H17.7604C18.7 17.7334 19.4791 18.5126 19.4791 19.4521C19.4791 20.3917 18.7 21.1709 17.7604 21.1709ZM19.4791 28.0459H12.6041C11.6645 28.0459 10.8854 27.2667 10.8854 26.3271C10.8854 25.3876 11.6645 24.6084 12.6041 24.6084H19.4791C20.4187 24.6084 21.1979 25.3876 21.1979 26.3271C21.1979 27.2667 20.4187 28.0459 19.4791 28.0459Z" fill="#354374" fill-opacity="0.5"/>
                        </svg>
                        <p class="text-sm text-primary m-1">MENU</p>
                    </a>
                </div>
            </div>
            <div>
                <button type="submit">
                    <svg width="41" height="41" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M20.8125 16.625C21.7812 5.375 27.5625 0.78125 40.2187 0.78125H40.625C54.5937 0.78125 60.1875 6.375 60.1875 20.3438V40.7188C60.1875 54.6875 54.5937 60.2813 40.625 60.2813H40.2187C27.6562 60.2813 21.875 55.75 20.8437 44.6875M39.875 30.5H4.3125M11.2812 20.0313L0.8125 30.5L11.2812 40.9688" stroke="#354374" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        
                </button>
            </div>
        </div>
        {{-- end sidebar --}}

        {{-- main menu --}}
        <div class="w-screen h-screen overflow-auto">
            <div class="w-full flex justify-center">
                <input type="text" placeholder="Cari User Manager" class="text-white w-10/12 rounded-2xl my-12 py-3 px-16 bg-warna-2 text-secondary text-md">
            </div>
            <div class="flex justify-between w-full items-center px-32">
                <h1 class="text-secondary text-2xl font-bold">Manajemen Manajer</h1>
                <button type="button" data-modal-toggle="staticModal" class="py-2 px-8 bg-componen rounded-lg font-semibold text-sm ">Tambah User</button>
            </div>
            <div class="flex justify-center rounded-xl my-10">
                <table class="w-10/12 text-center rounded-xl bg-warna-2 border-separate border-spacing-y-2 border-spacing-x-2 text-secondary">
                    <thead class="bg-componen">
                        <tr>
                            <th class="py-4 rounded-xl">No</th>
                            <th class="rounded-xl">Nama User</th>
                            <th class="rounded-xl">Username</th>
                            <th class="rounded-xl">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- data user --}}
                        <tr></tr>
                        
                        <tr>
                            <td class="bg-primary rounded-xl">1</td>
                            <td class="bg-primary rounded-xl ">Santi Rima</td>
                            <td class="bg-primary rounded-xl">santi777</td>
                            <td class="bg-primary rounded-xl rounded-r-xl">
                                <button class="p-3 bg-primary rounded-lg m-2">
                                    <svg  width="23" height="25" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg> 
                                </button>
                                <button class="p-3 bg-primary rounded-lg" data-modal-toggle="staticModalEdit">
                                    <svg width="20" height="25" viewBox="0 0 22 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.2719 2H8.55734C4.271 2 2.55646 4 2.55646 9V15C2.55646 20 4.271 22 8.55734 22H13.701C17.9873 22 19.7018 20 19.7018 15V13" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M14.5925 3.02025L7.83724 10.9003C7.58005 11.2003 7.32287 11.7903 7.27144 12.2203L6.90281 15.2303C6.76565 16.3203 7.42575 17.0803 8.36017 16.9303L10.9406 16.5003C11.3006 16.4403 11.8064 16.1403 12.0721 15.8403L18.8274 7.96025C19.9933 6.60025 20.542 5.02025 18.8274 3.02025C17.1129 1.02025 15.7584 1.66025 14.5925 3.02025V3.02025Z" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M13.6238 4.15039C13.9081 5.32786 14.4468 6.40046 15.1883 7.26544C15.9298 8.13042 16.8493 8.7588 17.8587 9.09039" stroke="#F0719C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        {{-- end main menu --}}

        {{-- modal tambah user --}}
        <div id="staticModal" data-modal-backdrop="static" aria-label="hidden" tabindex="-1" class=" hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-lg h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-xl shadow bg-warna-2">
                    <!-- Modal header -->
                    <div class="p-6">
    
                        <div class="flex justify-between items-start p-4 rounded-xl">
                            <h3 class="text-xl font-bold text-secondary">
                                TAMBAH USER MANAGER
                            </h3>
                            <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModal">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            {{-- form modal --}}
                            <div>
                                <label for="namalengkap" class="block text-secondary text-sm mb-2">Nama Lengkap</label>
                                <input type="text" id="namalengkap" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                                
                            </div>
                            <div>
                                <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                                <input type="text" id="username" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                            </div>
                            <div class="flex justify-center items-center space-x-12">
                                <div class="w-full">
                                    <label for="password" class=" text-secondary text-sm">Password</label>
                                    <input type="password" id="password" class=" block w-full mt-2 bg-primary py-2 px-6 rounded-xl text-secondary">
                                </div>
                                <div class="w-full">
                                    <label for="konfrimasi" class="block text-secondary text-sm mb-2">Konfirmasi Password</label>
                                    <input type="password" id="konfrimasi" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                                </div>
                            </div>
                            <div>
                                <label class="text-secondary text-sm">Gambar</label>
                                <label for="profil" class="block text-secondary mt-2">
                                    <div class="bg-primary rounded-xl w-full flex justify-center items-center py-7 relative cursor-pointer">
                                        <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                        </svg>
                                        <input type="file" id="profil" class="invisible absolute top-0">
                                    </div>
                                </label>
                            </div>
                        </div>
                    {{-- Modal footer --}}
                    <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                        <button data-modal-toggle="staticModal" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                        <button data-modal-toggle="staticModal" type="button" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah User</button>
                    </div>
                    {{-- end modal footer --}}
                </div>
            </div>
        </div>
        {{-- end modal tambah user --}}

        {{-- modal edit user --}}
        <div id="staticModalEdit" data-modal-backdrop="static" tabindex="-1" aria-label="hidden" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 p-4 w-full md:inset-0 h-modal md:h-full">
            <div class="relative w-full max-w-lg h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative rounded-xl shadow bg-warna-2">
                    <!-- Modal header -->
                    <div class="p-6">
    
                        <div class="flex justify-between items-start p-4 rounded-xl">
                            <h3 class="text-xl font-bold text-secondary">
                                EDIT USER MANAGER
                            </h3>
                            <button type="button" class="text-componen hover:bg-gray-200 hover:text-gray-900 rounded-lg bg-warna-4 text-sm p-1.5 ml-auto inline-flex items-center" data-modal-toggle="staticModalEdit">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-6 space-y-4">
                            {{-- form modal --}}
                            <div>
                                <label for="namalengkap" class="block text-secondary text-sm mb-2">Nama Lengkap</label>
                                <input type="text" id="namalengkap" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                                
                            </div>
                            <div>
                                <label for="username" class="block text-secondary text-sm mb-2">Username</label>
                                <input type="text" id="username" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                            </div>
                            <div class="flex justify-center items-center space-x-12">
                                <div class="w-full">
                                    <label for="password" class=" text-secondary text-sm">Password</label>
                                    <input type="password" id="password" class=" block w-full mt-2 bg-primary py-2 px-6 rounded-xl text-secondary">
                                </div>
                                <div class="w-full">
                                    <label for="konfrimasi" class="block text-secondary text-sm mb-2">Konfirmasi Password</label>
                                    <input type="password" id="konfrimasi" class="w-full bg-primary py-2 px-6 rounded-xl text-secondary">
                                </div>
                            </div>

                            <div class="flex justify-center items-center space-x-12">
                                
                                <div class="w-full">
                                    <label class="text-secondary text-sm">Gambar</label>
                                    <label class="block text-secondary mt-2">
                                        <div style="background-image: url('/img/profil.jpg'); " class="bg-primary rounded-xl w-full h-32 flex justify-center items-center relative bg-cover bg-center" >
                                        </div>
                                    </label>
                                </div>
                                <div class="w-full">
                                    <label class="text-secondary text-sm">Gambar</label>
                                    <label for="profil" class="block text-secondary mt-2">
                                        <div class="bg-primary rounded-xl w-full flex justify-center items-center py-7 relative cursor-pointer">
                                            <svg width="78" height="78" viewBox="0 0 78 78" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M76.8492 58.344L64.6394 29.835C60.5045 20.163 52.8978 19.773 47.7876 28.977L40.4149 42.276C36.6701 49.023 29.6875 49.608 24.8504 43.563L23.9922 42.471C18.96 36.153 11.8604 36.933 8.23257 44.148L1.52304 57.603C-3.19704 66.963 3.62952 78 14.0839 78H63.8593C74.0016 78 80.8281 67.665 76.8492 58.344ZM19.4671 23.4C22.5709 23.4 25.5475 22.1673 27.7422 19.9732C29.9369 17.779 31.1698 14.803 31.1698 11.7C31.1698 8.59697 29.9369 5.62103 27.7422 3.42685C25.5475 1.23268 22.5709 0 19.4671 0C16.3634 0 13.3868 1.23268 11.1921 3.42685C8.99742 5.62103 7.76446 8.59697 7.76446 11.7C7.76446 14.803 8.99742 17.779 11.1921 19.9732C13.3868 22.1673 16.3634 23.4 19.4671 23.4Z" fill="#BDCCD4" fill-opacity="0.5"/>
                                            </svg>
                                            <input type="file" id="profil" class="invisible absolute top-0">
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                        {{-- end form modal --}}
                    <!-- Modal footer -->
                    <div class="flex items-center justify-end w-full px-12 py-6 space-x-2 rounded-xl bg-warna-4">
                        <button data-modal-toggle="staticModalEdit" type="button" class="text-primary bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Batal</button>
                        <button data-modal-toggle="staticModalEdit" type="button" class="text-white bg-componen hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah User</button>
                    </div>
                    {{-- end modal user --}}
                </div>
            </div>
        </div>
        {{-- end modal edit user --}}


    </div>
    {{-- script modal --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>