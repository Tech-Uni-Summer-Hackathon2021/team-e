<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title>Tech.uni_automatic scoring</title>
    <link href="../../public/css/styles.css" rel="stylesheet">
    <link href="../../public/css/top.css" rel="stylesheet">
    <style type="text/css">
      .st1{opacity:1;fill:none;stroke:#fff;stroke-width:25.5118;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;}
    </style>
  </head>

  <body>
    <div class="svgall wrapper">
      <svg class="mask" viewBox="0 0 1366 768" id="move">
        <defs>
          <mask id="clipMask">
            <g id="mask">
              <path class="st1" d="M315.642,245.179c0,0,85.612-46.209,162.269-34.388c0,0-41.989-4.016-60.537,1.433
                c0,0-82.03,94.582-79.164,155.119l84.896-26.88c0,0,46.836-27.852,46.925-34.03c0,0-35.821-15.408-49.075,28.834
                c0,0-23.447,68.599,69.053-8.416c0,0,28.022-36.537,63.843-22.209c0,0-53.731,0-53.373,51.582c0,0,8.955,35.821,84.896-32.955
                c0,0,48.991-43.151,62.328-99.582c0,0-64.88,119.284-66.649,134.687c0,0,70.589-61.97,74.171-46.209
                c0,0-22.015,76.824,30.806,18.618l24.14,41.606l90.487-125.06c0,0,22.176-39.763,65.877-28.659c0,0-52.266,97.416-54.415,112.112
                c0,0-11.463,88.395,58.746-10.962l57.313-83.237c0,0-69.134,148.657-6.448,103.522c0,0,31.522-30.09,37.612-25.433
                c0,0-12.896,35.821-21.492,45.493c0,0,64.215-48.819,74.507-44.776c0,0-6.09,36.537,7.522,45.493c0,0,12.537,0,42.269-30.806
                c0,0,35.821-26.507,36.537-20.06c0,0-14.71,40.573-11.104,51.582c0,0,21.666-1.433,40.206-21.851l-8.159-80.597"/>
            </g>
          </mask>
        </defs>
        <image xlink:href="../images/base.svg" width="100%" height="100%" mask="url(#clipMask)"></image>
      </svg>
    
      
      <h2>This is a automatic scoring site.</h2>
      <div class="login-button">
        <button type="button" name="message" onclick="location.href='./login.php'">Login</button>
    </div>
    </div>

    
    
    

    <script src="https://cdn.jsdelivr.net/npm/vivus@latest/dist/vivus.min.js"></script>
    <script>
      new Vivus('move', {
        type: 'scenario-sync',
        duration: 100,
        forceRender: false,
        animTimingFunction: Vivus.EASE
      })
    </script>
  </body>
</html>
