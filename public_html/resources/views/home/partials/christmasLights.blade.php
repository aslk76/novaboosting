<div style="position:fixed;z-index:1;white-space:nowrap">
    <ul class="lightrope">
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
       <li></li>
     </ul>
   </div>
     <style>
       $globe-width:   12px;
       $globe-height:  28px;
       $globe-spacing: 40px;
       $globe-spread: 3px;
       $light-off-opacity: 0.4;
   
       .lightrope {
       text-align: center;
       white-space: nowrap;
       overflow: hidden;
       position: sticky;
       z-index: 1;
       margin: auto;
       padding: 0;
       pointer-events: none;
       width: 100%;
       right: 0;
       top: 65px;
     }
     
     .lightrope li {
       position: relative;
       -webkit-animation-fill-mode: both;
               animation-fill-mode: both;
       -webkit-animation-iteration-count: infinite;
               animation-iteration-count: infinite;
       list-style: none;
       margin: 0;
       padding: 0;
       display: block;
       width: 12px;
       height: 28px;
       border-radius: 50%;
       margin: 20px;
       display: inline-block;
       background: #00f7a5;
       box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;
       -webkit-animation-name: flash-1;
               animation-name: flash-1;
       -webkit-animation-duration: 2s;
               animation-duration: 2s;
     }
     
     .lightrope li:nth-child(2n+1) {
       background: aqua;
       box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.5);
       -webkit-animation-name: flash-2;
               animation-name: flash-2;
       -webkit-animation-duration: 0.4s;
               animation-duration: 0.4s;
     }
     
     .lightrope li:nth-child(4n+2) {
       background: #f70094;
       box-shadow: 0px 4.6666666667px 24px 3px #f70094;
       -webkit-animation-name: flash-3;
               animation-name: flash-3;
       -webkit-animation-duration: 1.1s;
               animation-duration: 1.1s;
     }
     
     .lightrope li:nth-child(odd) {
       -webkit-animation-duration: 1.8s;
               animation-duration: 1.8s;
     }
     
     .lightrope li:nth-child(3n+1) {
       -webkit-animation-duration: 1.4s;
               animation-duration: 1.4s;
     }
     
     .lightrope li:before {
       content: "";
       position: absolute;
       background: #222;
       width: 10px;
       height: 9.3333333333px;
       border-radius: 3px;
       top: -4.6666666667px;
       left: 1px;
     }
     
     .lightrope li:after {
       content: "";
       top: -14px;
       left: 9px;
       position: absolute;
       width: 52px;
       height: 18.6666666667px;
       border-bottom: solid #222 2px;
       border-radius: 50%;
     }
     
     .lightrope li:last-child:after {
       content: none;
     }
     
     .lightrope li:first-child {
       margin-left: -40px;
     }
     
     @-webkit-keyframes flash-1 {
       0%, 100% {
         background: #00f7a5;
         box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;
       }
     
       50% {
         background: rgba(0, 247, 165, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 247, 165, 0.2);
       }
     }
     
     @keyframes flash-1 {
       0%, 100% {
         background: #00f7a5;
         box-shadow: 0px 4.6666666667px 24px 3px #00f7a5;
       }
     
       50% {
         background: rgba(0, 247, 165, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 247, 165, 0.2);
       }
     }
     
     @-webkit-keyframes flash-2 {
       0%, 100% {
         background: aqua;
         box-shadow: 0px 4.6666666667px 24px 3px aqua;
       }
     
       50% {
         background: rgba(0, 255, 255, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.2);
       }
     }
     
     @keyframes flash-2 {
       0%, 100% {
         background: aqua;
         box-shadow: 0px 4.6666666667px 24px 3px aqua;
       }
     
       50% {
         background: rgba(0, 255, 255, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(0, 255, 255, 0.2);
       }
     }
     
     @-webkit-keyframes flash-3 {
       0%, 100% {
         background: #f70094;
         box-shadow: 0px 4.6666666667px 24px 3px #f70094;
       }
     
       50% {
         background: rgba(247, 0, 148, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(247, 0, 148, 0.2);
       }
     }
     
     @keyframes flash-3 {
       0%, 100% {
         background: #f70094;
         box-shadow: 0px 4.6666666667px 24px 3px #f70094;
       }
     
       50% {
         background: rgba(247, 0, 148, 0.4);
         box-shadow: 0px 4.6666666667px 24px 3px rgba(247, 0, 148, 0.2);
       }
     }
   </style>
   