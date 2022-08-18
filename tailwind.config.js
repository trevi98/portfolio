/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js}"],
    theme: {
      screens: {
        'sm': '200px',
        // => @media (min-width: 576px) { ... }
  
        'csm': '924px',

        'smd': '600px',
        'md': '960px',
        // => @media (min-width: 960px) { ... }
  
        'lg': '1400px',
        // => @media (min-width: 1440px) { ... }
      },
    extend: {
      colors: {
        "c-main-color": "var(--c-main-color)",
        "c-main-text-color": "var(--c-main-text-color)",
        "c-main-text-color-shadwo": "var(--c-main-text-color-shadwo)",
        "c-main-headers-color": "var(--c-main-headers-color)",
        "c-headers-color": "var(--c-headers-color)",
        "c-call-to-action-color": "var(--c-call-to-action-color)",

      },
      keyframes: {
        left: {
          '50%':{'left':'30px'},
          '75%':{'left':'45px'},
          '100%': {'left':'60px'}
        },
        project_left: {

          '0%':{'transform':'translateX(-75%)','opacity':'0'},
          '100%': {'transform':'translateX(0)','opacity':'1'}
        },
        project_right: {
          '0%':{'transform':'translateX(75%)','opacity':'0'},
          '100%': {'transform':'translateX(0)','opacity':'1'}
        },
        right: {
          '50%':{'right':'30px'},
          '75%':{'right':'45px'},
          '100%': {'right':'60px'}
        },
        start_logo: {
          '0%':{'opacity':'0'},
          '25%':{'opacity':'0.25'},
          '50%':{'opacity':'0.5'},
          '75%':{'opacity':'0.75'},
          '100%':{'opacity':'1'},
        },
        start_bar: {
          '0%':{'width':'0'},
          '25%':{'width':'25%'},
          '50%':{'width':'50%'},
          '75%':{'width':'75%'},
          '100%':{'width':'100%'},
        },
        start_window: {
          '0%':{'transform':'scaleY(1)'},
          '25%':{'transform':'scaleY(0.75)'},
          '50%':{'transform':'scaleY(0.5)'},
          '75%':{'transform':'scaleY(0.25)'},
          '100%':{'transform':'scaleY(0)'},
        },
        start_site_header: {
          '0%':{'height':'0'},
          '100%':{'height':'70px'},
        },
        start_site_main: {
          '0%':{'height':'0'},
          '100%':{'height':'auto'},
        },
        menu_button_top: {
          '0%':{'transform':'translateY(0) rotate(0)'},
          '100%':{'transform':'translateY(14px) rotate(45deg)'},
        },
        menu_button_bottom: {
          '0%':{'transform':'translateY(0) rotate(0)'},
          '100%':{'transform':'translateY(-14px) rotate(-45deg)'},
        },
        menu_button_middle: {
          '0%':{'opacity':'1'},
          '100%':{'opacity':'0'},
        },
        menu_button_top_reverse: {
          '0%':{'transform':'translateY(14px) rotate(45deg)'},
          '100%':{'transform':'translateY(0) rotate(0)'},
        },
        menu_button_bottom_reverse: {
          '0%':{'transform':'translateY(-14px) rotate(-45deg)'},
          '100%':{'transform':'translateY(0) rotate(0)'},
        },
        menu_button_middle_reverse: {
          '0%':{'opacity':'0'},
          '100%':{'opacity':'1'},
        },
        menu_open: {
          '0%':{'top':'-100vh'},
          '100%':{'top':'0'},
        },
        menu_close: {
          '0%':{'top':'0'},
          '100%':{'top':'-100vh'},
        },
      },
      animation: {
        left: 'left 1.3s linear forwards',
        project_left: 'project_left 0.5s linear forwards',
        project_right: 'project_right 0.5s linear forwards',
        right:'right 1.3s linear forwards',
        start_logo:'start_logo 0.7s linear forwards',
        start_bar:'start_bar 0.8s linear 0.4s forwards',
        start_window:'start_window 0.3s linear 1.5s forwards',
        start_site_header:'start_site_header 0.1s linear 1.5s forwards',
        start_site_main:'start_site_main 0.1s linear 1.5s forwards',
        menu_button_top:'menu_button_top 0.3s linear forwards',
        menu_button_bottom:'menu_button_bottom 0.3s linear forwards',
        menu_button_middle:'menu_button_middle 0.3s linear forwards',
        menu_button_top_reverse:'menu_button_top_reverse 0.3s linear forwards',
        menu_button_bottom_reverse:'menu_button_bottom_reverse 0.3s linear forwards',
        menu_button_middle_reverse:'menu_button_middle_reverse 0.3s linear forwards',
        menu_open:'menu_open 0.3s linear forwards',
        menu_close:'menu_close 0.3s linear forwards',
      },
      boxShadow: {
        'xx':'0px 0px 19px 0px rgba(0,0,0,0.75)',
      }
    },
  },
  plugins: [],
}
