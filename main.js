// document.querySelector('main').addEventListener('click',(e)=>{
//     let xx = window.getComputedStyle(document.documentElement).getPropertyValue('--xx');
//     if(xx == "#f00"){
//         document.documentElement.style.setProperty('--xx',"#00f");
//     }
//     else{
//         document.documentElement.style.setProperty('--xx','#f00');
//     }
// });
// history.replaceState('data to be passed', 'Title of the page', '/');
const nextURL = 'https://my-website.com/page_b';
const nextTitle = 'My new page title';
const nextState = { additionalInformation: 'Updated the URL with JS' };
// window.history.pushState(nextState, nextTitle, nextURL);
// window.history.pushState(nextState,nextTitle,nextURL);
window.history.pushState("object or string", "Title", "/");

let canvasSize = 500;
let changed = false;
let partisalsNumber = 70;
let threshold = 0.3;
let animated = false;
let originalWidth = window.innerWidth;
let projects = document.querySelectorAll('.project');


if(window.innerWidth <= 630){
    partisalsNumber = 30;
}else if(window.innerWidth > 1500){
    partisalsNumber = 90;
    
}
if(window.innerWidth < 1400){
    threshold = 0.15;
}

function resizeCanvas(){
    if(window.innerWidth <= 550){
        canvasSize = 350;
        changed = true;
    }
    if(changed){
        document.getElementById('myCanvas').width = canvasSize;
        document.getElementById('myCanvas').height = canvasSize;
        // changed= false;
        canvasSize = 500;
    }

}

resizeCanvas()

let resize = () => {
    if(window.innerWidth >= 1400 && originalWidth < 1400 && animated){
        projects.forEach((project) => {
            project.classList.add('left-auto');
            project.classList.add('right-auto');
            project.childNodes[1].classList.add("left-[60px]");
            project.childNodes[3].classList.add("right-[60px]");
            project.childNodes[1].classList.remove("!left-[0px]");
            project.childNodes[1].classList.remove("!right-[0px]");
            project.childNodes[1].classList.remove("!left-[0px]");
            project.childNodes[3].classList.remove("!right-[0px]");
            
        })
        originalWidth = 1400;
    }else if(window.innerWidth < 1400 && originalWidth >= 1400 && animated){
        projects.forEach((project) => {
            
            project.classList.add("!opacity-[1]");
            project.classList.add("!translate-x-[0]");
            project.childNodes[1].classList.add("!left-[0px]");
            project.childNodes[1].classList.add("!right-[0px]");
            project.childNodes[1].classList.add("!left-[0px]");
            project.childNodes[3].classList.add("!right-[0px]");
            project.childNodes[1].classList.remove("left-[60px]");
            project.childNodes[1].classList.remove("left-[60px]");
            project.childNodes[3].classList.remove("right-[60px]");
            project.childNodes[3].classList.remove("right-[60px]");

            console.log(project.childNodes);
        })
        originalWidth = 400;
    }
}

$(window).on("resize", function(){                      
    resizeCanvas();
    resize()
});

/////////////////////// menu ////////////////////////////////

function functiondisable() {
    // To get the scroll position of current webpage
    TopScroll = window.pageYOffset || document.documentElement.scrollTop;
    LeftScroll = window.pageXOffset || document.documentElement.scrollLeft,
    
    // if scroll happens, set it to the previous value
    window.onscroll = function() {
    window.scrollTo(LeftScroll, TopScroll);
            };
    }
    
    function functionenable() {
    window.onscroll = function() {};
    }
let menu_opened = false;

function close_menu(){
    document.querySelector(".menu_top").classList.remove('animate-menu_button_top');
    document.querySelector(".menu_middle").classList.remove('animate-menu_button_middle');
    document.querySelector(".menu_bottom").classList.remove('animate-menu_button_bottom');
    document.querySelector(".menu_top").classList.add('animate-menu_button_top_reverse');
    document.querySelector(".menu_middle").classList.add('animate-menu_button_middle_reverse');
    document.querySelector(".menu_bottom").classList.add('animate-menu_button_bottom_reverse');
    document.querySelector("#menu").classList.remove("animate-menu_open");
    document.querySelector("#menu").classList.add("animate-menu_close");
    menu_opened = false;
    functionenable()

}
document.querySelector("#menu_button").addEventListener('click',(event)=>{
    // console.log(event.target.childNodes)
    functiondisable();
    if(!menu_opened){
        document.querySelector(".menu_top").classList.remove('animate-menu_button_top_reverse');
        document.querySelector(".menu_middle").classList.remove('animate-menu_button_middle_reverse');
        document.querySelector(".menu_bottom").classList.remove('animate-menu_button_bottom_reverse');
        document.querySelector(".menu_top").classList.add('animate-menu_button_top');
        document.querySelector(".menu_middle").classList.add('animate-menu_button_middle');
        document.querySelector(".menu_bottom").classList.add('animate-menu_button_bottom');
        document.querySelector("#menu").classList.remove("animate-menu_close");
        document.querySelector("#menu").classList.add("animate-menu_open");
        // document.querySelector(".main").classList.add('!h-[0px]');
        menu_opened = true;
    }
    else{
        close_menu();
        // document.querySelector(".main").classList.remove('!h-[0px]');
    }
});

document.querySelectorAll(".menu-links").forEach((link)=>{
    link.addEventListener('click',(e)=>{
        close_menu();
    })
})

/////////////////////end menu///////////////////////////////


// contact//////////////////////////////////////////

let contactButtons = document.querySelectorAll(".contact-button");
contactButtons.forEach((elmnt)=>{
    elmnt.addEventListener('click',(event)=>{
        document.querySelector("#contact").classList.remove('z-[0]');
        document.querySelector("#contact").classList.remove('opacity-[0]');
        document.querySelector("#contact").classList.add('z-[6]');
        document.querySelector("#contact").classList.add('opacity-[1]');
    });
});

document.querySelector('#close_contact').addEventListener('click',(event)=>{
    document.querySelector("#contact").classList.remove('opacity-[1]');
    document.querySelector("#contact").classList.remove('z-[6]');
    document.querySelector("#contact").classList.add('z-[0]');
    document.querySelector("#contact").classList.add('opacity-[0]');});



    ////////////////////////ajax///////////////////////////////////////////


    document.querySelector("#send").addEventListener('click',(event)=>{
        let err = false;
        if(document.querySelector("#name").value.trim() == ""){
            document.querySelector("#name").classList.add("border-[1px]");
            document.querySelector("#name").classList.add("border-solid");
            document.querySelector("#name").classList.add("border-[#ff7c7cd9]");
            err = true;
        }
        if(document.querySelector("#email").value.trim() == ""){
            document.querySelector("#email").classList.add("border-[1px]");
            document.querySelector("#email").classList.add("border-solid");
            document.querySelector("#email").classList.add("border-[#ff7c7cd9]");
            err = true;
        }
        if(document.querySelector("#subject").value.trim() == ""){
            document.querySelector("#subject").classList.add("border-[1px]");
            document.querySelector("#subject").classList.add("border-solid");
            document.querySelector("#subject").classList.add("border-[#ff7c7cd9]");
            err = true;
        }
        if(document.querySelector("#message").value.trim() == ""){
            document.querySelector("#message").classList.add("border-[1px]");
            document.querySelector("#message").classList.add("border-solid");
            document.querySelector("#message").classList.add("border-[#ff7c7cd9]");
            err = true;
        }
        if(err){
            document.querySelector("#res").classList.remove('opacity-[0]')
        }else{
            document.querySelector("#res").innerHTML = "Thanks for reaching out. I will do my best to get back to you in no time.";
            document.querySelector("#res").classList.remove('opacity-[0]');

            $.ajax({
                method: "POST",
                url: "https://email-api-php.herokuapp.com/",
                data: { 
                    name: document.querySelector("#name").value, 
                    email: document.querySelector("#email").value, 
                    subject: document.querySelector("#subject").value, 
                    message: document.querySelector("#message").value
                },             
                beforeSend: function( xhr ) {
                //   xhr.overrideMimeType( "text/plain; charset=x-user-defined" );
                },
                // success: function(xhr){
                //     // alert("done");
                // }

              })
                .done(function( data ) {
                //   if ( console && console.log ) {
                //     console.log( "Sample of data:", data.slice( 0, 100 ) );
                //   }
                // alert("dd")
                });

        }
    });

    let inputs = document.querySelectorAll(".disable-roder");
    inputs.forEach((input)=>{
        input.addEventListener('click',(event)=>{
            event.target.classList.remove('border-[1px]')
            event.target.classList.remove('border-solid')
            event.target.classList.remove('border-[#ff7c7cd9]')
        });
    });

//end contact///////////////////////////////////////

////////////////////////////////////

let right = document.querySelectorAll('.animation-right');
let left = document.querySelectorAll('.animation-left');


const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        // if(entry.target.classList.contains('project-odd')){
            if(window.innerWidth >= 1400){

                entry.target.childNodes[1].classList.toggle('animate-left',entry.isIntersecting);
                entry.target.childNodes[3].classList.toggle('animate-right',entry.isIntersecting);
            }else{
                // entry.target.classList.toggle('animate-project_opacity',entry.isIntersecting);

                if(entry.target.classList.contains('project-odd')){
                    entry.target.classList.toggle('animate-project_left',entry.isIntersecting);

                }else{
                    entry.target.classList.toggle('animate-project_right',entry.isIntersecting);

                }

            }
        // }else{
        // console.log(entry.target.childNodes)

            // entry.target.childNodes[1].classList.toggle('animate-right',entry.isIntersecting);
            // entry.target.childNodes[3].classList.toggle('animate-left',entry.isIntersecting);
        // }
        if(entry.isIntersecting){
            animated = true;
            observer.unobserve(entry.target);
        }
    })
},{

    threshold:threshold,
}
);

let elements = [...projects];
elements.forEach((element)=>{

    observer.observe(element);
})

















/////////////////////////////////////

var canvas = document.getElementById('nokey'),
   can_w = parseInt(canvas.getAttribute('width')),
   can_h = parseInt(canvas.getAttribute('height')),
   ctx = canvas.getContext('2d');

// console.log(typeof can_w);
var BALL_NUM = partisalsNumber;

var ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      alpha: 1,
      phase: 0
   },
   ball_color = {
       r: 95,
       g: 80,
       b: 223
   },
   R = 2,
   balls = [],
   alpha_f = 0.03,
   alpha_phase = 0,
    
// Line
   link_line_width = 0.8,
   dis_limit = 260,
   add_mouse_point = true,
   mouse_in = false,
   mouse_ball = {
      x: 0,
      y: 0,
      vx: 0,
      vy: 0,
      r: 0,
      type: 'mouse'
   };

// Random speed
function getRandomSpeed(pos){
    var  min = -1,
       max = 1;
    switch(pos){
        case 'top':
            return [randomNumFrom(min, max), randomNumFrom(0.1, max)];
            break;
        case 'right':
            return [randomNumFrom(min, -0.1), randomNumFrom(min, max)];
            break;
        case 'bottom':
            return [randomNumFrom(min, max), randomNumFrom(min, -0.1)];
            break;
        case 'left':
            return [randomNumFrom(0.1, max), randomNumFrom(min, max)];
            break;
        default:
            return;
            break;
    }
}
function randomArrayItem(arr){
    return arr[Math.floor(Math.random() * arr.length)];
}
function randomNumFrom(min, max){
    return Math.random()*(max - min) + min;
}
console.log(randomNumFrom(0, 10));
// Random Ball
function getRandomBall(){
    var pos = randomArrayItem(['top', 'right', 'bottom', 'left']);
    switch(pos){
        case 'top':
            return {
                x: randomSidePos(can_w),
                y: -R,
                vx: getRandomSpeed('top')[0],
                vy: getRandomSpeed('top')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'right':
            return {
                x: can_w + R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('right')[0],
                vy: getRandomSpeed('right')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'bottom':
            return {
                x: randomSidePos(can_w),
                y: can_h + R,
                vx: getRandomSpeed('bottom')[0],
                vy: getRandomSpeed('bottom')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
        case 'left':
            return {
                x: -R,
                y: randomSidePos(can_h),
                vx: getRandomSpeed('left')[0],
                vy: getRandomSpeed('left')[1],
                r: R,
                alpha: 1,
                phase: randomNumFrom(0, 10)
            }
            break;
    }
}
function randomSidePos(length){
    return Math.ceil(Math.random() * length);
}

// Draw Ball
function renderBalls(){
    Array.prototype.forEach.call(balls, function(b){
       if(!b.hasOwnProperty('type')){
           ctx.fillStyle = 'rgba('+ball_color.r+','+ball_color.g+','+ball_color.b+','+b.alpha+')';
           ctx.beginPath();
           ctx.arc(b.x, b.y, R, 0, Math.PI*2, true);
           ctx.closePath();
           ctx.fill();
       }
    });
}

// Update balls
function updateBalls(){
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b){
        b.x += b.vx;
        b.y += b.vy;
        
        if(b.x > -(50) && b.x < (can_w+50) && b.y > -(50) && b.y < (can_h+50)){
           new_balls.push(b);
        }
        
        // alpha change
        b.phase += alpha_f;
        b.alpha = Math.abs(Math.cos(b.phase));
        // console.log(b.alpha);
    });
    
    balls = new_balls.slice(0);
}

// loop alpha
function loopAlphaInf(){
    
}

// Draw lines
function renderLines(){
    var fraction, alpha;
    for (var i = 0; i < balls.length; i++) {
        for (var j = i + 1; j < balls.length; j++) {
           
           fraction = getDisOf(balls[i], balls[j]) / dis_limit;
            
           if(fraction < 1){
               alpha = (1 - fraction).toString();

               ctx.strokeStyle = 'rgba(150,150,150,'+alpha+')';
               ctx.lineWidth = link_line_width;
               
               ctx.beginPath();
               ctx.moveTo(balls[i].x, balls[i].y);
               ctx.lineTo(balls[j].x, balls[j].y);
               ctx.stroke();
               ctx.closePath();
           }
        }
    }
}

// calculate distance between two points
function getDisOf(b1, b2){
    var  delta_x = Math.abs(b1.x - b2.x),
       delta_y = Math.abs(b1.y - b2.y);
    
    return Math.sqrt(delta_x*delta_x + delta_y*delta_y);
}

// add balls if there a little balls
function addBallIfy(){
    if(balls.length < BALL_NUM){
        balls.push(getRandomBall());
    }
}

// Render
function render(){
    ctx.clearRect(0, 0, can_w, can_h);
    
    renderBalls();
    
    renderLines();
    
    updateBalls();
    
    addBallIfy();
    
    window.requestAnimationFrame(render);
}

// Init Balls
function initBalls(num){
    for(var i = 1; i <= num; i++){
        balls.push({
            x: randomSidePos(can_w),
            y: randomSidePos(can_h),
            vx: getRandomSpeed('top')[0],
            vy: getRandomSpeed('top')[1],
            r: R,
            alpha: 1,
            phase: randomNumFrom(0, 10)
        });
    }
}
// Init Canvas
function initCanvas(){
    canvas.setAttribute('width', window.innerWidth);
    canvas.setAttribute('height', window.innerHeight);
    
    can_w = parseInt(canvas.getAttribute('width'));
    can_h = parseInt(canvas.getAttribute('height'));
}
window.addEventListener('resize', function(e){
    console.log('Window Resize...');
    initCanvas();
});

function goMovie(){
    initCanvas();
    initBalls(BALL_NUM);
    window.requestAnimationFrame(render);
}
goMovie();

// Mouse effect
canvas.addEventListener('mouseenter', function(){
    console.log('mouseenter');
    mouse_in = true;
    balls.push(mouse_ball);
});
canvas.addEventListener('mouseleave', function(){
    console.log('mouseleave');
    mouse_in = false;
    var new_balls = [];
    Array.prototype.forEach.call(balls, function(b){
        if(!b.hasOwnProperty('type')){
            new_balls.push(b);
        }
    });
    balls = new_balls.slice(0);
});
canvas.addEventListener('mousemove', function(e){
    var e = e || window.event;
    mouse_ball.x = e.pageX;
    mouse_ball.y = e.pageY;
    // console.log(mouse_ball);
});




/////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////
$(document).ready(function() {
    $('#myCanvas').tagcanvas({
      textColour : '#2cdaef',
      outlineColour : '#5f50df',
      bgOutlineThickness: 0,
      freezeActive:true,
      initial:[0.2,-0.2],
      noMouse:false,
      outlineThickness:1,
      zoomMax:1.5,
      zoomMin:0.5,
      zoom:1,
      minSpeed:1,
      cliclToFront:1,
      shuffleTags:true,
      wheelZoom:false,
      noSelect:true,
    // textColour : '#08FDD8',
    // outlineThickness : 0.5,
    // outlineColour : '#FE0853',
    // maxSpeed : 0.06,
    // freezeActive:true,
    // shuffleTags:true,
    shape:'sphere',
    zoom:0.9,
    // noSelect:true,
    // textFont:null,
    // pinchZoom:true,
    // wheelZoom:false,
    // freezeDecel:true,
    fadeIn:3000,
    // initial: [0.3,-0.1],
    depth : 1.1,
    activeAudio:false,
    audioVolume:0.0,
      


    });
  });

$(".stop").on('click',(e)=>{
    e.preventDefault();
})



