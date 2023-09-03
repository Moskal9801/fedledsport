<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content='true' name='HandheldFriendly'/>
    <meta content='width' name='MobileOptimized'/>
    <meta content='yes' name='apple-mobile-web-app-capable'/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<?php wp_head(); ?>
</head>
<body>

<?php if ( is_front_page() ) { ?>
    <div class="home-page">
<?php } else if (is_page('news')) { ?>
    <div class="news-page">
<?php } else if (is_404()) { ?>
    <div class="error-page">
<?php } else { ?>
    <div class="default-page">
<?php } ?>

    <header class="main-header">
        <div class="main-header__container container desktop">
            <a class="container__logo" href="/">
                <svg width="200" height="80" viewBox="0 0 200 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 39.9977C0 18.0474 17.9551 0.252258 40.1027 0.252258C62.2504 0.252258 80.2055 18.0474 80.2055 39.9977" fill="#064077"/>
                    <path d="M0 39.9977C0 61.9481 17.9551 79.7432 40.1027 79.7432C62.2504 79.7432 80.2055 61.9481 80.2055 39.9977" fill="#279DD9"/>
                    <path d="M42.9441 0H37.0208V80H42.9441V0Z" fill="white"/>
                    <path d="M40.112 73.5057C21.4766 73.5057 6.31665 58.4808 6.31665 40.0069C6.31665 21.533 21.4766 6.51263 40.112 6.51263C58.7473 6.51263 73.9073 21.5376 73.9073 40.0069C73.9073 58.4762 58.7473 73.5057 40.112 73.5057ZM40.112 12.3832C24.7437 12.3832 12.24 24.7756 12.24 40.0069C12.24 55.2382 24.7437 67.6306 40.112 67.6306C55.4802 67.6306 67.984 55.2382 67.984 40.0069C67.984 24.7756 55.4802 12.3832 40.112 12.3832Z" fill="white"/>
                    <path d="M99.285 27.7613C99.285 28.5456 99.1046 29.1143 98.7482 29.4674C98.3919 29.8206 97.8181 29.9994 97.0268 29.9994H95.6755V30.7791H93.644V29.9994H92.2928C91.5014 29.9994 90.9276 29.8206 90.5713 29.4674C90.215 29.1143 90.0345 28.5456 90.0345 27.7613V25.5277C90.0345 24.7435 90.215 24.1793 90.5713 23.8216C90.9276 23.4684 91.5014 23.2896 92.2928 23.2896H93.644V22.5053H95.6755V23.2896H97.0268C97.8181 23.2896 98.3873 23.4684 98.7482 23.8216C99.1046 24.1747 99.285 24.7435 99.285 25.5277V27.7613ZM92.066 27.7613C92.066 28.2108 92.2928 28.4309 92.7416 28.4309H93.7551V24.8535H92.7416C92.2928 24.8535 92.066 25.0783 92.066 25.5231V27.7567V27.7613ZM97.2535 25.5277C97.2535 25.0828 97.0268 24.8581 96.5779 24.8581H95.5645V28.4355H96.5779C97.0268 28.4355 97.2535 28.2108 97.2535 27.7659V25.5323V25.5277Z" fill="#064077"/>
                    <path d="M107.124 30.5544H100.868V22.73H107.124V24.294H102.895V25.8029H106.222V27.3669H102.895V28.9904H107.124V30.5544Z" fill="#064077"/>
                    <path d="M109.72 22.73H115.644V28.9904H116.49V32.0083H114.575L114.464 30.5544H110.067L109.956 32.0083H108.04V28.9904H108.772C108.989 28.7428 109.151 28.4676 109.262 28.1557C109.369 27.8484 109.433 27.5641 109.447 27.3118L109.73 22.73H109.72ZM113.612 28.9904V24.294H111.525L111.354 27.0871C111.331 27.5411 111.22 27.9998 111.016 28.463C110.933 28.6556 110.84 28.8299 110.734 28.9904H113.612Z" fill="#064077"/>
                    <path d="M124.209 30.5544H117.953V22.73H124.209V24.294H119.98V25.8029H123.307V27.3669H119.98V28.9904H124.209V30.5544Z" fill="#064077"/>
                    <path d="M125.676 22.73H130.415C131.206 22.73 131.775 22.9089 132.136 23.2621C132.493 23.6152 132.673 24.1839 132.673 24.9682V26.0873C132.673 26.8715 132.493 27.4402 132.136 27.7934C131.78 28.1465 131.206 28.3254 130.415 28.3254H127.708V30.559H125.676V22.7346V22.73ZM130.637 24.9636C130.637 24.5187 130.41 24.294 129.961 24.294H127.703V26.7523H129.961C130.41 26.7523 130.637 26.5276 130.637 26.0827V24.9636Z" fill="#064077"/>
                    <path d="M134.982 30.5544H132.784L135.774 22.73H138.032L141.021 30.5544H138.823L138.314 29.1555H135.496L134.987 30.5544H134.982ZM135.996 27.7017H137.8L136.898 25.0737L135.996 27.7017Z" fill="#064077"/>
                    <path d="M142.146 30.5544V22.73H144.173V28.9904H146.996V22.73H149.022V28.9904H149.869V32.0083H147.953L147.838 30.5544H142.146Z" fill="#064077"/>
                    <path d="M158.217 30.5544H156.186V25.7479L153.479 30.5544H151.336V22.73H153.368V27.5366L156.075 22.73H158.217V30.5544Z" fill="#064077"/>
                    <path d="M166.899 30.5544H164.867V27.9814H163.345L161.933 30.5544H159.791L161.258 27.8714C160.777 27.7613 160.429 27.532 160.221 27.188C160.008 26.844 159.907 26.367 159.907 25.7479V24.9636C159.907 24.1793 160.087 23.6152 160.443 23.2575C160.8 22.9043 161.373 22.7255 162.165 22.7255H166.903V30.5498L166.899 30.5544ZM161.938 25.7479C161.938 26.1973 162.165 26.4175 162.614 26.4175H164.867V24.294H162.614C162.165 24.294 161.938 24.5187 161.938 24.9636V25.7479Z" fill="#064077"/>
                    <path d="M92.228 43.6164C91.9179 43.9282 91.5385 44.0796 91.0896 44.0796C90.6407 44.0796 90.215 44.0429 89.817 43.9695V42.4606H90.3261C90.4695 42.4606 90.5852 42.4102 90.6824 42.3138C90.7749 42.2175 90.8258 42.0983 90.8351 41.9561L91.1729 36.1452H97.434V43.9695H95.4025V37.7091H93.0332L92.7509 42.3459C92.7139 42.8825 92.5427 43.3045 92.2326 43.6164" fill="#064077"/>
                    <path d="M105.602 43.9695H99.3452V36.1406H105.602V37.7091H101.372V39.218H104.699V40.782H101.372V42.401H105.602V43.9695Z" fill="#064077"/>
                    <path d="M108.198 36.1452H114.121V42.4056H114.968V45.4234H113.052L112.941 43.9695H108.545L108.434 45.4234H106.518V42.4056H107.249C107.467 42.1579 107.629 41.8827 107.74 41.5708C107.846 41.2636 107.911 40.9792 107.925 40.727L108.207 36.1452H108.198ZM112.09 42.4056V37.7091H110.003L109.831 40.5022C109.808 40.9563 109.697 41.4149 109.493 41.8781C109.41 42.0708 109.318 42.245 109.211 42.4056H112.09Z" fill="#064077"/>
                    <path d="M123.534 41.846C123.534 42.6303 123.353 43.199 122.997 43.5521C122.64 43.9053 122.067 44.0842 121.275 44.0842H118.457C117.666 44.0842 117.092 43.9099 116.736 43.5521C116.379 43.199 116.199 42.6303 116.199 41.846V38.2686C116.199 37.4844 116.379 36.9202 116.736 36.5625C117.092 36.2094 117.666 36.0305 118.457 36.0305H121.275C122.067 36.0305 122.636 36.2094 122.997 36.5625C123.353 36.9157 123.534 37.4844 123.534 38.2686V41.846ZM121.502 38.2686C121.502 37.8238 121.275 37.599 120.826 37.599H118.911C118.457 37.599 118.235 37.8238 118.235 38.2686V41.846C118.235 42.2955 118.462 42.5156 118.911 42.5156H120.826C121.275 42.5156 121.502 42.2909 121.502 41.846V38.2686Z" fill="#064077"/>
                    <path d="M125.227 36.1452H129.739C130.475 36.1452 131.016 36.3103 131.363 36.6405C131.711 36.9707 131.882 37.4752 131.882 38.154C131.882 38.6035 131.785 38.9658 131.59 39.2456C131.396 39.5253 131.155 39.7225 130.868 39.8326C131.479 39.9977 131.891 40.3967 132.109 41.0388C132.183 41.2681 132.22 41.5387 132.22 41.846C132.22 42.5753 132.048 43.1119 131.701 43.4558C131.354 43.7998 130.813 43.9695 130.077 43.9695H125.227V36.1452ZM129.85 38.3787C129.85 37.9293 129.624 37.7091 129.175 37.7091H127.259V39.2731H129.175C129.624 39.2731 129.85 39.0483 129.85 38.6035V38.3787ZM130.188 41.5066C130.188 41.0618 129.961 40.837 129.512 40.837H127.254V42.401H129.512C129.961 42.401 130.188 42.1762 130.188 41.7314V41.5066Z" fill="#064077"/>
                    <path d="M135.829 38.8236H138.425C139.217 38.8236 139.786 39.0025 140.147 39.3556C140.503 39.7088 140.683 40.2775 140.683 41.0618V41.7314C140.683 42.5156 140.503 43.0843 140.147 43.4375C139.79 43.7906 139.217 43.9695 138.425 43.9695H133.802V36.1452H135.834V38.8282L135.829 38.8236ZM138.647 41.0618C138.647 40.6123 138.421 40.3921 137.972 40.3921H135.829V42.4056H137.972C138.425 42.4056 138.647 42.1808 138.647 41.736V41.0663V41.0618ZM143.608 43.9695H141.577V36.1452H143.608V43.9695Z" fill="#064077"/>
                    <path d="M150.096 36.1452H152.35L149.814 40.0573L152.405 43.9695H150.152L148.574 41.5066L146.996 43.9695H144.737L147.333 40.0573L144.793 36.1452H147.037L148.574 38.6035L150.096 36.1452Z" fill="#064077"/>
                    <path d="M157.482 36.1452H161.994C162.729 36.1452 163.271 36.3103 163.618 36.6405C163.965 36.9707 164.136 37.4752 164.136 38.154C164.136 38.6035 164.039 38.9658 163.845 39.2456C163.65 39.5253 163.41 39.7225 163.123 39.8326C163.734 39.9977 164.145 40.3967 164.363 41.0388C164.437 41.2681 164.474 41.5387 164.474 41.846C164.474 42.5753 164.303 43.1119 163.956 43.4558C163.609 43.7998 163.067 43.9695 162.331 43.9695H157.482V36.1452ZM162.105 38.3787C162.105 37.9293 161.878 37.7091 161.429 37.7091H159.513V39.2731H161.429C161.878 39.2731 162.105 39.0483 162.105 38.6035V38.3787ZM162.442 41.5066C162.442 41.0618 162.216 40.837 161.767 40.837H159.513V42.401H161.767C162.216 42.401 162.442 42.1762 162.442 41.7314V41.5066Z" fill="#064077"/>
                    <path d="M172.933 43.9695H170.902V39.163L168.195 43.9695H166.052V36.1406H168.083V40.9517L170.791 36.1406H172.933V43.9695Z" fill="#064077"/>
                    <path d="M175.978 36.1452H181.897V42.4056H182.744V45.4234H180.828L180.717 43.9695H176.321L176.21 45.4234H174.294V42.4056H175.025C175.242 42.1579 175.409 41.8827 175.515 41.5708C175.622 41.2636 175.687 40.9792 175.7 40.727L175.983 36.1452H175.978ZM179.87 42.4056V37.7091H177.783L177.616 40.5022C177.593 40.9563 177.482 41.4149 177.278 41.8781C177.195 42.0708 177.103 42.245 176.996 42.4056H179.875H179.87Z" fill="#064077"/>
                    <path d="M191.319 41.846C191.319 42.6303 191.138 43.199 190.782 43.5521C190.425 43.9053 189.852 44.0842 189.06 44.0842H186.242C185.451 44.0842 184.877 43.9099 184.521 43.5521C184.164 43.199 183.984 42.6303 183.984 41.846V38.2686C183.984 37.4844 184.164 36.9202 184.521 36.5625C184.877 36.2094 185.451 36.0305 186.242 36.0305H189.06C189.852 36.0305 190.421 36.2094 190.782 36.5625C191.138 36.9157 191.319 37.4844 191.319 38.2686V41.846ZM189.287 38.2686C189.287 37.8238 189.06 37.599 188.611 37.599H186.696C186.247 37.599 186.02 37.8238 186.02 38.2686V41.846C186.02 42.2955 186.247 42.5156 186.696 42.5156H188.611C189.06 42.5156 189.287 42.2909 189.287 41.846V38.2686Z" fill="#064077"/>
                    <path d="M193.008 36.1452H197.52C198.255 36.1452 198.797 36.3103 199.144 36.6405C199.491 36.9707 199.662 37.4752 199.662 38.154C199.662 38.6035 199.565 38.9658 199.371 39.2456C199.176 39.5253 198.936 39.7225 198.649 39.8326C199.26 39.9977 199.671 40.3967 199.889 41.0388C199.963 41.2681 200 41.5387 200 41.846C200 42.5753 199.829 43.1119 199.482 43.4558C199.135 43.7998 198.593 43.9695 197.857 43.9695H193.008V36.1452ZM197.631 38.3787C197.631 37.9293 197.404 37.7091 196.955 37.7091H195.039V39.2731H196.955C197.404 39.2731 197.631 39.0483 197.631 38.6035V38.3787ZM197.968 41.5066C197.968 41.0618 197.742 40.837 197.293 40.837H195.039V42.401H197.293C197.742 42.401 197.968 42.1762 197.968 41.7314V41.5066Z" fill="#064077"/>
                    <path d="M96.4668 57.27C94.7916 57.4213 93.3987 57.4947 92.2927 57.4947C91.5569 57.4947 91.0155 57.325 90.6684 56.981C90.3214 56.637 90.1501 56.1004 90.1501 55.3712V51.7938C90.1501 51.0096 90.3306 50.4409 90.6869 50.0877C91.0433 49.7346 91.6171 49.5557 92.4084 49.5557H96.4668V51.1196H92.8573C92.4038 51.1196 92.1817 51.3444 92.1817 51.7893V55.3666C92.1817 55.5363 92.2326 55.6739 92.3344 55.7748C92.4362 55.8757 92.5657 55.9262 92.7231 55.9262C92.8804 55.9262 93.0517 55.9262 93.2414 55.9216C93.4311 55.9216 93.6255 55.9124 93.8291 55.9032C94.0327 55.8941 94.2363 55.8895 94.4446 55.8803C94.6528 55.8711 94.9166 55.8574 95.2451 55.8344C95.5737 55.8115 95.9809 55.7886 96.4668 55.7565V57.2654V57.27Z" fill="#064077"/>
                    <path d="M104.815 57.38H102.783V51.1196H99.9653V57.38H97.9338V49.5557H104.815V57.38Z" fill="#064077"/>
                    <path d="M113.834 55.2566C113.834 56.0408 113.654 56.6049 113.297 56.9627C112.941 57.3158 112.367 57.4947 111.576 57.4947H108.758C107.966 57.4947 107.393 57.3204 107.036 56.9627C106.68 56.6095 106.499 56.0408 106.499 55.2566V51.6792C106.499 50.8949 106.68 50.3308 107.036 49.9731C107.393 49.6199 107.966 49.441 108.758 49.441H111.576C112.367 49.441 112.936 49.6199 113.297 49.9731C113.654 50.3262 113.834 50.8949 113.834 51.6792V55.2566ZM111.803 51.6792C111.803 51.2343 111.576 51.0096 111.127 51.0096H109.211C108.758 51.0096 108.536 51.2343 108.536 51.6792V55.2566C108.536 55.7014 108.762 55.9262 109.211 55.9262H111.127C111.581 55.9262 111.803 55.7014 111.803 55.2566V51.6792Z" fill="#064077"/>
                    <path d="M115.528 49.5557H120.267C121.058 49.5557 121.627 49.7346 121.988 50.0877C122.344 50.4409 122.525 51.0096 122.525 51.7938V52.9129C122.525 53.6926 122.344 54.2613 121.988 54.619C121.632 54.9722 121.058 55.1511 120.267 55.1511H117.559V57.3846H115.528V49.5603V49.5557ZM120.489 51.7893C120.489 51.3444 120.262 51.1196 119.813 51.1196H117.555V53.5779H119.813C120.262 53.5779 120.489 53.3532 120.489 52.9083V51.7893Z" fill="#064077"/>
                    <path d="M127.934 57.38H125.903V51.1196H123.534V49.5557H130.304V51.1196H127.934V57.38Z" fill="#064077"/>
                    <path d="M132.275 57.38H130.077L133.066 49.5557H135.325L138.314 57.38H136.116L135.607 55.9812H132.789L132.28 57.38H132.275ZM133.289 54.5273H135.093L134.191 51.8993L133.289 54.5273Z" fill="#064077"/>
                </svg>
            </a>
            <div class="container__menu">
                <a class="menu__item" href="/#activity">О нас</a>
                <a class="menu__item" href="/#projects">Проекты</a>
                <a class="menu__item" href="/#news">Новости</a>
                <a class="menu__item" href="/#documents">Документы</a>
                <a class="menu__item" href="/#contacts">Контакты</a>
            </div>
            <div class="container__contacts">
                <a class="contacts__contact-us more-button" href="/#contacts">Связаться с нами</a>
                <div class="contacts__info">
                    <a class="info__phone" href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>"><?php the_field( 'phone', 'option' ); ?></a>
                    <div class="info__address"><?php the_field( 'address', 'option' ); ?></div>
                </div>
            </div>
        </div>
        <div class="main-header__container container mobile">
            <a class="container__logo" href="/">
                <svg width="166" height="66" viewBox="0 0 166 66" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 32.9981C0 14.8891 14.9027 0.208099 33.2853 0.208099C51.6678 0.208099 66.5705 14.8891 66.5705 32.9981" fill="#064077"/>
                    <path d="M0 32.9981C0 51.1071 14.9027 65.7881 33.2853 65.7881C51.6678 65.7881 66.5705 51.1071 66.5705 32.9981" fill="#279DD9"/>
                    <path d="M35.6434 0H30.7271V66H35.6434V0Z" fill="white"/>
                    <path d="M33.2927 60.6422C17.8254 60.6422 5.24261 48.2466 5.24261 33.0057C5.24261 17.7647 17.8254 5.37292 33.2927 5.37292C48.76 5.37292 61.3428 17.7685 61.3428 33.0057C61.3428 48.2429 48.76 60.6422 33.2927 60.6422ZM33.2927 10.2161C20.5371 10.2161 10.159 20.4398 10.159 33.0057C10.159 45.5715 20.5371 55.7952 33.2927 55.7952C46.0484 55.7952 56.4265 45.5715 56.4265 33.0057C56.4265 20.4398 46.0484 10.2161 33.2927 10.2161Z" fill="white"/>
                    <path d="M82.4064 22.9031C82.4064 23.5501 82.2566 24.0193 81.9608 24.3106C81.6651 24.602 81.1888 24.7495 80.532 24.7495H79.4105V25.3928H77.7243V24.7495H76.6028C75.946 24.7495 75.4697 24.602 75.1739 24.3106C74.8782 24.0193 74.7284 23.5501 74.7284 22.9031V21.0604C74.7284 20.4134 74.8782 19.948 75.1739 19.6528C75.4697 19.3615 75.946 19.2139 76.6028 19.2139H77.7243V18.5669H79.4105V19.2139H80.532C81.1888 19.2139 81.6612 19.3615 81.9608 19.6528C82.2566 19.9442 82.4064 20.4134 82.4064 21.0604V22.9031ZM76.4145 22.9031C76.4145 23.2739 76.6028 23.4555 76.9753 23.4555H77.8165V20.5042H76.9753C76.6028 20.5042 76.4145 20.6896 76.4145 21.0566V22.8993V22.9031ZM80.7202 21.0604C80.7202 20.6934 80.532 20.508 80.1594 20.508H79.3183V23.4593H80.1594C80.532 23.4593 80.7202 23.2739 80.7202 22.9069V21.0642V21.0604Z" fill="#064077"/>
                    <path d="M88.9131 25.2074H83.7202V18.7523H88.9131V20.0425H85.4025V21.2874H88.1641V22.5777H85.4025V23.9171H88.9131V25.2074Z" fill="#064077"/>
                    <path d="M91.0679 18.7523H95.9842V23.9171H96.6871V26.4068H95.097L95.0048 25.2074H91.356L91.2638 26.4068H89.6736V23.9171H90.2805C90.461 23.7128 90.5955 23.4858 90.6876 23.2285C90.776 22.975 90.8298 22.7404 90.8413 22.5323L91.0756 18.7523H91.0679ZM94.2981 23.9171V20.0425H92.5658L92.4237 22.3469C92.4045 22.7214 92.3123 23.0998 92.1433 23.482C92.0742 23.6409 91.9974 23.7847 91.909 23.9171H94.2981Z" fill="#064077"/>
                    <path d="M103.094 25.2074H97.9007V18.7523H103.094V20.0425H99.583V21.2874H102.345V22.5777H99.583V23.9171H103.094V25.2074Z" fill="#064077"/>
                    <path d="M104.311 18.7523H108.244C108.901 18.7523 109.374 18.8999 109.673 19.1912C109.969 19.4826 110.119 19.9517 110.119 20.5988V21.522C110.119 22.169 109.969 22.6382 109.673 22.9296C109.377 23.2209 108.901 23.3685 108.244 23.3685H105.997V25.2112H104.311V18.7561V18.7523ZM108.429 20.595C108.429 20.228 108.241 20.0425 107.868 20.0425H105.994V22.0706H107.868C108.241 22.0706 108.429 21.8852 108.429 21.5182V20.595Z" fill="#064077"/>
                    <path d="M112.035 25.2074H110.211L112.692 18.7523H114.566L117.048 25.2074H115.223L114.801 24.0533H112.462L112.039 25.2074H112.035ZM112.876 22.8539H114.374L113.625 20.6858L112.876 22.8539Z" fill="#064077"/>
                    <path d="M117.981 25.2074V18.7523H119.663V23.9171H122.006V18.7523H123.688V23.9171H124.391V26.4068H122.801L122.705 25.2074H117.981Z" fill="#064077"/>
                    <path d="M131.32 25.2074H129.634V21.242L127.387 25.2074H125.609V18.7523H127.295V22.7177L129.542 18.7523H131.32V25.2074Z" fill="#064077"/>
                    <path d="M138.526 25.2074H136.84V23.0847H135.576L134.405 25.2074H132.627L133.844 22.9939C133.445 22.9031 133.157 22.7139 132.984 22.4301C132.807 22.1463 132.723 21.7528 132.723 21.242V20.595C132.723 19.948 132.872 19.4826 133.168 19.1874C133.464 18.8961 133.94 18.7485 134.597 18.7485H138.53V25.2036L138.526 25.2074ZM134.409 21.242C134.409 21.6128 134.597 21.7944 134.969 21.7944H136.84V20.0425H134.969C134.597 20.0425 134.409 20.228 134.409 20.595V21.242Z" fill="#064077"/>
                    <path d="M76.5491 35.9835C76.2918 36.2408 75.9769 36.3656 75.6043 36.3656C75.2317 36.3656 74.8784 36.3354 74.548 36.2748V35.03H74.9705C75.0896 35.03 75.1856 34.9883 75.2663 34.9089C75.3431 34.8294 75.3854 34.731 75.393 34.6137L75.6734 29.8197H80.8702V36.2748H79.184V31.11H77.2175L76.9832 34.9354C76.9524 35.3781 76.8103 35.7262 76.553 35.9835" fill="#064077"/>
                    <path d="M87.6494 36.2748H82.4565V29.816H87.6494V31.11H84.1389V32.3549H86.9005V33.6451H84.1389V34.9808H87.6494V36.2748Z" fill="#064077"/>
                    <path d="M89.8042 29.8197H94.7206V34.9846H95.4235V37.4743H93.8333L93.7411 36.2748H90.0923L90.0001 37.4743H88.41V34.9846H89.0168C89.1974 34.7802 89.3318 34.5532 89.424 34.2959C89.5123 34.0424 89.5661 33.8078 89.5776 33.5997L89.8119 29.8197H89.8042ZM93.0344 34.9846V31.11H91.3022L91.1601 33.4143C91.1409 33.7889 91.0487 34.1673 90.8797 34.5494C90.8105 34.7083 90.7337 34.8521 90.6454 34.9846H93.0344Z" fill="#064077"/>
                    <path d="M102.533 34.523C102.533 35.17 102.383 35.6392 102.087 35.9305C101.791 36.2219 101.315 36.3695 100.658 36.3695H98.3193C97.6625 36.3695 97.1862 36.2257 96.8905 35.9305C96.5947 35.6392 96.4449 35.17 96.4449 34.523V31.5717C96.4449 30.9246 96.5947 30.4592 96.8905 30.1641C97.1862 29.8728 97.6625 29.7252 98.3193 29.7252H100.658C101.315 29.7252 101.788 29.8728 102.087 30.1641C102.383 30.4555 102.533 30.9246 102.533 31.5717V34.523ZM100.847 31.5717C100.847 31.2046 100.658 31.0192 100.286 31.0192H98.6957C98.3193 31.0192 98.1349 31.2046 98.1349 31.5717V34.523C98.1349 34.8938 98.3231 35.0754 98.6957 35.0754H100.286C100.658 35.0754 100.847 34.89 100.847 34.523V31.5717Z" fill="#064077"/>
                    <path d="M103.939 29.8197H107.684C108.294 29.8197 108.744 29.9559 109.032 30.2284C109.32 30.5008 109.462 30.917 109.462 31.477C109.462 31.8478 109.381 32.1467 109.22 32.3776C109.059 32.6084 108.859 32.7711 108.621 32.8619C109.128 32.9981 109.47 33.3273 109.65 33.857C109.712 34.0462 109.742 34.2694 109.742 34.5229C109.742 35.1246 109.6 35.5673 109.312 35.851C109.024 36.1348 108.575 36.2748 107.964 36.2748H103.939V29.8197ZM107.776 31.6624C107.776 31.2916 107.588 31.11 107.215 31.11H105.625V32.4003H107.215C107.588 32.4003 107.776 32.2148 107.776 31.8478V31.6624ZM108.056 34.2429C108.056 33.8759 107.868 33.6905 107.496 33.6905H105.621V34.9808H107.496C107.868 34.9808 108.056 34.7954 108.056 34.4283V34.2429Z" fill="#064077"/>
                    <path d="M112.738 32.0294H114.893C115.55 32.0294 116.022 32.177 116.322 32.4684C116.617 32.7597 116.767 33.2289 116.767 33.8759V34.4283C116.767 35.0754 116.617 35.5446 116.322 35.8359C116.026 36.1272 115.55 36.2748 114.893 36.2748H111.056V29.8197H112.742V32.0332L112.738 32.0294ZM115.077 33.8759C115.077 33.5051 114.889 33.3235 114.516 33.3235H112.738V34.9846H114.516C114.893 34.9846 115.077 34.7992 115.077 34.4321V33.8797V33.8759ZM119.195 36.2748H117.509V29.8197H119.195V36.2748Z" fill="#064077"/>
                    <path d="M124.58 29.8197H126.45L124.345 33.0473L126.496 36.2748H124.626L123.316 34.2429L122.006 36.2748H120.132L122.287 33.0473L120.178 29.8197H122.041L123.316 31.8478L124.58 29.8197Z" fill="#064077"/>
                    <path d="M130.71 29.8197H134.454C135.065 29.8197 135.515 29.9559 135.803 30.2284C136.091 30.5008 136.233 30.917 136.233 31.477C136.233 31.8478 136.152 32.1467 135.991 32.3776C135.83 32.6084 135.63 32.7711 135.392 32.8619C135.899 32.9981 136.24 33.3273 136.421 33.857C136.482 34.0462 136.513 34.2694 136.513 34.5229C136.513 35.1246 136.371 35.5673 136.083 35.851C135.795 36.1348 135.346 36.2748 134.735 36.2748H130.71V29.8197ZM134.547 31.6624C134.547 31.2916 134.358 31.11 133.986 31.11H132.396V32.4003H133.986C134.358 32.4003 134.547 32.2148 134.547 31.8478V31.6624ZM134.827 34.2429C134.827 33.8759 134.639 33.6905 134.266 33.6905H132.396V34.9808H134.266C134.639 34.9808 134.827 34.7954 134.827 34.4283V34.2429Z" fill="#064077"/>
                    <path d="M143.534 36.2748H141.848V32.3095L139.601 36.2748H137.823V29.816H139.509V33.7851L141.756 29.816H143.534V36.2748Z" fill="#064077"/>
                    <path d="M146.062 29.8197H150.975V34.9846H151.677V37.4743H150.087L149.995 36.2748H146.346L146.254 37.4743H144.664V34.9846H145.271C145.451 34.7802 145.59 34.5532 145.678 34.2959C145.766 34.0424 145.82 33.8078 145.832 33.5997L146.066 29.8197H146.062ZM149.292 34.9846V31.11H147.56L147.422 33.4143C147.403 33.7889 147.31 34.1673 147.141 34.5494C147.072 34.7083 146.995 34.8521 146.907 34.9846H149.296H149.292Z" fill="#064077"/>
                    <path d="M158.794 34.523C158.794 35.17 158.645 35.6392 158.349 35.9305C158.053 36.2219 157.577 36.3695 156.92 36.3695H154.581C153.924 36.3695 153.448 36.2257 153.152 35.9305C152.856 35.6392 152.707 35.17 152.707 34.523V31.5717C152.707 30.9246 152.856 30.4592 153.152 30.1641C153.448 29.8728 153.924 29.7252 154.581 29.7252H156.92C157.577 29.7252 158.049 29.8728 158.349 30.1641C158.645 30.4555 158.794 30.9246 158.794 31.5717V34.523ZM157.108 31.5717C157.108 31.2046 156.92 31.0192 156.548 31.0192H154.957C154.585 31.0192 154.397 31.2046 154.397 31.5717V34.523C154.397 34.8938 154.585 35.0754 154.957 35.0754H156.548C156.92 35.0754 157.108 34.89 157.108 34.523V31.5717Z" fill="#064077"/>
                    <path d="M160.196 29.8197H163.941C164.552 29.8197 165.001 29.9559 165.29 30.2284C165.578 30.5008 165.72 30.917 165.72 31.477C165.72 31.8478 165.639 32.1467 165.478 32.3776C165.316 32.6084 165.117 32.7711 164.879 32.8619C165.386 32.9981 165.727 33.3273 165.908 33.857C165.969 34.0462 166 34.2694 166 34.5229C166 35.1246 165.858 35.5673 165.57 35.851C165.282 36.1348 164.832 36.2748 164.222 36.2748H160.196V29.8197ZM164.034 31.6624C164.034 31.2916 163.845 31.11 163.473 31.11H161.883V32.4003H163.473C163.845 32.4003 164.034 32.2148 164.034 31.8478V31.6624ZM164.314 34.2429C164.314 33.8759 164.126 33.6905 163.753 33.6905H161.883V34.9808H163.753C164.126 34.9808 164.314 34.7954 164.314 34.4283V34.2429Z" fill="#064077"/>
                    <path d="M80.0677 47.2477C78.6773 47.3726 77.5211 47.4331 76.6032 47.4331C75.9925 47.4331 75.5431 47.2931 75.255 47.0093C74.9669 46.7255 74.8248 46.2828 74.8248 45.6812V42.7299C74.8248 42.0829 74.9746 41.6137 75.2704 41.3223C75.5661 41.031 76.0424 40.8834 76.6992 40.8834H80.0677V42.1737H77.0718C76.6954 42.1737 76.511 42.3591 76.511 42.7261V45.6774C76.511 45.8174 76.5532 45.9309 76.6377 46.0142C76.7222 46.0974 76.8298 46.1391 76.9604 46.1391C77.091 46.1391 77.2331 46.1391 77.3906 46.1353C77.548 46.1353 77.7093 46.1277 77.8783 46.1201C78.0473 46.1126 78.2163 46.1088 78.3892 46.1012C78.562 46.0936 78.781 46.0823 79.0537 46.0634C79.3264 46.0445 79.6644 46.0255 80.0677 45.9991V47.2439V47.2477Z" fill="#064077"/>
                    <path d="M86.9963 47.3385H85.3102V42.1737H82.9711V47.3385H81.2849V40.8834H86.9963V47.3385Z" fill="#064077"/>
                    <path d="M94.4824 45.5866C94.4824 46.2337 94.3326 46.6991 94.0369 46.9942C93.7411 47.2856 93.2649 47.4331 92.6081 47.4331H90.269C89.6122 47.4331 89.1359 47.2893 88.8401 46.9942C88.5444 46.7029 88.3946 46.2337 88.3946 45.5866V42.6353C88.3946 41.9883 88.5444 41.5229 88.8401 41.2278C89.1359 40.9364 89.6122 40.7888 90.269 40.7888H92.6081C93.2649 40.7888 93.7373 40.9364 94.0369 41.2278C94.3326 41.5191 94.4824 41.9883 94.4824 42.6353V45.5866ZM92.7963 42.6353C92.7963 42.2683 92.6081 42.0829 92.2355 42.0829H90.6454C90.269 42.0829 90.0846 42.2683 90.0846 42.6353V45.5866C90.0846 45.9537 90.2728 46.1391 90.6454 46.1391H92.2355C92.6119 46.1391 92.7963 45.9537 92.7963 45.5866V42.6353Z" fill="#064077"/>
                    <path d="M95.8881 40.8834H99.8212C100.478 40.8834 100.95 41.031 101.25 41.3223C101.546 41.6137 101.696 42.0829 101.696 42.7299V43.6531C101.696 44.2964 101.546 44.7656 101.25 45.0607C100.954 45.352 100.478 45.4996 99.8212 45.4996H97.5743V47.3423H95.8881V40.8872V40.8834ZM100.006 42.7261C100.006 42.3591 99.8174 42.1737 99.4448 42.1737H97.5704V44.2018H99.4448C99.8174 44.2018 100.006 44.0164 100.006 43.6493V42.7261Z" fill="#064077"/>
                    <path d="M106.186 47.3385H104.499V42.1737H102.533V40.8834H108.152V42.1737H106.186V47.3385Z" fill="#064077"/>
                    <path d="M109.788 47.3385H107.964L110.445 40.8834H112.32L114.801 47.3385H112.976L112.554 46.1845H110.215L109.792 47.3385H109.788ZM110.63 44.985H112.128L111.379 42.8169L110.63 44.985Z" fill="#064077"/>
                </svg>
            </a>
            <div class="container__info">
                <a class="container__phone" href="tel:<?php echo clearPhone(get_field( 'phone', 'option' )); ?>">
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="40" height="40" rx="20" fill="#064077"/>
                        <path d="M24.1653 28.8835C25.0469 29.0388 25.9531 29.0388 26.8347 28.8835C28.2516 28.6338 29.3929 27.6826 29.786 26.4236L29.8694 26.1565C29.956 25.879 30 25.5919 30 25.3034C30 24.0313 28.8623 23 27.4589 23H23.5411C22.1377 23 21 24.0313 21 25.3034C21 25.5919 21.044 25.879 21.1306 26.1565L21.214 26.4236C21.6071 27.6826 22.7484 28.6338 24.1653 28.8835ZM24.1653 28.8835C18.042 27.7489 13.2511 22.958 12.1165 16.8347M12.1165 16.8347C11.9612 15.9531 11.9612 15.0469 12.1165 14.1653C12.3662 12.7484 13.3174 11.6071 14.5764 11.214L14.8435 11.1306C15.121 11.044 15.4081 11 15.6966 11C16.9687 11 18 12.1377 18 13.5411L18 17.4589C18 18.8623 16.9687 20 15.6966 20C15.4081 20 15.121 19.956 14.8435 19.8694L14.5764 19.786C13.3174 19.3929 12.3662 18.2516 12.1165 16.8347Z" stroke="white" stroke-width="1.5"/>
                    </svg>
                </a>
                <a class="container__menu" id="hamburger-icon" href="#">
                    <span class="line line-1"></span>
                    <span class="line line-2"></span>
                    <span class="line line-3"></span>
                </a>
            </div>
        </div>
    </header>

    <div class="main-background"></div>

    <div class="main-menu">
        <div class="main-menu__container container">
            <div class="container__menu">
                <a class="menu__item" href="/#activity">О нас</a>
                <a class="menu__item" href="/#projects">Проекты</a>
                <a class="menu__item" href="/#news">Новости</a>
                <a class="menu__item" href="/#documents">Документы</a>
                <a class="menu__item" href="/#contacts">Контакты</a>
            </div>
            <a class="container__contact-us default-button" href="/#contacts">Связаться с нами</a>
        </div>
    </div>

        <div class="popup__sent mfp-hide mfp-with-anim">
            <div class="sent__closed mfp-close">
                <svg class="mfp-close" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M25 1L1.00035 25M1 1L24.9996 25" stroke="#1B1B1B" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="sent__info">
                <div class="info__svg">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="30" fill="#279DD9"/>
                        <path d="M40 22.5L26.25 36.25L20 30" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="info__title">Cпасибо!</div>
                <div class="info__description">Ваша заявка успешно отправлена. В ближайшее время менеджер вам перезвонит для уточнения деталей.</div>
            </div>
        </div>

        <div class="popup__failed mfp-hide mfp-with-anim">
            <div class="failed__closed mfp-close">
                <svg class="mfp-close" width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="mfp-close" d="M25 1L1.00035 25M1 1L24.9996 25" stroke="#1B1B1B" stroke-linecap="round"/>
                </svg>
            </div>
            <div class="failed__info">
                <div class="info__svg">
                    <svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="30" cy="30" r="30" fill="#279DD9"/>
                        <path d="M37.5 22.5L22.5 37.5M22.5 22.5L37.5 37.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div class="info__title">Что-то пошло не так</div>
                <div class="info__description">Пожалуйста, обновите страницу или вернитесь на нее позже.</div>
            </div>
        </div>