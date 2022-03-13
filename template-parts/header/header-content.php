<div class="container ps-xl-5 pe-xl-5 pt-1 position-relative pb-2 pb-lg-0">
    <!--  -->
    <div class="row align-items-center justify-content-between ps-lg-5 pe-lg-5">
        <div class="col p-1 d-flex align-items-center">
            <?php
            $header = get_field("header-iis", "option");
            $lang_flag = "-fa";
            if (pll_current_language() != 'fa') {
                $lang_flag = "";
            }
            ?>
            <a href=""><img src="<?php echo $header["logo" . $lang_flag]; ?>" alt="<?php echo get_bloginfo('name'); ?>" class="d-none d-lg-block"><img src="<?php echo $header["logo" . $lang_flag]; ?>" alt="<?php echo get_bloginfo('name'); ?>" width="70px" class="d-lg-none"></a>
            <a href="" class="ms-lg-4">
                <h4 class="gray d-none d-lg-block font-bold"><?php echo strtoupper(get_bloginfo('name')); ?>
                </h4>
                <span class="gray d-lg-none span"><?php echo strtoupper(get_bloginfo('name')); ?>
                </span>
            </a>
        </div>
        <div class="col p-0 p-md-2 d-flex align-items-center justify-content-end pe-3">
            <ul class="p-0 d-flex align-items-center madia-list m-0 me-lg-4">
                <li><a href="<?php echo (isset($header["sosial"]) && isset($header["sosial"]["whatsapp"])) ? $header["sosial"]["whatsapp"] : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <circle cx="15" cy="15" r="15" fill="#EAEDF3"></circle>
                            <path d="M22.1309 9.66211L20.0508 7.58398C19.7969 7.33008 19.457 7.1875 19.0977 7.1875C18.7383 7.1875 18.3984 7.32813 18.1445 7.58398L15.9043 9.82031C15.6504 10.0742 15.5078 10.416 15.5078 10.7754C15.5078 11.1367 15.6484 11.4746 15.9043 11.7305L17.6543 13.4824C17.2556 14.4113 16.6828 15.2553 15.9668 15.9688C15.25 16.6895 14.4121 17.2578 13.4824 17.6602L11.7324 15.9082C11.4785 15.6543 11.1387 15.5117 10.7793 15.5117C10.602 15.5111 10.4264 15.5458 10.2628 15.6139C10.0991 15.682 9.95067 15.782 9.82617 15.9082L7.58398 18.1445C7.33008 18.3984 7.1875 18.7402 7.1875 19.0996C7.1875 19.4609 7.32813 19.7988 7.58398 20.0547L9.66211 22.1328C10.0957 22.5664 10.6934 22.8145 11.3066 22.8145C11.4336 22.8145 11.5566 22.8047 11.6816 22.7832C14.2676 22.3574 16.834 20.9805 18.9062 18.9102C20.9766 16.8359 22.3516 14.2695 22.7812 11.6816C22.9043 10.9473 22.6582 10.1914 22.1309 9.66211ZM21.3965 11.4492C21.0156 13.752 19.7773 16.0488 17.9121 17.9141C16.0469 19.7793 13.752 21.0176 11.4492 21.3984C11.1602 21.4473 10.8633 21.3496 10.6523 21.1406L8.61133 19.0996L10.7754 16.9336L13.1152 19.2773L13.1328 19.2949L13.5547 19.1387C14.8338 18.6684 15.9954 17.9255 16.959 16.9617C17.9225 15.9978 18.6649 14.836 19.1348 13.5566L19.291 13.1348L16.9316 10.7773L19.0957 8.61133L21.1367 10.6523C21.3477 10.8633 21.4453 11.1602 21.3965 11.4492Z" fill="#8791A4"></path>
                        </svg></a></li>
                <li><a href="<?php echo (isset($header["sosial"]) && isset($header["sosial"]["instagram"])) ? $header["sosial"]["instagram"] : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <circle cx="15" cy="15" r="15" fill="#EAEDF3"></circle>
                            <path d="M15 10.9941C12.7832 10.9941 10.9941 12.7832 10.9941 15C10.9941 17.2168 12.7832 19.0059 15 19.0059C17.2168 19.0059 19.0058 17.2168 19.0058 15C19.0058 12.7832 17.2168 10.9941 15 10.9941ZM15 17.6035C13.5664 17.6035 12.3965 16.4336 12.3965 15C12.3965 13.5664 13.5664 12.3965 15 12.3965C16.4336 12.3965 17.6035 13.5664 17.6035 15C17.6035 16.4336 16.4336 17.6035 15 17.6035ZM19.1699 9.89649C18.6523 9.89649 18.2343 10.3145 18.2343 10.832C18.2343 11.3496 18.6523 11.7676 19.1699 11.7676C19.6875 11.7676 20.1054 11.3516 20.1054 10.832C20.1056 10.7091 20.0815 10.5874 20.0345 10.4738C19.9876 10.3603 19.9187 10.2571 19.8318 10.1702C19.7449 10.0833 19.6417 10.0143 19.5281 9.96739C19.4145 9.92042 19.2928 9.89633 19.1699 9.89649V9.89649ZM22.8086 15C22.8086 13.9219 22.8183 12.8535 22.7578 11.7773C22.6972 10.5273 22.4121 9.41797 21.498 8.50391C20.582 7.58789 19.4746 7.30469 18.2246 7.24414C17.1465 7.18359 16.0781 7.19336 15.0019 7.19336C13.9238 7.19336 12.8554 7.18359 11.7793 7.24414C10.5293 7.30469 9.41989 7.58984 8.50583 8.50391C7.58981 9.41992 7.30661 10.5273 7.24606 11.7773C7.18552 12.8555 7.19528 13.9238 7.19528 15C7.19528 16.0762 7.18552 17.1465 7.24606 18.2227C7.30661 19.4727 7.59177 20.582 8.50583 21.4961C9.42185 22.4121 10.5293 22.6953 11.7793 22.7559C12.8574 22.8164 13.9258 22.8066 15.0019 22.8066C16.08 22.8066 17.1484 22.8164 18.2246 22.7559C19.4746 22.6953 20.584 22.4102 21.498 21.4961C22.414 20.5801 22.6972 19.4727 22.7578 18.2227C22.8203 17.1465 22.8086 16.0781 22.8086 15V15ZM21.0898 19.6055C20.9472 19.9609 20.7754 20.2266 20.5 20.5C20.2246 20.7754 19.9609 20.9473 19.6054 21.0898C18.5781 21.498 16.1386 21.4062 15 21.4062C13.8613 21.4062 11.4199 21.498 10.3925 21.0918C10.0371 20.9492 9.77146 20.7773 9.49802 20.502C9.22263 20.2266 9.05075 19.9629 8.90817 19.6074C8.50192 18.5781 8.59372 16.1387 8.59372 15C8.59372 13.8613 8.50192 11.4199 8.90817 10.3926C9.05075 10.0371 9.22263 9.77149 9.49802 9.49805C9.77341 9.22461 10.0371 9.05078 10.3925 8.9082C11.4199 8.50195 13.8613 8.59375 15 8.59375C16.1386 8.59375 18.5801 8.50195 19.6074 8.9082C19.9629 9.05078 20.2285 9.22266 20.5019 9.49805C20.7773 9.77344 20.9492 10.0371 21.0918 10.3926C21.498 11.4199 21.4062 13.8613 21.4062 15C21.4062 16.1387 21.498 18.5781 21.0898 19.6055Z" fill="#8791A4"></path>
                        </svg></a></li>
                <li><a href="<?php echo (isset($header["sosial"]) && isset($header["sosial"]["telegram"])) ? $header["sosial"]["telegram"] : ''; ?>"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                            <circle cx="15" cy="15" r="15" fill="#EAEDF3"></circle>
                            <path d="M21.2938 7.4975C21.0931 7.51209 20.8962 7.55916 20.7106 7.63687H20.7081C20.53 7.7075 19.6831 8.06375 18.3956 8.60375L13.7819 10.5469C10.4713 11.9406 7.21689 13.3131 7.21689 13.3131L7.25564 13.2981C7.25564 13.2981 7.03126 13.3719 6.79689 13.5325C6.65209 13.6246 6.5275 13.7452 6.43064 13.8869C6.31564 14.0556 6.22314 14.3137 6.25751 14.5806C6.31376 15.0319 6.60626 15.3025 6.81626 15.4519C7.02876 15.6031 7.23126 15.6737 7.23126 15.6737H7.23626L10.2881 16.7019C10.425 17.1412 11.2181 19.7487 11.4088 20.3494C11.5213 20.7081 11.6306 20.9325 11.7675 21.1037C11.8338 21.1912 11.9113 21.2644 12.0044 21.3231C12.0528 21.3513 12.1044 21.3735 12.1581 21.3894L12.1269 21.3819C12.1363 21.3844 12.1438 21.3919 12.1506 21.3944C12.1756 21.4012 12.1925 21.4037 12.2244 21.4087C12.7075 21.555 13.0956 21.255 13.0956 21.255L13.1175 21.2375L14.9194 19.5969L17.9394 21.9137L18.0081 21.9431C18.6375 22.2194 19.275 22.0656 19.6119 21.7944C19.9513 21.5212 20.0831 21.1719 20.0831 21.1719L20.105 21.1156L22.4388 9.16C22.505 8.865 22.5219 8.58875 22.4488 8.32062C22.3733 8.04926 22.1992 7.81588 21.9606 7.66625C21.7603 7.54444 21.5279 7.48565 21.2938 7.4975ZM21.2306 8.77875C21.2281 8.81812 21.2356 8.81375 21.2181 8.88937V8.89625L18.9063 20.7275C18.8963 20.7444 18.8794 20.7812 18.8331 20.8181C18.7844 20.8569 18.7456 20.8812 18.5425 20.8006L14.8488 17.9687L12.6175 20.0025L13.0863 17.0087L19.1213 11.3837C19.37 11.1525 19.2869 11.1037 19.2869 11.1037C19.3044 10.82 18.9113 11.0206 18.9113 11.0206L11.3013 15.735L11.2988 15.7225L7.65126 14.4944V14.4919L7.64189 14.49C7.64828 14.4879 7.65454 14.4854 7.66064 14.4825L7.68064 14.4725L7.70001 14.4656C7.70001 14.4656 10.9569 13.0931 14.2675 11.6994C15.925 11.0012 17.595 10.2981 18.8794 9.75562C20.1638 9.21625 21.1131 8.82062 21.1669 8.79937C21.2181 8.77937 21.1938 8.77937 21.2306 8.77937V8.77875Z" fill="#8791A4"></path>
                        </svg></a></li>
            </ul>
            <?php
            $lang_flag = "en";
            $lang_direct = "";
            if (pll_current_language() != 'fa') {
                $lang_flag = "fa";
                $lang_direct = "/fa";
            }
            ?>
            <a href="<?php echo site_url() . $lang_direct; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/<?php echo $lang_flag; ?>.png" alt="" width="80px" class="d-none d-lg-block"><img src="<?php echo get_template_directory_uri(); ?>/assets/image/<?php echo $lang_flag; ?>.png" alt="" width="50px" class="d-lg-none"></a>
        </div>
    </div>
    <!--  -->

    <?php
    get_template_part('template-parts/menu/menu', 'content');
    ?>

</div>