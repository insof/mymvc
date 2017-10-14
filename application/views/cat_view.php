<?php
$arr = $data->getData();

print '<script>
  (function(i,s,o,g,r,a,m){i[\'GoogleAnalyticsObject\']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,\'script\',\'https://www.google-analytics.com/analytics.js\',\'ga\');

  ga(\'create\', \'UA-92806288-1\', \'auto\');
  ga(\'send\', \'pageview\');

</script> 
 <hr style="margin-top: 20px; margin-bottom: 40px;"><section class="well-lg">
                    <div class="container">
                        <div id="catimg" class="row">
                            <ul class="list text-md-center">    ';

foreach ($arr as $row) {
            print ' <li class="col-xl-2 col-md-4 wow fadeInLeft" data-wow-delay="0.1s">
                    <a href="/prod/view/?prod=' . $row->_data['id'] . '"><img src="/imag/' . $row->_data['caten'] . $row->_data['id'] . '.jpg"></a>
                        <p>' . $row->_data['name' . $data->getCurrentLanguage() . ''] . '</p>
                </li>';
}

print '                  </ul>
                        </div>
                    </div>
                </section>';