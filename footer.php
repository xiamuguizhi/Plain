<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php if(in_array('hitokoto', $this->options->effect)): ?>
<div id="hitokoto" class="center"><p>Everyone is their own God.</p></div>
<script>
fetch('https://sslapi.hitokoto.cn/?encode=json')
    .then(function(_){
        return _.text();
    }).then(function(_){
        var hitokoto = JSON.parse(_).from + '：' + JSON.parse(_).hitokoto;
        $('#hitokoto > p').text(hitokoto);
    })
</script>
<?php endif; ?>
<div id="back-to-top"><svg id="top" t="1524647984258" class="icon" style="" viewBox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg" p-id="2121" xmlns:xlink="http://www.w3.org/1999/xlink" width="200" height="200"><defs><style type="text/css"></style></defs><path d="M284.596383 360.521108c-38.522776 0-69.866443 31.341192-69.866443 69.866443 0 38.530197 31.356035 69.866443 69.866443 69.866443 38.517828 0 69.866443-31.336244 69.866443-69.866443C354.462824 391.8623 323.12658 360.521108 284.596383 360.521108zM284.596383 460.190008c-16.418935 0-29.790089-13.358785-29.790089-29.785141 0-16.438726 13.371154-29.795037 29.790089-29.795037s29.790089 13.356311 29.790089 29.795037C314.386472 446.831225 301.027687 460.190008 284.596383 460.190008zM605.78114 360.521108c-38.522776 0-69.87139 31.341192-69.87139 69.866443 0 38.530197 31.360983 69.866443 69.87139 69.866443 38.537619 0 69.898602-31.336244 69.898602-69.866443C675.677268 391.8623 644.318759 360.521108 605.78114 360.521108zM605.78114 460.190008c-16.411514 0-29.795037-13.358785-29.795037-29.785141 0-16.438726 13.383522-29.795037 29.795037-29.795037 16.438726 0 29.824723 13.356311 29.824723 29.795037C635.60339 446.831225 622.244605 460.190008 605.78114 460.190008zM873.661874 687.643103c0-116.068045 64.379445-156.901396 67.001725-158.50445 9.524318-5.635428 12.653738-17.92551 7.01831-27.449828-5.647797-9.541635-17.950248-12.668581-27.462197-7.033153-3.53513 2.102772-86.636664 52.915629-86.636664 192.987431 0 79.368496 27.108436 130.39163 48.883256 171.393203 15.614935 29.352218 27.929755 52.559395 27.929755 79.084003 0 19.006581-4.136275 32.729021-11.948691 39.734962-7.958372 7.122211-18.355959 6.065878-18.551393 6.065878-0.952432-0.143483-1.929602-0.207803-2.896878-0.207803l-73.757807 0c8.584256-13.437947 13.645751-29.327479 13.645751-46.431671L816.88704 33.903778c0-8.994914-6.001557-16.888966-14.677346-19.308391-8.648576-2.439216-17.873559 1.244346-22.529342 8.942964l-97.870412 161.999998c-30.030053-0.57146-118.272244-1.25919-382.427362-1.25919-56.089577 0-83.85111 0.039582-97.87536 0.138535L111.347793 10.817821c-4.264916-8.205757-13.62596-12.438513-22.53429-10.234313-8.982545 2.191831-15.298282 10.234313-15.298282 19.464243l0 917.209186c0 47.695808 38.792425 86.508024 86.500602 86.508024L466.223899 1023.76496l264.167487 0 145.511795 0c1.316087 0.116271 3.181369 0.235016 5.504314 0.235016 9.798916 0 27.422616-2.179461 42.946017-15.577827 17.324365-14.976682 26.118898-38.626678 26.118898-70.329052 0-36.516484-15.837581-66.33626-32.602856-97.895151C897.143648 801.229878 873.661874 757.019723 873.661874 687.643103zM466.223899 983.700976 160.015824 983.700976c-25.596915 0-46.424249-20.834755-46.424249-46.429197L113.591574 102.125111l58.014232 111.689333c3.671192 7.109841 11.461342 11.226327 19.053585 10.768665 4.020005-0.103902 34.505246-0.227594 108.723187-0.227594 154.031732 0 375.982985 0.482401 391.536073 1.24682 7.589768 0.808949 15.236435-2.820188 19.308391-9.556479l66.583645-110.22234 0 831.460633c0 25.596915-20.819912 46.431671-46.416827 46.431671L466.223899 983.715819 466.223899 983.700976zM480.260517 540.694001l-70.133617 0c-11.058104 0-20.040651 8.962754-20.040651 20.038177 0 11.077895 8.982545 20.040651 20.040651 20.040651l15.204276 0-1.481836 25.505382c-0.658044 11.050683 7.787677 20.520577 18.830938 21.173673 0.390868 0.012369 0.789158 0.027212 1.175078 0.027212 10.541071 0 19.372711-8.23297 19.986226-18.877942l1.617897-27.840696 14.798564 0c11.063052 0 20.038177-8.96028 20.038177-20.038177S491.323571 540.694001 480.260517 540.694001z" p-id="2122"></path></svg></div>
<footer id="footer" role="contentinfo">
    &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> -
    <?php _e('Using <a href="http://www.typecho.org">Typecho</a> &'); ?>
    <?php _e('Theme by <a href="https://github.com/ShiYiYa/Plain">Godme</a>'); ?>
    <p>除非特别注明，本站内容采用<?php _e('<a href="https://creativecommons.org/licenses/by-nc-sa/4.0/">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>'); ?>进行许可。</p>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
</div>
<canvas></canvas>
</body>
<?php if(in_array('prism', $this->options->effect)): ?>
<script src="<?php $this->options->themeUrl('prism/prism.js');?>"></script>
<script>
$(document).on('pjax:end', function() {
	if(Prism){
		Prism.highlightAll(); 
	}
});
</script>
<?php endif; ?>
<script>
	var c=document.getElementsByTagName("canvas")[0],x=c.getContext("2d"),pr=window.devicePixelRatio||1,w=window.innerWidth,h=window.innerHeight,f=90,q,m=Math,r=0,u=m.PI*2,v=m.cos,z=m.random;c.width=w*pr;c.height=h*pr;x.scale(pr,pr);x.globalAlpha=0.6;function i(){x.clearRect(0,0,w,h);q=[{x:0,y:h*0.7+f},{x:0,y:h*0.7-f}];while(q[1].x<w+f){d(q[0],q[1])}}function d(i,j){x.beginPath();x.moveTo(i.x,i.y);x.lineTo(j.x,j.y);var k=j.x+(z()*2-0.25)*f,n=y(j.y);x.lineTo(k,n);x.closePath();r-=u/-50;x.fillStyle="#"+(v(r)*127+128<<16|v(r+u/3)*127+128<<8|v(r+u/3*2)*127+128).toString(16);x.fill();q[0]=q[1];q[1]={x:k,y:n}}function y(p){var t=p+(z()*2-1.1)*f;return(t>h||t<0)?y(p):t}document.onclick=i;document.ontouchstart=i;i();     
    //by evanyou ↑↑↑
    (function(){
        var pjaxContainer = '#main',
            pjaxTimeout = 30000,
            hostname = location.hostname;
        
        $("a:not([href*='"+ hostname +"'])").attr("target", "_blank");
        $(document).pjax('a[target!=_blank]', pjaxContainer, {
            fragment: pjaxContainer,
            timeout: pjaxTimeout
        });
        $(window).scroll(function(){
            if($(window).scrollTop() > 300){
                $('#back-to-top').fadeIn(300);  
            }else{
                $('#back-to-top').fadeOut(200);
                }  
            });
        $("#top, #back-to-top").click(function() {
            $("html, body").animate({scrollTop:0}, 500);
        });
        
    })();
	//版权信息，勿删。↓↓↓↓
    console.info(" %c Theme %c https://github.com/ShiYiYa/Plain", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3;padding:5px 5px 5px 0;");
    console.info(" %c Theme's Author %c https://runtua.cn", "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3;padding:5px 5px 5px 0;");
    console.info(" %c "+ $('#logo').text() + " %c "+ location.origin , "color: #fadfa3; background: #030307; padding:5px 0;", "background: #fadfa3;padding:5px 5px 5px 0;");
</script>
</html>
