
@section('sidebar')

{{-- sidebar --}}

<div class="flex items-center flex-col">
    <div class="pb-10">
        <div class="sidebar-active">
            <a href="{{ route('manajer') }}">
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
        <a href="{{ route('manajer') }}" class="flex flex-col items-center">
            <svg width="40" height="36" viewBox="0 0 53 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M26.5 38.7501V31.6251M21.5946 2.69763L3.98082 15.8789C1.99832 17.3514 0.727482 20.4626 1.15957 22.7901L4.53998 41.6951C5.14998 45.0676 8.60665 47.7989 12.2666 47.7989H40.7333C44.3679 47.7989 47.85 45.0439 48.46 41.6951L51.8404 22.7901C52.2471 20.4626 50.9762 17.3514 49.0192 15.8789L31.4054 2.72138C28.6858 0.67888 24.2887 0.67888 21.5946 2.69763V2.69763Z" @if($page == "beranda") fill="#354374" @else stroke="#354374" @endif stroke-opacity="0.5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <p class="text-sm @if($page == "beranda") font-bold @endif text-primary m-1">BERANDA</p>
        </a>
    </div>
    
    <div class="pb-10 text-center">
        <a href="{{ route('manajer.reportBulan') }}" class="flex flex-col items-center">
            <svg width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.5 50.6C26.8125 50.6 26.125 50.4396 25.5521 50.1188C21.2667 47.7813 13.7271 45.3063 9.00629 44.6875L8.34171 44.5959C5.33962 44.2292 2.86462 41.4104 2.86462 38.3625V10.6792C2.86462 8.86879 3.57504 7.21879 4.88129 6.02712C6.18754 4.83546 7.88337 4.26254 9.67087 4.42295C14.7125 4.81254 22.3209 7.33337 26.6292 10.0375L27.1792 10.3584C27.3396 10.45 27.6834 10.45 27.8209 10.3813L28.1875 10.1521C32.4959 7.44795 40.1042 4.88129 45.1688 4.44587H45.4438C47.1167 4.28545 48.8355 4.88129 50.1188 6.07295C51.425 7.26462 52.1355 8.91462 52.1355 10.725V38.3855C52.1355 41.4563 49.6605 44.2521 46.6355 44.6188L45.8792 44.7105C41.1584 45.3292 33.5959 47.8271 29.4021 50.1417C28.8521 50.4625 28.1875 50.6 27.5 50.6ZM9.12087 7.83754C8.38754 7.83754 7.72296 8.08962 7.19587 8.57087C6.62296 9.09795 6.30212 9.8542 6.30212 10.6792V38.3625C6.30212 39.7146 7.47087 41.0209 8.77712 41.2042L9.46462 41.2959C14.6209 41.9834 22.5271 44.573 27.1105 47.0709C27.3167 47.1625 27.6146 47.1855 27.7292 47.1396C32.3125 44.5959 40.2646 41.9834 45.4438 41.2959L46.223 41.2042C47.5292 41.0438 48.698 39.7146 48.698 38.3625V10.7021C48.698 9.8542 48.3771 9.12087 47.8042 8.57087C47.2084 8.04379 46.4521 7.7917 45.6042 7.83754H45.3292C40.9521 8.22712 33.8938 10.5875 30.0438 12.9938L29.6771 13.2459C28.4167 14.025 26.6292 14.025 25.4146 13.2688L24.8646 12.948C20.9459 10.5417 13.8875 8.2042 9.39587 7.83754H9.12087Z" @if($page == "bulanan") fill="#354374" @else stroke="#354374" @endif />
                <path d="M27.5 48.6709C26.5604 48.6709 25.7812 47.8917 25.7812 46.9522V12.5771C25.7812 11.6376 26.5604 10.8584 27.5 10.8584C28.4395 10.8584 29.2187 11.6376 29.2187 12.5771V46.9522C29.2187 47.9147 28.4395 48.6709 27.5 48.6709ZM17.7604 21.1709H12.6041C11.6645 21.1709 10.8854 20.3917 10.8854 19.4521C10.8854 18.5126 11.6645 17.7334 12.6041 17.7334H17.7604C18.7 17.7334 19.4791 18.5126 19.4791 19.4521C19.4791 20.3917 18.7 21.1709 17.7604 21.1709ZM19.4791 28.0459H12.6041C11.6645 28.0459 10.8854 27.2667 10.8854 26.3271C10.8854 25.3876 11.6645 24.6084 12.6041 24.6084H19.4791C20.4187 24.6084 21.1979 25.3876 21.1979 26.3271C21.1979 27.2667 20.4187 28.0459 19.4791 28.0459Z" @if($page == "bulanan") fill="#354374" @else stroke="#354374" @endif/>
            </svg>
            <p class="text-sm text-primary m-1 @if($page == "bulanan") font-bold @endif">REPORT BULANAN</p>
        </a>
    </div>

    <div class="pb-10 text-center">
        <a href="{{ route('manajer.reportHari') }}" class="flex flex-col items-center">
            <svg width="45" height="45" viewBox="0 0 55 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M27.5 50.6C26.8125 50.6 26.125 50.4396 25.5521 50.1188C21.2667 47.7813 13.7271 45.3063 9.00629 44.6875L8.34171 44.5959C5.33962 44.2292 2.86462 41.4104 2.86462 38.3625V10.6792C2.86462 8.86879 3.57504 7.21879 4.88129 6.02712C6.18754 4.83546 7.88337 4.26254 9.67087 4.42295C14.7125 4.81254 22.3209 7.33337 26.6292 10.0375L27.1792 10.3584C27.3396 10.45 27.6834 10.45 27.8209 10.3813L28.1875 10.1521C32.4959 7.44795 40.1042 4.88129 45.1688 4.44587H45.4438C47.1167 4.28545 48.8355 4.88129 50.1188 6.07295C51.425 7.26462 52.1355 8.91462 52.1355 10.725V38.3855C52.1355 41.4563 49.6605 44.2521 46.6355 44.6188L45.8792 44.7105C41.1584 45.3292 33.5959 47.8271 29.4021 50.1417C28.8521 50.4625 28.1875 50.6 27.5 50.6ZM9.12087 7.83754C8.38754 7.83754 7.72296 8.08962 7.19587 8.57087C6.62296 9.09795 6.30212 9.8542 6.30212 10.6792V38.3625C6.30212 39.7146 7.47087 41.0209 8.77712 41.2042L9.46462 41.2959C14.6209 41.9834 22.5271 44.573 27.1105 47.0709C27.3167 47.1625 27.6146 47.1855 27.7292 47.1396C32.3125 44.5959 40.2646 41.9834 45.4438 41.2959L46.223 41.2042C47.5292 41.0438 48.698 39.7146 48.698 38.3625V10.7021C48.698 9.8542 48.3771 9.12087 47.8042 8.57087C47.2084 8.04379 46.4521 7.7917 45.6042 7.83754H45.3292C40.9521 8.22712 33.8938 10.5875 30.0438 12.9938L29.6771 13.2459C28.4167 14.025 26.6292 14.025 25.4146 13.2688L24.8646 12.948C20.9459 10.5417 13.8875 8.2042 9.39587 7.83754H9.12087Z" @if($page == "harian") fill="#354374" @else stroke="#354374" @endif />
                <path d="M27.5 48.6709C26.5604 48.6709 25.7812 47.8917 25.7812 46.9522V12.5771C25.7812 11.6376 26.5604 10.8584 27.5 10.8584C28.4395 10.8584 29.2187 11.6376 29.2187 12.5771V46.9522C29.2187 47.9147 28.4395 48.6709 27.5 48.6709ZM17.7604 21.1709H12.6041C11.6645 21.1709 10.8854 20.3917 10.8854 19.4521C10.8854 18.5126 11.6645 17.7334 12.6041 17.7334H17.7604C18.7 17.7334 19.4791 18.5126 19.4791 19.4521C19.4791 20.3917 18.7 21.1709 17.7604 21.1709ZM19.4791 28.0459H12.6041C11.6645 28.0459 10.8854 27.2667 10.8854 26.3271C10.8854 25.3876 11.6645 24.6084 12.6041 24.6084H19.4791C20.4187 24.6084 21.1979 25.3876 21.1979 26.3271C21.1979 27.2667 20.4187 28.0459 19.4791 28.0459Z" @if($page == "harian") fill="#354374" @else stroke="#354374" @endif/>
            </svg>
            <p class="text-sm text-primary m-1 @if($page == "harian") font-bold @endif">REPORT HARIAN</p>
        </a>
    </div>
</div>
<div>
    <a href="{{ route('logout') }}">
        <svg width="41" height="41" viewBox="0 0 61 62" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.8125 16.625C21.7812 5.375 27.5625 0.78125 40.2187 0.78125H40.625C54.5937 0.78125 60.1875 6.375 60.1875 20.3438V40.7188C60.1875 54.6875 54.5937 60.2813 40.625 60.2813H40.2187C27.6562 60.2813 21.875 55.75 20.8437 44.6875M39.875 30.5H4.3125M11.2812 20.0313L0.8125 30.5L11.2812 40.9688" stroke="#354374" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </a>
</div>

{{-- end sidebar --}}

@endsection