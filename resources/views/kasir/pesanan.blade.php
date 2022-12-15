<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>caPOS | Pesanan</title>
    <style>
        .addorder {
            border: 2px solid white;
        }
        ::-webkit-scrollbar {
            width: 5px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #1E2541;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #F0719C;
            border-radius: 1rem;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #FFA46B ;
        }
    </style>
</head>
<body onload="alert('Pesaanan ditambahkan');" class="font-body">
    <div class="flex">
        {{-- sidebar --}}
        <div class="bg-warna-2">
            <div class="flex h-screen w-36 bg-sidebar rounded-r-3xl flex-col justify-between p-10">
                <div class="flex items-center flex-col">
                    <div class="pb-10">
                        <div class="sidebar-active">
                            <button>
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
                            </button>
                        </div>
                    </div>
                    <div class="pb-10">
                        <button class="flex flex-col items-center">
                            <svg width="45" height="45" viewBox="0 0 53 54" fill="none" xmlns="http://www.w3.org/2000/svg" class="m-0">
                                <path d="M46.1541 22.1623L47.457 44.4148C47.5012 45.0223 47.2141 45.4273 47.0595 45.6073C46.8829 45.8098 46.5074 46.1248 45.8891 46.1248H39.8604L44.6304 22.1623H46.1541ZM48.5833 13.4998L48.5612 13.5448C48.6054 14.0848 48.5612 14.6473 48.4287 15.2098L32.1533 45.6523C31.895 46.7532 31.2787 47.7326 30.4046 48.4312C29.5305 49.1298 28.45 49.5064 27.3391 49.4998H45.8891C46.5629 49.5018 47.2297 49.3617 47.8477 49.0882C48.4657 48.8148 49.0215 48.4139 49.4799 47.9108C49.9384 47.4078 50.2896 46.8135 50.5116 46.1653C50.7335 45.5172 50.8214 44.8292 50.7695 44.1448L48.5833 13.4998ZM25.2854 5.04202C25.5062 4.14202 24.9541 3.21952 24.0708 2.99452C23.1874 2.79202 22.282 3.33202 22.0612 4.23202L20.957 8.88952H24.3579L25.2854 5.04202ZM39.8604 4.97002C40.0591 4.04752 39.4849 3.17002 38.5795 2.96752C38.3664 2.92137 38.1463 2.91853 37.9321 2.95918C37.7178 2.99982 37.5136 3.08315 37.331 3.20438C37.1484 3.32561 36.9911 3.48237 36.8681 3.66566C36.7451 3.84896 36.6588 4.05518 36.6141 4.27252L35.6204 8.93002H39.0212L39.8604 4.97002Z" fill="#354374"/>
                                <path d="M48.1859 11.9947C47.4572 10.1947 45.7347 8.91219 43.6147 8.91219H39.0214L37.7847 14.7397C37.608 15.5272 36.9234 16.0672 36.1726 16.0672C36.0622 16.0672 35.9297 16.0672 35.8193 16.0222C35.3928 15.9224 35.021 15.6579 34.7821 15.2844C34.5432 14.9109 34.4558 14.4575 34.5384 14.0197L35.6205 8.88969H24.358L22.9668 14.7397C22.7901 15.5047 22.1055 16.0222 21.3547 16.0222C21.2222 16.0222 21.0897 15.9997 20.9572 15.9772C20.7452 15.9245 20.5455 15.8297 20.3696 15.6981C20.1938 15.5666 20.0451 15.4009 19.9322 15.2106C19.8194 15.0204 19.7445 14.8093 19.712 14.5894C19.6794 14.3696 19.6898 14.1454 19.7426 13.9297L20.9351 8.86719H16.4522C14.288 8.86719 12.3668 10.3072 11.7264 12.4222L2.42928 42.9097C1.45761 46.1722 3.82053 49.5022 7.15511 49.5022H36.1726C38.4693 49.5022 40.4568 47.9272 40.9868 45.6547L48.4289 15.2122C48.5614 14.6497 48.6055 14.0872 48.5614 13.5472C48.5282 13.011 48.401 12.4852 48.1859 11.9947ZM32.4626 37.6897H14.7959C13.8905 37.6897 13.1397 36.9247 13.1397 36.0022C13.1397 35.0797 13.8905 34.3147 14.7959 34.3147H32.4626C33.368 34.3147 34.1189 35.0797 34.1189 36.0022C34.1189 36.9247 33.368 37.6897 32.4626 37.6897ZM34.6709 28.6897H17.0043C16.0989 28.6897 15.348 27.9247 15.348 27.0022C15.348 26.0797 16.0989 25.3147 17.0043 25.3147H34.6709C35.5764 25.3147 36.3272 26.0797 36.3272 27.0022C36.3272 27.9247 35.5764 28.6897 34.6709 28.6897Z" fill="#354374"/>
                            </svg>
                            <p class="text-sm text-primary m-1">PESANAN</p>
                        </button>
                    </div>
                    {{-- <div class="pb-10">
                        <button class="flex flex-col items-center">
                            <svg width="45" height="45" viewBox="0 0 53 53" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M35.3333 50.2399H17.6667C9.60625 50.2399 4.96875 45.6024 4.96875 37.542V15.4587C4.96875 7.39824 9.60625 2.76074 17.6667 2.76074H35.3333C43.3937 2.76074 48.0312 7.39824 48.0312 15.4587V37.542C48.0312 45.6024 43.3937 50.2399 35.3333 50.2399ZM17.6667 6.07324C11.3508 6.07324 8.28125 9.14283 8.28125 15.4587V37.542C8.28125 43.8578 11.3508 46.9274 17.6667 46.9274H35.3333C41.6492 46.9274 44.7188 43.8578 44.7188 37.542V15.4587C44.7188 9.14283 41.6492 6.07324 35.3333 6.07324H17.6667Z" fill="#354374"/>
                                <path d="M19.8752 24.5349C19.514 24.5367 19.1561 24.4672 18.8218 24.3305C18.4876 24.1937 18.1836 23.9924 17.9272 23.7381C17.6708 23.4838 17.4671 23.1814 17.3277 22.8482C17.1883 22.5151 17.1159 22.1577 17.1147 21.7966V4.41699C17.1147 3.51158 17.8656 2.76074 18.771 2.76074H34.2293C35.1347 2.76074 35.8856 3.51158 35.8856 4.41699V21.7745C35.8856 22.8787 35.2452 23.8724 34.2293 24.292C33.2356 24.7337 32.0652 24.5349 31.2481 23.7841L26.5002 19.4337L21.7522 23.8062C21.2222 24.292 20.5597 24.5349 19.8752 24.5349ZM26.5002 15.9224C27.1627 15.9224 27.8472 16.1653 28.3772 16.6512L32.5731 20.5157V6.07324H20.4272V20.5157L24.6231 16.6512C25.1531 16.1653 25.8377 15.9224 26.5002 15.9224ZM38.646 32.5732H29.2606C28.3552 32.5732 27.6043 31.8224 27.6043 30.917C27.6043 30.0116 28.3552 29.2607 29.2606 29.2607H38.646C39.5514 29.2607 40.3022 30.0116 40.3022 30.917C40.3022 31.8224 39.5514 32.5732 38.646 32.5732ZM38.646 41.4066H19.8752C18.9697 41.4066 18.2189 40.6557 18.2189 39.7503C18.2189 38.8449 18.9697 38.0941 19.8752 38.0941H38.646C39.5514 38.0941 40.3022 38.8449 40.3022 39.7503C40.3022 40.6557 39.5514 41.4066 38.646 41.4066Z" fill="#354374"/>
                            </svg>
                            <p class="text-sm text-primary m-1">RIWAYAT</p>
                        </button>
                    </div> --}}
                </div>
                <div>
                    <a href="{{ route('logout') }}">
                        <svg width="41" height="41" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20.8125 16.625C21.7812 5.375 27.5625 0.78125 40.2187 0.78125H40.625C54.5937 0.78125 60.1875 6.375 60.1875 20.3438V40.7188C60.1875 54.6875 54.5937 60.2813 40.625 60.2813H40.2187C27.6562 60.2813 21.875 55.75 20.8437 44.6875M39.875 30.5H4.3125M11.2812 20.0313L0.8125 30.5L11.2812 40.9688" stroke="#354374" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        {{-- end sidebar --}}
        {{-- list menu --}}
        <div class="w-1/2 bg-primary">
            <div class="bg-warna-2 h-screen py-10 rounded-r-3xl flex flex-col items-center">
                {{-- <div class="flex items-center justify-between w-8/12  bg-primary pr-4 rounded-2xl mb-6">
                    <input type="text" placeholder="Cari Menu " style="background-color: transparent" class="w-full rounded-2xl py-2.5 pl-8 text-secondary bg-transparent text-md">
                    <svg width="29" height="29" viewBox="0 0 29 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M13.8959 26.2816C7.06883 26.2816 1.5105 20.7232 1.5105 13.8962C1.5105 7.06908 7.06883 1.51074 13.8959 1.51074C20.723 1.51074 26.2813 7.06908 26.2813 13.8962C26.2813 20.7232 20.723 26.2816 13.8959 26.2816ZM13.8959 3.32324C8.05967 3.32324 3.323 8.07199 3.323 13.8962C3.323 19.7203 8.05967 24.4691 13.8959 24.4691C19.7322 24.4691 24.4688 19.7203 24.4688 13.8962C24.4688 8.07199 19.7322 3.32324 13.8959 3.32324ZM26.5834 27.4911C26.3538 27.4911 26.1242 27.4065 25.943 27.2253L23.5263 24.8086C23.3578 24.6381 23.2633 24.408 23.2633 24.1682C23.2633 23.9284 23.3578 23.6983 23.5263 23.5278C23.8767 23.1774 24.4567 23.1774 24.8072 23.5278L27.2238 25.9445C27.5742 26.2949 27.5742 26.8749 27.2238 27.2253C27.0426 27.4065 26.813 27.4911 26.5834 27.4911Z" fill="#EEFDFF"/>
                    </svg>
                </div> --}}
                <h1 class="text-secondary text-2xl font-semibold mr-80 pb-4">Daftar Menu</h1>
                <div class="overflow-auto w-full flex flex-col items-center">
                    
                    {{-- daftar menu --}}
                    @foreach($menu as $mn)
                    <button id="{{$mn->id_menu}}" data-idmenu="{{$mn->id_menu}}" data-namamenu='{{$mn->nama_menu}}' data-hargamenu="Rp. {{$mn->harga}}" data-gambar = '{{ asset('storage/'. $mn->gambar) }}' data-hg={{$mn->harga}}  onclick="cobu(this);" class="btn w-8/12 mt-10 shadow rounded-2xl bg-primary p-4 flex">
                        <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url('{{ asset('storage/'. $mn->gambar) }}')"></div>
                        <div class="py-3 text-secondary">
                            <h1 class="font-semibold tracking-wider">{{$mn->nama_menu}}</h1>
                            <p class="font-extralight text-left">Rp. {{$mn->harga}}</p>
                        </div>
                    </button>
                    {{-- end daftar menu --}}
                    @endforeach
                </div>
            </div>
        </div>
        {{-- end list menu --}}


        {{-- detail pesanan --}}
        <div class="bg-primary w-1/2 h-screen px-16 flex flex-col justify-between  overflow-auto scrollbar-hide">
            <div>
                <div class="bg-primary sticky top-0 py-10">

                    <h1 class="text-4xl text-secondary  font-semibold tracking-wide">Detail Pesanan</h1>
                </div>
                <div id='listmenu' class="min-h-screen"></div>

            

            {{-- total harga --}}
            <div class="flex items-center pb-10 pt-4 bg-primary justify-between sticky bottom-0 justify-self-end text-secondary">
                <div>
                    <p class="font-light">Total Harga</p>
                    <h1 id="totalhg" class="text-4xl font-bold text-warna-3 ">Rp. 0</h1>
                </div>
                <div>
                    <form action="{{ route('pemesanan.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <input id="valMenu" type="hidden" name="nama_menu">
                        <input id="valJml" type="hidden" name="jumlah">
                        <button type="submit" onclick="tmbh();" class="bg-sidebar text-secondary text-xl py-5 px-10 rounded-xl font-semibold">Submit</button>
                    </form>
                </div>
            </div>
            {{-- end total harga --}}
        </div>
        {{-- end detail pesanan --}}

        
    </div>
    <script>

        let valM = document.getElementById('valMenu');
        let valJ = document.getElementById('valJml');

        let lm = document.getElementById('listmenu');  
        var ttlObj = document.getElementById('totalhg');  
        let lstm = [];
        let lstidm=[];
        let lstNm=[];
        let lstVal=[];
        let lsthg=[];
        let lstGb=[];

        let buttons = document.querySelectorAll('.btn');
        var total =0;
        
        function tmbh(d)
        {
            valM.value = lstidm;
            valJ.value = lstVal;
            console.log(valJ.value)
            
            // let token = d.getAttribute("data-token");
            // console.log(token);
            // const xhttp = new XMLHttpRequest();
            // xhttp.open("POST", [token,"http://localhost:8000/register/"]);
            // xhttp.send(lstidm);
        }

        buttons.forEach(button => {
            button.addEventListener('click', function (){
                this.classList.add('addorder');
            });
        })


        function hasClass( target, className ) {
            return new RegExp('(\\s|^)' + className + '(\\s|$)').test(target.className);
        }

        function cobu(d){
            const ss =  d.getAttribute("data-idmenu");
            const nama =d.getAttribute("data-namamenu");
            const harga =d.getAttribute("data-hargamenu");
            const gambar =d.getAttribute("data-gambar");
            const hg =d.getAttribute("data-hg");
            let da = document.getElementById(d.getAttribute("data-idm")+"-inp");



            // let oo =   ;

            // console.log(hasClass(d,"terklik"));
            if (!hasClass(d,"terklik")) {
                lstidm.push(ss);
                lstVal.push(1);
                lstNm.push(nama);
                lsthg.push(hg);

                lstGb.push(gambar);
                console.log(lsthg);
                lstm.push(`<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${ss} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${gambar})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${nama}</h1>
                                        <p class="font-extralight">${hg}</p>
                                    </div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${ss} data-hg=${hg} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${ss}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=1>
                            </div>
                        </div>`);

                let cobustr = '';
                for(let i=0;i<lstm.length;i++)
                {
                    cobustr = `<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${lstidm[i]} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${lstGb[i]})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${lstNm[i]}</h1>
                                        <p class="font-extralight">Rp. ${lsthg[i]}</p>
                                    </div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${lstidm[i]}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=${lstVal[i]}>
                            </div>
                        </div>`+cobustr ;
                }
                console.log(lstidm);
                console.log(lstVal);
                lm.innerHTML = cobustr;
                d.classList.add('terklik');
                total+= Number(hg);
                ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
            }
            
            // alert(d.getAttribute("data-idmenu")+cobustr);
        }



        function hps(d)
        {
            let buttons = document.querySelectorAll('.addorder');
            const hg = d.getAttribute("data-hg");

            let ssd = document.getElementById(d.getAttribute("data-idm"));
            let da = document.getElementById(d.getAttribute("data-idm")+"-inp");
            ssd.classList.remove('addorder');
            ssd.classList.remove('terklik');

            let a1 = lstidm.indexOf(d.getAttribute("data-idm"));
            total-=Number(lsthg[a1]*da.value);
            lstm.splice(a1,1);
            lstidm.splice(a1,1);
            lstVal.splice(a1,1);
            lstNm.splice(a1,1);
            lsthg.splice(a1,1);
            lstGb.splice(a1,1);

            let cobustr = '';
            for(let i=0;i<lstm.length;i++)
            {
                cobustr = `<div class="bg-warna-2 rounded-3xl flex flex-col items-center ${lstidm[i]} mb-10 py-4">
                            <div class="flex justify-center items-center w-8/12 mb-4">
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='krval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">-</button>
                                </div>
                                <div class="shadow rounded-2xl bg-primary p-4 flex items-center mx-6">
                                    <div class="rounded-3xl mr-8 w-20 h-20 bg-cover bg-center bg-componen" style="background-image: url(${lstGb[i]})"></div>
                                    <div class="text-secondary mr-12 ">
                                        <h1 class="font-semibold tracking-wider break-words w-48"> ${lstNm[i]}</h1>
                                        <p class="font-extralight">Rp. ${lsthg[i]}</p>
                                    </div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='hps(this);'>
                                        <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M29.75 8.47134C25.0325 8.00384 20.2867 7.76301 15.555 7.76301C12.75 7.76301 9.945 7.90468 7.14 8.18801L4.25 8.47134M12.0417 7.04051L12.3533 5.18467C12.58 3.83884 12.75 2.83301 15.1442 2.83301H18.8558C21.25 2.83301 21.4342 3.89551 21.6467 5.19884L21.9583 7.04051M26.7042 12.948L25.7833 27.2138C25.6275 29.438 25.5 31.1663 21.5475 31.1663H12.4525C8.5 31.1663 8.3725 29.438 8.21667 27.2138L7.29583 12.948M14.6342 23.3747H19.3517M13.4583 17.708H20.5417" stroke="#F0719C" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                                <div>
                                    <button data-idm=${lstidm[i]} data-hg=${lsthg[i]} onclick='tmbhval(this);' class="submit px-4 py-1.5 text-secondary font-semibold text-2xl bg-primary rounded-full">+</button>
                                </div>
                            </div>

                            <div class="w-8/12 flex items-center justify-between">
                                <div class="text-secondary font-semibold tracking-wide">Jumlah Pesan</div>
                                <input id=${lstidm[i]}-inp disabled type="number" min="1" class="bg-primary text-secondary text-3xl w-20 py-1.5 px-1 text-center rounded-xl font-bold" value=${lstVal[i]}>
                            </div>
                        </div>`+cobustr ;   
            }
            console.log(cobustr);
            lm.innerHTML = cobustr;
            
            ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');

        }






        function tmbhval (d) {
            const nama = d.getAttribute("data-idm");
            const hg = d.getAttribute("data-hg");

            let ssd = document.getElementById(nama+"-inp");
            let a1  = lstidm.indexOf(nama);
            ssd.value = Number(ssd.value)+1;
            lstVal[a1]+=1;
            total+= Number(hg);
            console.log(hg);
            ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
        }





        function krval (d) {
            const nama = d.getAttribute("data-idm");
            const hg = d.getAttribute("data-hg");

            let ssd = document.getElementById(nama+"-inp");
            let a1  = lstidm.indexOf(nama);
            lstVal[a1]-=1;
            if(Number(ssd.value) > 1)
            {
                ssd.value = Number(ssd.value)-1;
                total-=Number(hg);
                console.log(total);
                ttlObj.innerHTML = formatRupiah(String(total), 'Rp. ');
                
            }
            

        }

        /* Fungsi formatRupiah */
		function formatRupiah(angka, prefix){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
		}


    </script>
</body>
</html>